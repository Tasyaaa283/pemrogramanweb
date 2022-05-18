<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }


    public function index()
    {
        $data['title'] = 'Homepage';
        $this->load->view('home/index');
    }
}
