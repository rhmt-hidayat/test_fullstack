<?php
defined('BASEPATH') or exit('No direct script access allowed');

class add extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['judul'] = 'Add New';
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar');
        $this->load->view('Menu/add');
        $this->load->view('Templates/Footer');
    }

    function insert()
    {
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $category = $this->input->post('category');
        var_dump($title);
    }
}