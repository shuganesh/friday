<?php

namespace App\Controllers;

class Install extends BaseController
{
	public function __construct() {
		echo view('alert');
	}
	public function index()
	{

		if (isset($_POST['submit'])) {


			if ($this->validate([
				'siteName' => 'required',
				'siteURL' => 'required',
				'siteEmail' => 'required',
				'username' => 'required',
				'password' => 'required',
				'hostName' => 'required',
				'DBusername' => 'required',
				'DBpassword' => 'required',
				'DBname' => 'required',
				])) {
				
				$config['hostname'] = $_POST['hostName'];
    			$config['username'] = $_POST['DBusername'];
    			$config['database'] = $_POST['DBname'];
    			$config['password'] = $_POST['DBpassword'];
    			$config['DBDriver'] = 'mysqli';

    			$db = \Config\Database::connect($config);

				if($db->connect()) {
				    
					$fp = fopen('./../.env', 'a');//opens file in append mode  
					fwrite($fp, "\n");  
					fwrite($fp, "\n");  
					fwrite($fp, "#--------------------------------------------------------------------\n");  
					fwrite($fp, "# Custom Info\n");  
					fwrite($fp, "#--------------------------------------------------------------------\n");  
					fwrite($fp, "\n");  

					fwrite($fp, "app.baseURL = '" . $_POST['siteURL'] ."'\n");  
					fwrite($fp, "database.default.hostname = ". $_POST['hostName'] ."\n");  
					fwrite($fp, "database.default.database = ". $_POST['DBname'] ."\n");  
					fwrite($fp, "database.default.username = ". $_POST['DBusername'] ."\n");  
					fwrite($fp, "database.default.password = ". $_POST['DBpassword'] ."\n");  
					fwrite($fp, "database.default.DBDriver = MySQLi\n");  
					fclose($fp);  

					$sql = "";
					$filename = './../public/assets/install/database.php';
					$lines = file($filename);
					foreach($lines as $line) {
					    if ($line && (substr($line, 0, 2) != '--') && (substr($line, 0, 1) != '#')) {
					    
					        $sql .= $line;

					        if (preg_match('/;\s*$/', $line)) {
					    
					        $sql = str_replace("DROP TABLE IF EXISTS ", "DROP TABLE IF EXISTS ", $sql);
					        $sql = str_replace("CREATE TABLE ", "CREATE TABLE ", $sql);
					        $sql = str_replace("INSERT INTO ", "INSERT INTO ", $sql);
					        if ($db->query($sql)){
							    
							    // echo "Success!";
							}
							else{
				    			$this->session->setFlashdata('error',$db->error());
								return redirect()->to(str_replace('/index.php', '','http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']));
							}
					        $sql = '';

					        }
					    }
					}

					$sql= "UPDATE user SET email = '".$_POST['siteEmail']."', username = '".$_POST['username']."', password='".md5(md5($_POST['password']))."',second_password='".md5(md5($_POST['password']))."' WHERE id = '1';";

				    		echo "string";
				    if ($db->query($sql) == TRUE) {

				    	$sql = "UPDATE settings SET value = '".$_POST['siteName']."' WHERE name = 'sitename';";

				    	if ($db->query($sql) == TRUE) {
				    		$db->close();
				    		$this->session->setFlashdata('success','Successfully configured the Framework!');
							return redirect()->to($_POST['siteURL'] . "install/success");
				    	}
				    }
				} else {
				    
				    $this->session->setFlashdata('error','Unable to connect with database with given db details.');
					return redirect()->to(str_replace('/index.php', '','http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']));
				}
			}else{
				
				$this->session->setFlashdata('error','Unable to connect with database with given db details.');

				return redirect()->to(str_replace('/index.php', '','http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']));
			}
		}
		if (base_url() != str_replace('/index.php/install', '','http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'])) {
			return view('install/install');
		}else{
			return redirect()->to(base_url());
		}
	}

	public function success()
	{
		return view('install/success');
	}
}
