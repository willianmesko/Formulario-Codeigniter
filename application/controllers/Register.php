<?php

defined('BASEPATH') OR exit('No direct script acess allowed');

class Register extends CI_Controller
{   
       
    public function index()
        {  
          $inputs = $this->register->inputConfig();
          $this->load->view('register/index', $inputs);
         }
        }


