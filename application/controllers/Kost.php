<?php

class Kost extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kamar_m', 'kamar');
        get_instance()->load->helper('kamar_helper', 'changer_helper');
    }

    public function index()
    {
        $this->load->library('pagination');
        $jumlah_data = $this->kamar->jumlah_data();
        $config['base_url'] = base_url() . 'kost/index';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 4;
        // styling pagination
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = "<li class='page-link'>";
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active" style="text-decoration:none"><a href="#" class="page-link bg-primary text-white">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = "<li class='page-link'>";
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = "<li class='page-link'>";
        $config['last_tag_close'] = '</li>';
        $config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>Sebelumnya';
        $config['prev_tag_open'] = "<li class='page-link'>";
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'selanjutnya <i class="fa fa-long-arrow-right"></i>';
        $config['next_tag_open'] = "<li class='page-link'>";
        $config['next_tag_close'] = '</li>';
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);
        $data['kamar'] = $this->kamar->get($config['per_page'], $from);
        $data['fasilitaskamar'] = $this->kamar->getFasilitas();
        $this->load->view('_templatepublic/header');
        $this->load->view('kost', $data);
        $this->load->view('_templatepublic/footer');
    }



    public function getKamar()
    {
        $uid_kamar = $_POST['uid_kamar'];
        $data = array(
            'kamar'     =>  $this->kamar->getUidKamar($uid_kamar),
            'keterangan' => 'success'
        );
        echo json_encode($data);
    }

    public function getUidkamar($url_title)
    {
        return $this->kamar->getUidKamarCV($url_title);
    }

    public function kamar($url_title)
    {
        $uid_kamar = $this->getUidkamar($url_title);
        $data['kamar'] = $this->kamar->getDetail($url_title);
        $data['durasikamar'] = $this->kamar->getDurasi();
        $data['fasilitaskamar'] = $this->kamar->getFasilitas();
        $data['review'] = $this->kamar->getReview($uid_kamar['uid_kamar']);
        $this->load->view('_templatepublic/header');
        $this->load->view('detail', $data);
        $this->load->view('_templatepublic/footer');
    }
}
