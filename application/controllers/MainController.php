<?php
class MainController extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    public function overview(){
        $data['title'] = 'Overview';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('overview', $data);
        $this->load->view('templates/footer');
    }
}