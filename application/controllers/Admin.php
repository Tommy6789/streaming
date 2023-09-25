<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

    }
    public function login()
    {
        $data['title'] = "Login";
        $this->load->view('login/template/header',$data);
        $this->load->view('login/login');
        $this->load->view('login/template/header');
    }
    public function register()
    {
        $data['title'] = "Register";
        $this->load->view('login/template/header',$data);
        $this->load->view('login/register');
        $this->load->view('login/template/header');
    }
    public function forgot_password()
    {
        $data['title'] = "Forgot Password";
        $this->load->view('login/template/header',$data);
        $this->load->view('login/forgot_password');
        $this->load->view('login/template/header');
    }
    public function dashboard(){
        $data['title'] = "Dashboard Admin";
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/template/footer');
    }
    public function data_film(){
        $data['title'] = "Data Film";
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/data_film');
        $this->load->view('admin/template/footer');
    }
    public function tambah_film(){
        $data['title'] = "Tambah Film";
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/tambah_film');
        $this->load->view('admin/template/footer');
    }
}

/* End of file Admin.php and path \application\controllers\Admin.php */
