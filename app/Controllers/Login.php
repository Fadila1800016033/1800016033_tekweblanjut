<?php namespace App\Controllers;
use App\Models\M_user;

class Login extends BaseController
{
	public function index()
	{
		return view('user_form');
    }
    
    public function Login_action()
    {
        $muser = new M_user();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $cek = $muser->get_data($email, $password);

        if (($cek['user_email'] == $email) && ($cek['user_pass'] == $password))
        {
            session()->set('user_email', $cek['user_email']);
            session()->set('user_nama', $cek['user_nama']);
            session()->set('user_id', $cek['user_id']);
            return redirect()->to(base_url('User'));
        } else {
            session()->setFlashdata('gagal', 'Username / Password Salah');
            return redirect()->to(base_url('Login'));
        }
    }

    public function Logout()
    {
        session()->destroy();
        return redirect()->to(base_url('Login'));
    }
	//--------------------------------------------------------------------

}
