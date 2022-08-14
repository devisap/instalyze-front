<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';
use GuzzleHttp\Client;
class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	public function signUp(){
		$this->load->view('register');
	}
	public function register(){
		$client = new GuzzleHttp\Client();
        $response = $client->post('http://127.0.0.1:5000/register', [
            'json' => [
                'email'  	=> $_POST['email'],
                'username'  => $_POST['username'],
                'name'  	=> $_POST['name'],
                'password'  => md5($_POST['password'])
            ]
        ]);

		$res = json_decode($response->getBody());

		
		if($res[0]->stat == '1'){
			$this->session->set_flashdata('succ_msg', $res[0]->msg);
		}else{
			$this->session->set_flashdata('err_msg', $res[0]->msg);
		}

		redirect('/');
	}
	public function login(){
		$client = new GuzzleHttp\Client();
        $response = $client->post('http://127.0.0.1:5000/login', [
            'json' => [
                'username'  => $_POST['username'],
                'password'  => md5($_POST['password'])
            ]
        ]);

		$res = json_decode($response->getBody());

		
		if($res[0]->stat == '1'){
			print_r($res[0]->data);
			$user['username'] 	= $res[0]->data->USERNAME_USER;
			$user['email']		= $res[0]->data->EMAIL_USER;
			$user['name']		= $res[0]->data->NAME_USER;
			$this->session->set_userdata($user);
			
			redirect('overview');
		}else{
			$this->session->set_flashdata('err_msg', $res[0]->msg);
			redirect('/');
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('');
	}
}
