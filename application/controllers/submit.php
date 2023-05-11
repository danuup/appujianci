<?php

defined('BASEPATH') or exit('No direct script access allowed');



class submit extends CI_Controller
{
    public function index()
	$login_salah = '';

		if ($this->input->post()) {
			$nama = $this->input->post('nama');
			$nim = $this->input->post('nim');
	
			if ($username == 'danu' && $password == '123' ) {
				redirect('backend/dashboard');
			} else {
				$login_salah = 'kombinasi username & password salah';
			}
		}



		view('login', ['login_salah' => $login_salah]);
	}

}
