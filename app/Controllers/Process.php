<?php

namespace App\Controllers;

class Process extends BaseController
{
	public function __construct() {
		defined('CI_DEBUG') || define('CI_DEBUG', false);

	}

	public function mode()
	{
		$mode = $this->site->GetSite("mode");
		// Light Mode
		if ($mode == 1) {

			$this->site->where("setting ='site' AND name='mode'")
			->set(['value' => 2])
			->update();
		}

		// Dark Mode
		if ($mode == 2) {

			$this->site->where("setting ='site' AND name='mode'")
			->set(['value' => 1])
			->update();
		}
	}

	public function cloneFile()
	{
		$wwwDir = $this->site->GetSite('wwwDir');
		$gitToken = $this->site->GetSite('gitToken');
		$headers=array();
		foreach (getallheaders() as $name => $value) {
			$headers[$name] = $value;
		}

		$filename = $headers['filename'];
		$cloneUrl = $headers['CloneUrl'];
		$cloneUrl = str_replace('https://', 'https://x-access-token:' . $gitToken . '@', $cloneUrl);
		if (!file_exists($wwwDir . $filename)) {
			shell_exec('cd ' . $wwwDir . ' && git clone ' . $cloneUrl . ' ' . $filename);
			// exec('cd ' . $wwwDir . ' && dir', $output);

			// print_r($cloneUrl);
			print_r(json_encode(array('isConfirmed' => true, 'isError' => false)));
		}else{

			print_r(json_encode(array('isError' => true,'isConfirmed' => false, 'errorMessage' => "Project Already Exist!!")));
		}

	}

	public function checkLicense($licenseKey, $email, $domain)
	{
		if ($licenseKey) {
			$statusMessage = FALSE;
			$userMessage = FALSE;
			$message = FALSE;
			$domainMessage = FALSE;
			$errorMessage = FALSE;
			$user_id = $this->license->GetRow("licenseKey = '$licenseKey'", "user_id");
			$status = $this->license->GetRow("licenseKey = '$licenseKey'", "status");
			$url = $this->license->GetRow("licenseKey = '$licenseKey'", "url");
			if ($user_id AND $status) {
				if ($status == 1) {
					if ($url == $domain) {
						$userDetails = $this->users->GetRow("email = '$email'", "id");

						if ($user_id == $userDetails) {

							$message = TRUE;

						}else{
							if ($user_id != $userDetails) {

								$userMessage = "Invalid User Email!";
							}
						}
					}else{
						$domainMessage = "License Key is not assigned for this domain.";
					}
				}else{
					if ($status == 2) {
						$statusMessage = "Your License is Expired.";
					}

					if ($status == 2) {
						$statusMessage = "Your License is Banned.";
					}
				}
			}else{
				$errorMessage = "Invalid License Key have been submited!";
			}

			$data = array(
				'message' => $message,
				'userMessage' => $userMessage,
				'statusMessage' => $statusMessage,
				'domainMessage' => $domainMessage,
				'errorMessage' => $errorMessage,
			);
			print_r(json_encode($data));
		}
	}
}
