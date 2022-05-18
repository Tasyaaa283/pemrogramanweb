<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bio_model');
    }


    public function index()
    {
        $data['title'] = 'Biodata';
        $this->load->view('bio/index');
    }
}
