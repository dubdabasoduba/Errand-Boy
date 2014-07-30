<?php

/**
 * Created by IntelliJ IDEA.
 * User: benjamin
 * Date: 7/22/14
 * Time: 9:22 PM
 */
class User extends CI_Controller
{
    function index()
    {
        $signin['mainContent'] = 'Signin';
        $signin['title'] = "Errand-Boy | Sign In";
        $this->load->view('includes/Landingpage', $signin);
    }

    public function signup()
    {
        $signup['mainContent'] = 'Signup';
        $signup['title'] = "Errand-Boy | Sign Up";
        $this->load->view('includes/Landingpage', $signup);
    }

    public function home() {
        $home['mainContent'] = 'home';
        $home['title'] = "Errand-Boy | Home";
        $this->load->view('includes/Userpages',$home);
    }
}


