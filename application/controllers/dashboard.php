<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model(array('M_crud'));
    }

    function index()
    {
        $data['judul'] = 'Dashboard';
        // $data['data'] = $this->M_barang->loadBarang();
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar');
        $this->load->view('Dashboard/index');
        $this->load->view('Templates/Footer');
    }
}