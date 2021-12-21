<?php
defined('BASEPATH') or exit('No direct script access allowed');

class post extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_crud'));
    }

    function index()
    {
        $data['judul'] = 'All Posts';
        $data['data'] = $this->M_crud->loadPost();
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar');
        $this->load->view('Menu/post');
        $this->load->view('Templates/Footer');
    }
}