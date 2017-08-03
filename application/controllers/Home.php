<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Home extends CI_Controller {

    public function __construct() {
       parent::__construct();
       $this->load->model('M_users', 'user');
    }

    public function index() {

        $data = array();
        if($this->session->userdata('status')){
            $this->login();
        } else {
        require FCPATH .'/vendor/autoload.php';
                
        // Store values in variables from project created in Google Developer Console
        $client_id = '304150018176-45n7gahb6v7e2q9rk4qigbcsog4tr0sh.apps.googleusercontent.com';
        $client_secret = 'k-6UgVVeayIJI0vy7OjuIWCg';
        $redirect_uri = 'http://localhost/Wahana/Home/login';
        $simple_api_key = 'AIzaSyC8Yzht5Npezq28kTDygtKm7Uh5xPmx1MU';

        // Create Client Request to access Google API
        $client = new Google_Client();
        $client->setApplicationName("Wahana");
        $client->setClientId($client_id);
        $client->setClientSecret($client_secret);
        $client->setRedirectUri($redirect_uri);
        $client->setDeveloperKey($simple_api_key);
        $client->addScope("email");
        $client->addScope("profile");
        $client->addScope("https://www.googleapis.com/auth/user.phonenumbers.read");

        // Send Client Request
        $objOAuthService = new Google_Service_Oauth2($client);

        $authUrl = $client->createAuthUrl();
        $data['authUrl'] = $authUrl;

        $this->load->view('page_login',$data);
        }
    }

    public function login(){
        $this->load->library('user_agent');
        require FCPATH .'/vendor/autoload.php';
                
        // Store values in variables from project created in Google Developer Console
        $client_id = '304150018176-45n7gahb6v7e2q9rk4qigbcsog4tr0sh.apps.googleusercontent.com';
        $client_secret = 'k-6UgVVeayIJI0vy7OjuIWCg';
        $redirect_uri = 'http://localhost/Wahana/Home/login';
        $simple_api_key = 'AIzaSyC8Yzht5Npezq28kTDygtKm7Uh5xPmx1MU';

        // Create Client Request to access Google API
        $client = new Google_Client();
        $client->setApplicationName("Wahana");
        $client->setClientId($client_id);
        $client->setClientSecret($client_secret);
        $client->setRedirectUri($redirect_uri);
        $client->setDeveloperKey($simple_api_key);
        $client->addScope("email");
        $client->addScope("profile");
        $client->addScope("https://www.googleapis.com/auth/user.phonenumbers.read");

        // Send Client Request
        $objOAuthService = new Google_Service_Oauth2($client);

        // Add Access Token to Session
        if (isset($_GET['code'])) {
        $client->authenticate($_GET['code']);
        $_SESSION['access_token'] = $client->getAccessToken();
        header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
        }

        // Set Access Token to make Request
        if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
            $client->setAccessToken($_SESSION['access_token']);
        }

        // Get User Data from Google and store them in $data
        if ($client->getAccessToken()) {
            $userData = $objOAuthService->userinfo->get();
            $data['userData'] = $userData;
            $_SESSION['access_token'] = $client->getAccessToken();
        } else {
            $authUrl = $client->createAuthUrl();
            $data['authUrl'] = $authUrl;
           
        }

        $agent = $this->agent->platform();

        /*if ($this->agent->is_browser()){
            $agent = $this->agent->browser().' '.$this->agent->version();
        }elseif ($this->agent->is_mobile()){
            $agent = $this->agent->mobile();
        }elseif ($this->agent->platform()){
            $agent = $this->agent->platform();
        
        }else{
            $agent = 'Data user gagal di dapatkan';
        }*/

        //print_r($agent);die();

         $data['userData'] = $userData;
         $data['status'] = 1;
         $this->session->set_userdata($data);
        // Load view and send values stored in $data
        $this->load->view('page_filldata', $data);
    }

    // Unset session and logout
    public function logout() {
        unset($_SESSION['access_token']);
        $this->session->sess_destroy();
        redirect(base_url());
    }
}

?>