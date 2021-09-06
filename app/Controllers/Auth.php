<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
	public function login()
	{
		$session = session();

		$userModel = new UserModel();

		helper(['form']);
		$rules = [
			'email'         => 'required|min_length[4]|max_length[100]|valid_email',
			'password'      => 'required|min_length[4]|max_length[50]',
		];

		if ($this->validate($rules)) {
			$email = $this->request->getVar('email');
			$password = $this->request->getVar('password');
			$data = $userModel->where('email', $email)->first();

			if ($data) {
				$pass = $data['password'];
				$authenticatePassword = password_verify($password, $pass);
				if ($authenticatePassword) {
					$ses_data = [
						'id' => $data['id'],
						'name' => $data['name'],
						'email' => $data['email'],
						'isLoggedIn' => true
					];

					$session->set($ses_data);
					return redirect('home');
				} else {
					$session->setFlashdata('msg', 'Senha Incorreta.');
					return redirect('auth/login');
				}
			} else {
				$session->setFlashdata('msg', 'Email Incorreto');
				return redirect('auth/login');
			}
		}
		return view('pages/login');
	}

	public function logout()
	{

		$session = session();
		$session->destroy();
		return redirect('auth/login');
	}
}
