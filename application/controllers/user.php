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

    public function signin_validation()
    {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','required|trim|xss_clean');
        $this->form_validation->set_rules('password','required|md5|trim|callback_validate_credentials');

        if($this->form_validation->run())
        {
            /*setting the session data after the validationhas been done*/
            $data = array('username' => $this->input->post('username'),'is_logged_in'=> 1);
            /*the code below sets the use data as the email and always gives the indication of whether the person/user is loggen in*/
            $this->session->set_userdata($data);
            redirect('user/members');
        }
        /*the code below prevents users form going straight into the pages of the website of system with out loggig in*/
        else{
            redirect('user/');
        }
    }

    public function signup()
    {
        $signup['mainContent'] = 'Signup';
        $signup['title'] = "Errand-Boy | Sign Up";
        $this->load->view('includes/Landingpage', $signup);
    }

    /*function to load the members page/view*/
    public function members(){
        if($this->session->userdata('is_logged_in')){
            redirect('user/home');
        }
        else{
            redirect('user/');
        }

    }
    public function home() {
        $home['mainContent'] = 'home';
        $home['title'] = "Errand-Boy | Home";
        $this->load->view('includes/Userpages',$home);
    }
}


