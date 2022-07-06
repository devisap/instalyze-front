<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;
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
        $client     = new GuzzleHttp\Client();
        $response   = $client->get('http://127.0.0.1:5000/user-dataset/jajang');

        $userDatasets = json_decode($response->getBody());
        $data['hashtags'] = [];
        $index = 0;
        foreach ($userDatasets as $userDataset) {
            $data['hashtags'][$index]['tag']      = $userDataset->HASHTAG_UD;
            $data['hashtags'][$index]['color']    = $userDataset->COLOR_UD;
            $index++;

            $posts  = $client->get('http://127.0.0.1:5000/posts/'.$userDataset->HASHTAG_UD);
            $data['posts'][$userDataset->HASHTAG_UD] = json_decode($posts->getBody());
        }

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
    public function tes(){
        $client = new GuzzleHttp\Client();
        $response = $client->get('http://127.0.0.1:5000/tes');
        // $data = $response->getBody()->getContents();
        $data = json_decode($response->getBody());
        print_r($data);
        // foreach ($data as $item) {
        //     print_r($item->HASHTAG_DATASET);
            # code...
        // }
    }
}