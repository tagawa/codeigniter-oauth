<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Signin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->spark('codeigniter-oauth-0.0.2');
    }

    public function index() {
        $this->data['username'] = $this->input->cookie('username', TRUE);
        if (empty($this->data['username']) && isset($_SERVER['HTTP_REFERER'])) {
            $this->session->set_userdata('referrer', $_SERVER['HTTP_REFERER']);
        }
        $this->load->view('signin/index', $this->data);
    }
    
    public function login($type = '') {
        if (!empty($type)) {
            if (isset($_GET['oauth_token']) && isset($_GET['oauth_verifier'])) {
                $result = $this->oauth->authorize_result($type);
                if($result->status === 'success') {
                    (isset($result->token2))
                    ? $get_auth = $this->oauth->access($type, $result->token, $result->token2)
                    : $get_auth = $this->oauth->access($type, $result->token);

                    // Set a cookie to remember the login status
                    $cookie = array(
                        'name'   => 'username',
                        'value'  => $get_auth->user['username'],
                        'expire' => '86400' // 24 hours
                    );
                    $this->input->set_cookie($cookie);
                    
                    $referrer = $this->session->userdata('referrer');
                    if (!empty($referrer)) {
                        redirect($referrer, 'refresh'); 
                    } else {
                        redirect('./signin', 'refresh');
                    }
                } else {
                    echo('Authentication error<br>');
                    var_dump($result);
                }
            } else if (isset($_GET['denied'])) {
                echo('Access denied');
            } else {
                $this->oauth->authorize($type);
            }
        } else {
            redirect('./signin', 'refresh');
        }
    }
    
    public function logout() {
        $username = $this->input->cookie('username', TRUE);
        if ($username) {
            // Clear the cookie
            $cookie = array(
                'name'   => 'username',
                'value'  => $username,
                'expire' => ''
            );
            $this->input->set_cookie($cookie);
        }
        redirect(base_url(), 'refresh');
    }
}
?>
