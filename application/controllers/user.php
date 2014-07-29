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
        $this->load->view('includes/Landingpage', $signin);
    }

    public function signup()
    {
        $signup['mainContent'] = 'Signup';
        $this->load->view('includes/Landingpage', $signup);
    }
}


