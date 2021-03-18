<?php

namespace App\Controllers;

class Login extends BaseController
{
	
	public function __construct() {
		$this->session = \Config\Services::session();

		echo view("alert");
		
		if (!$this->session->get('id')) {
			return redirect()->to(base_url('admin/login'));
		}

	}


	public function index()
	{

		if (isset($_POST['submit'])) {

			$validate = array(
				'email' => "required",
				'password' => "required",
			);

			$email = $_POST['email'];
			$password = md5(md5($_POST['password']));

			if ($this->validate($validate)) {

				$userDetails = $this->users->UserDetails($email, $password);
				if ($userDetails) {
					$time = date("H");

					$timezone = date("e");

					if ($time < "12" AND $time > "6") {
						// echo 
						$greet = "Good Morning";
					} else

					if ($time >= "12" && $time < "17") {
						// echo 
						$greet = "Good Afternoon";
					} else

					if ($time >= "17" && $time < "19") {
						// echo 
						$greet = "Good Evening";
					} else

					if ($time >= "19" OR $time >= "00") {
						// echo 
						$greet = "Good Night";
					}
					
					$this->session->set($userDetails);
					
					$this->session->setFlashdata('success','Hi, ' . $this->session->get('username') . ', ' . $greet . '<br> The time now is '. date("h:i a"));

					return redirect()->to(base_url("admin/dashboard"));

				}else{
				
					$this->session->setFlashdata('error','Email/Username and Password are incorrect!');

					return redirect()->to(base_url("login"));
				}

			}else{
				
				$this->session->setFlashdata('error','Email/Username and Password fields are required!');

				return redirect()->to(base_url("login"));
			}
			
		}

		$data['sitename'] = $this->site->GetSite('sitename');
		$data['sitelogo'] = base_url($this->site->GetSite('icon'));

		if (!$this->session->get('id')) {
			
			return view('admin/login/login', $data);

		}else{
			return redirect()->to(base_url("admin/dashboard"));
		}

	}

	public function logout()
	{
		$this->session->destroy();
		$this->session->setFlashdata('success','Successfully logged out!');
		return redirect()->to(base_url("login"));
	}
}


