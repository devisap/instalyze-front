<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;
class MainController extends CI_Controller{
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('username')){
            redirect('');
        }
    }
    public function overview(){
        $client     = new GuzzleHttp\Client();
        $response   = $client->get('http://127.0.0.1:5000/user-dataset/'.$this->session->userdata('username'));

        $userDatasets = json_decode($response->getBody());
        $data['hashtags'] = [];
        $index = 0;
        foreach ($userDatasets as $userDataset) {
            $data['hashtags'][$index]['tag']        = $userDataset->HASHTAG_UD;
            $data['hashtags'][$index]['color']      = $userDataset->COLOR_UD;
            $data['hashtags'][$index]['totPost']    = $userDataset->TOTPOST_DATASET;
            $data['hashtags'][$index]['totLike']    = $userDataset->TOTLIKE_DATASET;
            $data['hashtags'][$index]['totComment'] = $userDataset->TOTCOMMENT_DATASET;
            $data['hashtags'][$index]['created_at'] = $userDataset->created_at;
            $data['hashtags'][$index]['updated_at'] = $userDataset->updated_at;
            $index++;
        }

        $data['title']      = 'Overview';
        $data['sidebar']    = 'overview';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('overview', $data);
        $this->load->view('templates/footer');

        // print_r($data['hashtags']);
    }
    public function topPost(){
        $client     = new GuzzleHttp\Client();
        $response   = $client->get('http://127.0.0.1:5000/user-dataset/'.$this->session->userdata('username'));

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
        $client     = new GuzzleHttp\Client();
        $response   = $client->get('http://127.0.0.1:5000/user-dataset/'.$this->session->userdata('username'));

        $userDatasets = json_decode($response->getBody());
        $data['hashtags'] = [];
        $index = 0;
        foreach ($userDatasets as $userDataset) {
            $data['hashtags'][$index]['tag']                = $userDataset->HASHTAG_UD;
            $data['hashtags'][$index]['graphInfluencer']    = $userDataset->IMGINFLUENCER_UD;
            $data['hashtags'][$index]['color']              = $userDataset->COLOR_UD;
            $index++;

            $influencers  = $client->get('http://127.0.0.1:5000/influencer/'.$this->session->userdata('username').'_'.$userDataset->HASHTAG_UD);
            $data['influencers'][$userDataset->HASHTAG_UD] = json_decode($influencers->getBody());
        }

        $data['title']      = 'Influencer';
        $data['sidebar']    = 'influencer';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('influencer', $data);
        $this->load->view('templates/footer');
    }
    public function setDataset(){
        $client = new GuzzleHttp\Client();
        $response = $client->post('http://127.0.0.1:5000/user-setdataset', [
            'json' => [
                'username'  => $this->session->userdata('username'),
                'hashtag'   => $_POST['hashtag']
            ]
        ]);

        redirect($_POST['page']);
    }
}