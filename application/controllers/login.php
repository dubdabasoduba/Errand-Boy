<?php
/**
 * Created by IntelliJ IDEA.
 * User: benjamin
 * Date: 7/22/14
 * Time: 9:22 PM
 */
class Login extends CI_Controller {
    function index() {
        $data['mainContent'] = 'Signin';
        $this->load->view('includes/template',$data);
    }
}