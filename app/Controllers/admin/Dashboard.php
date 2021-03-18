<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;

class Dashboard extends \App\Controllers\BaseController
{

	public function __construct() {
		$this->session = \Config\Services::session();
		
		echo view("alert");
		if ($this->session->get("id") == NULL) {
			header('Location: '.base_url("login"));
			exit(); 
		}

	}

	public function index()
	{

		$data['sitename'] = $this->site->GetSite('sitename');
		$data['sitelogo'] = base_url($this->site->GetSite('icon'));
		$data['sysInfo'] = $this->GetCPU("memusage");
		$data['virtualHost'] = $this->check_virtualhost();
		return view('admin/dashboard/dashboard', $data);
	}

	public function git()
	{
		$data['sitename'] = $this->site->GetSite('sitename');
		$data['sitelogo'] = base_url($this->site->GetSite('icon'));
		$data['sysInfo'] = $this->GetCPU("memusage");
		$data['virtualHost'] = $this->check_virtualhost();
		return view('admin/git/git', $data);
	}

	public function GetCPU()
	{
		exec( 'systeminfo', $output );

		foreach ( $output as $value ) {
			if ( preg_match( '|Total Physical Memory\:([^$]+)|', $value, $totalmemory ) ) {

				$total_memory = (int)preg_replace('/\D/ui','',trim( $totalmemory[1] ));
			}
			if ( preg_match( '|Virtual Memory\:([^$]+)|', $value, $memories ) ) {
				foreach ($memories as $memories) {

					if ( preg_match( '|In Use\:([^$]+)|', $memories, $memoryUsed ) ) {

						$used_memory = (int)preg_replace('/\D/ui','',trim( $memoryUsed[1] ));
						$memory = round(($used_memory/$total_memory)*100);
						// print_r("<br>" .$memory);
					}

				}
			}

			if ( preg_match( '|OS Name\:([^$]+)|', $value, $osnames ) ) {
				$osname = trim( $osnames[1] );
			}

			if ( preg_match( '|OS Version\:([^$]+)|', $value, $osversions ) ) {
				$osversion = trim( $osversions[1] );
			}

			if ( preg_match( '|Host Name\:([^$]+)|', $value, $host ) ) {
				$hostname = trim( $host[1] );
			}

			if ( preg_match( '|Time Zone\:([^$]+)|', $value, $time ) ) {
				$timezone = trim( $time[1] );
			}

			if ( preg_match( '|System Locale\:([^$]+)|', $value, $system ) ) {
				$systemlocale = trim( $system[1] );
			}
		}

		$bytes = disk_free_space("D:");
	    $si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
	    $base = 1024;
	    $class = min((int)log($bytes , $base) , count($si_prefix) - 1);
	    $diskspace = sprintf('%1.2f' , $bytes / pow($base,$class)) . ' ' . $si_prefix[$class];

	    $totalbytes = disk_total_space("D:");
	    $si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
	    $base = 1024;
	    $class = min((int)log($totalbytes , $base) , count($si_prefix) - 1);
	    $totaldiskspace = sprintf('%1.2f' , $totalbytes / pow($base,$class)) . ' ' . $si_prefix[$class];

	    $diskspacep = round(($bytes/$totalbytes)*100);
	    exec('wmic cpu get LoadPercentage', $cpuloads);
    	$cpuload = $cpuloads[1];

		$data = array(
			'RamMemory' => $memory . "%", 
			'OSName' => $osname, 
			'OSVersion' => $osversion,
			'HostName' => $hostname,
			'TimeZone' => $timezone,
			'SystemLocale' => $systemlocale,
			'FreeDiskSpaceU' => $diskspace,
			'TotalDiskSpaceU' => $totaldiskspace,
			'FreeDiskSpace' => $bytes,
			'TotalDiskSpace' => $totalbytes,
			'FreeDiskSpaceP' => $diskspacep . "%",
			'CPULoadP' => $cpuload . "%",
		);

		return $data;
	}

	public function is_apache_var($a_var) {
		$configurationFile = '../../../wampmanager.conf';
		$wampConf = @parse_ini_file($configurationFile);
		$c_apacheVersionDir = $c_installDir.'/bin/apache';
		$c_apacheDefineConf = $c_apacheVersionDir.'/apache'.$wampConf['apacheVersion'].'/wampdefineapache.conf';
		if(file_exists($c_apacheDefineConf)) {
			$c_ApacheDefine = @parse_ini_file($c_apacheDefineConf);
		}
		else
			$c_ApacheDefine = array();

		if(preg_match('~\${(.+)}~',$a_var,$var) > 0) {
			if(array_key_exists($var[1],$c_ApacheDefine))
				return true;
		}
		return false;
	}

	public function replace_apache_var($chemin) {
		$configurationFile = '../../../wampmanager.conf';
		$wampConf = @parse_ini_file($configurationFile);
		$c_installDir = $wampConf['installDir'];
		$c_apacheVersionDir = $c_installDir.'/bin/apache';
		$c_apacheDefineConf = $c_apacheVersionDir.'/apache'.$wampConf['apacheVersion'].'/wampdefineapache.conf';
		if(file_exists($c_apacheDefineConf)) {
			$c_ApacheDefine = @parse_ini_file($c_apacheDefineConf);
		}
		else
			$c_ApacheDefine = array();

		if(preg_match('~\${(.+)}~',$chemin,$var) > 0) {
			if(array_key_exists($var[1],$c_ApacheDefine)) {
				$chemin = str_replace($var[0],trim($c_ApacheDefine[$var[1]]),$chemin);
			}
			else {
				$errorTxt = "Apache variable '".$var[0]."' is not defined.\n\tMay be there is syntax error in httpd.conf\n\tCheck it by right-click Wampmanager tray icon -> Tools -> Check httpd.conf syntax.\n\tMay be Apache service '".$c_apacheService."' is not started.\n\tCheck it by right-click Wampmanager tray icon -> Tools -> Check state of services\n";
				error_log($errorTxt);
				if(WAMPTRACE_PROCESS) error_log("function ".__FUNCTION__."\n*** ".$errorTxt."\n",3,WAMPTRACE_FILE);
			}
		}
		return $chemin;
	}

	public function listen_ports() {
		if(!defined('WAMPTRACE_PROCESS')) require '../../../scripts/config.trace.php';
		if(WAMPTRACE_PROCESS) error_log("function ".__FUNCTION__."\n",3,WAMPTRACE_FILE);
		$configurationFile = '../../../wampmanager.conf';
		$wampConf = @parse_ini_file($configurationFile);
		$c_DefaultPort = "80";	
		$c_installDir = $wampConf['installDir'];
		$c_apacheVersionDir = $c_installDir.'/bin/apache';
		$c_apacheConfFile = $c_apacheVersionDir.'/apache'.$wampConf['apacheVersion'].'/'.$wampConf['apacheConfDir'].'/'.$wampConf['apacheConfFile'];
		$c_apacheVhostConfFile = $c_apacheVersionDir.'/apache'.$wampConf['apacheVersion'].'/'.$wampConf['apacheConfDir'].'/extra/httpd-vhosts.conf';


		$httpdFileContents = file_get_contents($c_apacheConfFile);
		preg_match_all("~^Listen[ \t]+.*:(\S*)\s*$~m",$httpdFileContents, $matches);
		// print_r($matches[1]);
		$c_listenPort = $matches[1];
		sort($c_listenPort);
		return $c_listenPort;
	}

	public function check_virtualhost($check_files_only = false) {

		$configurationFile = '../../../wampmanager.conf';
		$wampConf = @parse_ini_file($configurationFile);
		$c_DefaultPort = "80";	
		$c_installDir = $wampConf['installDir'];
		$wwwDir = $c_installDir.'/www';
		$c_apacheVersionDir = $c_installDir.'/bin/apache';
		$c_apacheConfFile = $c_apacheVersionDir.'/apache'.$wampConf['apacheVersion'].'/'.$wampConf['apacheConfDir'].'/'.$wampConf['apacheConfFile'];
		$c_apacheVhostConfFile = $c_apacheVersionDir.'/apache'.$wampConf['apacheVersion'].'/'.$wampConf['apacheConfDir'].'/extra/httpd-vhosts.conf';

		clearstatcache();
		$virtualHost = array(
			'include_vhosts' => true,
			'vhosts_exist' => true,
			'nb_Server' => 0,
			'Server' => array(),
			'DocRootNotwww' => array(),
			'ServerName' => array(),
			'ServerNameDev' => array(),
			'ServerNameIp' => array(),
			'ServerNamePort' => array(),
			'ServerNameValid' => array(),
			'ServerNameQuoted' => array(),
			'ServerNameIDNA' => array(),
			'ServerNameUTF8' => array(),
			'ServerNameIpValid' => array(),
			'ServerNamePortValid' => array(),
			'ServerNamePortListen' => array(),
			'ServerNamePortApacheVar' => array(),
			'FirstServerName' => '',
			'nb_Virtual' => 0,
			'nb_Virtual_Port' => 0,
			'virtual_port' => array(),
			'virtual_ip' => array(),
			'nb_Document' => 0,
			'documentPath' => array(),
			'documentPathValid' => array(),
			'document' => true,
			'nb_Directory' => 0,
			'nb_End_Directory' => 0,
			'directoryPath' => array(),
			'directoryPathValid' => array(),
			'directory' => true,
			'port_number' => true,
			'nb_duplicate' => 0,
			'duplicate' => array(),
			'nb_duplicateIp' => 0,
			'duplicateIp' => array(),
			'nb_NotListenPort' => 0,
			'port_listen' => true,
			'NotListenPort' => array(),
		);
		$httpConfFileContents = file_get_contents($c_apacheConfFile);
		//is Include conf/extra/httpd-vhosts.conf uncommented?
		if(preg_match("~^[ \t]*#[ \t]*Include[ \t]+conf/extra/httpd-vhosts.conf.*$~m",$httpConfFileContents) > 0) {
			$virtualHost['include_vhosts'] = false;
			return $virtualHost;
		}

		$virtualHost['vhosts_file'] = $c_apacheVhostConfFile;
		if(!file_exists($virtualHost['vhosts_file'])) {
			$virtualHost['vhosts_exist'] = false;
			return $virtualHost;
		}
		if($check_files_only) {
			return $virtualHost;
		}

		$myVhostsContents = file_get_contents($virtualHost['vhosts_file']);
		// Extract values of ServerName (without # at the beginning of the line)
		$nb_Server = preg_match_all("/^(?![ \t]*#).*ServerName[ \t]+(.*?\r?)$/m", $myVhostsContents, $Server_matches);
		// Extract values of <VirtualHost *:xx> or <VirtualHost ip:xx> port number
		$nb_Virtual = preg_match_all("/^(?![ \t]*#).*<VirtualHost[ \t]+(?:\*|([0-9.]*)):(.*)>\R/m", $myVhostsContents, $Virtual_matches);
		// Extract values of DocumentRoot path
		$nb_Document = preg_match_all("/^(?![ \t]*#).*DocumentRoot[ \t]+(.*?\r?)$/m", $myVhostsContents, $Document_matches);
		// Count number of <Directory that has to match the number of ServerName
		$nb_Directory = preg_match_all("/^(?![ \t]*#).*<Directory[ \t]+(.*)>\R/m", $myVhostsContents, $Dir_matches);
		$nb_End_Directory = preg_match_all("~^(?![ \t]*#).*</Directory.*$~m", $myVhostsContents, $end_Dir_matches);
		$server_name = array();
		if($nb_Server == 0) {
			$virtualHost['nb_server'] = 0;
			return $virtualHost;
		}
		$virtualHost['nb_Server'] = $nb_Server;
		$virtualHost['nb_Virtual'] = $nb_Virtual;
		$virtualHost['nb_Virtual_Port'] = count($Virtual_matches[2]);
		$virtualHost['nb_Document'] = $nb_Document;
		$virtualHost['nb_Directory'] = $nb_Directory;
		$virtualHost['nb_End_Directory'] = $nb_End_Directory;
		//Check validity of port number
		$virtualHost['virtual_port'] = array_merge($Virtual_matches[2]);
		$virtualHost['virtual_ip'] = array_merge($Virtual_matches[1]);
		for($i = 0 ; $i < count($Virtual_matches[1]) ; $i++) {
			$value = trim($Server_matches[1][$i]);
			$port_ori = $virtualHost['virtual_port'][$i];
			$virtualHost['virtual_port'][$i] = $this->replace_apache_var($virtualHost['virtual_port'][$i]);
			$port = $virtualHost['virtual_port'][$i];
			$virtualHost['Server'][$i]['Port'] = $port;
			if($port <> '80')
				$value .= ':'.$port;
			$virtualHost['ServerNamePort'][$value] = $port;
			$virtualHost['ServerNamePortValid'][$value]	= true;
			$virtualHost['ServerNamePortListen'][$value]	= true;
			$virtualHost['ServerNamePortApacheVar'][$value] = true;
			if($port_ori <> $c_DefaultPort  && $port_ori <> $c_UsedPort && !is_apache_var($port_ori))
				$virtualHost['ServerNamePortApacheVar'][$value] = false;
			if(empty($port) || !is_numeric($port) || $port < 80 || $port > 65535) {
				$virtualHost['ServerNamePortValid'][$value]	= false;
				$virtualHost['port_number'] = false;
			}
		}

		//Check validity of DocumentRoot
		for($i = 0 ; $i < $nb_Document ; $i++) {
			$chemin = trim($Document_matches[1][$i], " \t\n\r\0\x0B\"");
			$chemin = $this->replace_apache_var($chemin);
			$virtualHost['Server'][$i]['DocumentRoot'] = $chemin;
			$virtualHost['documentPath'][$i] = $chemin;
			if((!file_exists($chemin) || !is_dir($chemin)) && $wampConf['NotCheckVirtualHost'] == 'off') {
				$virtualHost['documentPathValid'][$chemin] = false;
				$virtualHost['document'] = false;
			}
			else
				$virtualHost['documentPathValid'][$chemin] = true;
		}

		//Check validity of Directory path
		for($i = 0 ; $i < $nb_Directory ; $i++) {
			$chemin = trim($Dir_matches[1][$i], " \t\n\r\0\x0B\"");
			$chemin = $this->replace_apache_var($chemin);
			$virtualHost['directoryPath'][$i] = $chemin;
			$virtualHost['Server'][$i]['directoryPath'] = $chemin;
			if((!file_exists($chemin) || !is_dir($chemin)) && $wampConf['NotCheckVirtualHost'] == 'off') {
				$virtualHost['directoryPathValid'][$chemin] = false;
				$virtualHost['directory'] = false;
			}
			else
				$virtualHost['directoryPathValid'][$chemin] = true;
		}

		//Check validity of ServerName
		$TempServerName = array();
		$TempServerIp = array();
		for($i = 0 ; $i < $nb_Server ; $i++) {
			$value = trim($Server_matches[1][$i]);
			$virtualHost['Server'][$i]['ServerName'] = $value;
			$nameToCheck = $value;
		//First server name without :port if not 80
			if($i == 0)
				$virtualHost['FirstServerName'] = $value;
			if($virtualHost['virtual_port'][$i] <> '80') {
				$value .= ':'.$virtualHost['virtual_port'][$i];
			}
			$TempServerName[] = $value;
			$virtualHost['ServerName'][$value] = $value;
			$virtualHost['ServerNameDev'][$value] = false;
			$virtualHost['ServerNameIp'][$value] = false;
			$virtualHost['ServerNameIpValid'][$value] = false;

		//Validity of ServerName (Like domain name)
		// IDNA (Punycode) - 3.2.3 improve regex
			$regexIDNA = '#^([\w-]+://?|www[\.])?xn--[a-z0-9]+[a-z0-9\-\.]*[a-z0-9]+(\.[a-z]{2,7})?$#';
		// Not IDNA  /^[A-Za-z]+([-.](?![-.])|[A-Za-z0-9]){1,60}[A-Za-z0-9]$/
			if(
				(preg_match($regexIDNA,$nameToCheck,$matchesIDNA) == 0)
				&& (preg_match('/^
					(?=.*[A-Za-z])  # at least one letter somewhere
					[A-Za-z0-9]+ 		# letter or number in first place
					([-.](?![-.])		#  a . or - not followed by . or -
					|					#   or
					[A-Za-z0-9]			#  a letter or a number
					){0,60}					# this, repeated from 0 to 60 times - at least two characters
					[A-Za-z0-9]			# letter or number at the end
					$/x',$nameToCheck) == 0)
				&& $wampConf['NotCheckVirtualHost'] == 'off') {
				$virtualHost['ServerNameValid'][$value] = false;
				$virtualHost['ServerNameQuoted'][$value] = false;
				if(strpos($value,'"') !== false) {
					$virtualHost['ServerNameQuoted'][$value] = true;
					$virtualHost['ServerNameIDNA'][$value] = false;
					$virtualHost['ServerNameUTF8'][$value] = $value;
				}
			}
			elseif(strpos($value,"dummy-host") !== false || strpos($value,"example.com") !== false) {
				$virtualHost['ServerNameValid'][$value] = 'dummy';
			}
			else {
				$virtualHost['ServerNameValid'][$value] = true;
				$virtualHost['ServerNameQuoted'][$value] = false;
				if(empty($matchesIDNA[0])) {
					$virtualHost['ServerNameIDNA'][$value] = false;
					$virtualHost['ServerNameUTF8'][$value] = $value;
				}
				else {
					$virtualHost['ServerNameIDNA'][$value] = true;
					if(version_compare($c_phpVersion , '5.4.0', '<'))
						$virtualHost['ServerNameUTF8'][$value] = idn_to_utf8($value);
					else
						$virtualHost['ServerNameUTF8'][$value] = idn_to_utf8($value,IDNA_DEFAULT,INTL_IDNA_VARIANT_UTS46);
				}
			//Check optionnal IP
				if(!empty($virtualHost['virtual_ip'][$i])) {
					$Virtual_IP = $virtualHost['virtual_ip'][$i];
					$virtualHost['Server'][$i]['ip'] = $Virtual_IP;
					$virtualHost['ServerNameIp'][$value] = $Virtual_IP;
					if(check_IP($Virtual_IP)) {
						$virtualHost['ServerNameIpValid'][$value] = true;
						$TempServerIp[] = $Virtual_IP;
					}
				}
				else {
					$virtualHost['Server'][$i]['ip'] = '';
				}
			}
		} //End for

		//Check if tld is .dev
		if($wampConf['NotVerifyTLD'] == 'off') {
			foreach($virtualHost['ServerNameDev'] as $keydev => &$valuedev) {
				$tld = substr($keydev,-4);
				if($tld !== false && (strtolower($tld) == '.dev'))
					$valuedev = true;
			}
		}

		//Check if duplicate ServerName
		if($wampConf['NotCheckDuplicate'] == 'off' && $wampConf['NotCheckVirtualHost'] == 'off') {
			$array_unique = array_unique($TempServerName);
			if (count($TempServerName) - count($array_unique) != 0 ){
				$virtualHost['nb_duplicate'] = count($TempServerName) - count($array_unique);
				for ($i=0; $i < count($TempServerName); $i++) {
					if (!array_key_exists($i, $array_unique))
						$virtualHost['duplicate'][] = $TempServerName[$i];
				}
			}
			//Check duplicate Ip
			$array_unique = array_unique($TempServerIp);
			if (count($TempServerIp) - count($array_unique) != 0 ){
				$virtualHost['nb_duplicateIp'] = count($TempServerIp) - count($array_unique);
				for ($i=0; $i < count($TempServerIp); $i++) {
					if (!array_key_exists($i, $array_unique))
						$virtualHost['duplicateIp'][] = $TempServerIp[$i];
				}
			}
		}

		//Check VirtualHost port not Listen port in httpd.conf
		$diffVL = array_diff(array_values(array_unique(array_values($virtualHost['ServerNamePort']))),$this->listen_ports());
		if(count($diffVL) > 0) {
			$virtualHost['port_listen'] = false;
			$virtualHost['nb_NotListenPort'] = count($diffVL);
			foreach($diffVL as $value)
				$virtualHost['NotListenPort'] += array_fill_keys(array_keys($virtualHost['ServerNamePort'],$value),$value);
			foreach($virtualHost['NotListenPort'] as $key => $value)
				$virtualHost['ServerNamePortListen'][$key] = $value;
		}
		//Check if some VirtualHost use $wwwDir DocumentRoot reserved for localhost
		foreach($virtualHost['Server'] as $key => $value) {
			$SerName = $virtualHost['Server'][$key]['ServerName'];
			$DocRoot = $virtualHost['Server'][$key]['DocumentRoot'];
			if($value['Port'] != '80')
				$SerName .= ':'.$value['Port'];
			$virtualHost['DocRootNotwww'][$SerName] = true;
			if(strtolower($DocRoot) == strtolower($wwwDir) && stripos($SerName,'localhost') === false) {
				$virtualHost['DocRootNotwww'][$SerName] = false;
			}
		}

		if($wampConf['NotCheckVirtualHost'] == 'on') {
			$virtualHost['nb_Server'] = $virtualHost['nb_Virtual'];
			$virtualHost['nb_Document'] = $virtualHost['nb_Virtual'];
			$virtualHost['nb_Directory'] = $virtualHost['nb_Virtual'];
			$virtualHost['nb_End_Directory'] = $virtualHost['nb_Virtual'];
			$virtualHost['nb_duplicateIp'] = 0;
			$virtualHost['nb_duplicate'] = 0;
			$virtualHost['port_number'] = true;
			$virtualHost['port_listen'] = true;
			$virtualHost['nb_NotListenPort'] = 0;
		}
		//error_log(print_r($virtualHost, true));
		return $virtualHost;
	}
}


