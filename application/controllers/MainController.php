<?php
class MainController extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    public function overview(){
        $data['title']      = 'Overview';
        $data['sidebar']    = 'overview';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('overview', $data);
        $this->load->view('templates/footer');
    }
    public function topPost(){
        $data['title']      = 'Top Post';
        $data['sidebar']    = 'top-post';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('top_post', $data);
        $this->load->view('templates/footer');
    }
    public function influencer(){
        $data['title']      = 'Influencer';
        $data['sidebar']    = 'influencer';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('influencer', $data);
        $this->load->view('templates/footer');
    }
}