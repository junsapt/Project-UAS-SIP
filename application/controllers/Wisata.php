<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wisata extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_admin');
    }

    public function index()
    {
        $data['title'] = "Wisata Pantain Penimbangan";
        $data['content'] = "wisata/data_wisata";
        $this->load->view('frontend/beranda', $data);
    }
}
