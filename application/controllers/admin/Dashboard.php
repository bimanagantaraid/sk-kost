<?php

use FFI\ParserException;

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => "SK KOST"
        );
        $this->load->view('admin/index', $data);
    }
}
