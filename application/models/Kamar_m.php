<?php

class Kamar_m extends CI_Model
{
    var $queryBintang = "sum(if(testimonial.bintang = 5,testimonial.bintang,NULL)) as limabintang,sum(if(testimonial.bintang = 4,testimonial.bintang,NULL)) as empatbintang, sum(if(testimonial.bintang = 3,testimonial.bintang,NULL)) as tigabintang, sum(if(testimonial.bintang = 2,testimonial.bintang,NULL)) as duabintang,sum(if(testimonial.bintang = 1,testimonial.bintang,NULL)) as satubintang";

    public function get($limit, $start)
    {
        $this->db->select('kamar_kost.*, gambar_kamar.*, kategori_kamar.*, member_juragan.nama as juragan, count(testimonial.uid_testimonial) as testicount, ' . $this->queryBintang . '', FALSE);
        $this->db->from('kamar_kost');
        $this->db->join('gambar_kamar', 'kamar_kost.uid_gambar=gambar_kamar.uid_gambar', 'left');
        $this->db->join('kategori_kamar', 'kamar_kost.uid_kategori=kategori_kamar.uid_kategori', 'left');
        $this->db->join('testimonial', 'kamar_kost.uid_kamar=testimonial.uid_kamar', 'left');
        $this->db->join('member_juragan', 'kamar_kost.uid_juragan=member_juragan.uid_juragan', 'left');
        $this->db->group_by('kamar_kost.uid_kamar');
        $this->db->limit($limit, $start);
        return $this->db->get()->result_array();
    }

    public function getFetured()
    {
        $this->db->select('kamar_kost.*, gambar_kamar.*, kategori_kamar.*, count(testimonial.uid_testimonial) as testicount, ' . $this->queryBintang . '', FALSE);
        $this->db->from('kamar_kost');
        $this->db->join('gambar_kamar', 'kamar_kost.uid_gambar=gambar_kamar.uid_gambar', 'left');
        $this->db->join('kategori_kamar', 'kamar_kost.uid_kategori=kategori_kamar.uid_kategori', 'left');
        $this->db->join('testimonial', 'kamar_kost.uid_kamar=testimonial.uid_kamar', 'left');
        $this->db->group_by('kamar_kost.uid_kamar');
        $this->db->order_by('kamar_kost.date_post', 'desc');
        $this->db->limit('8');
        return $this->db->get()->result_array();
    }

    public function getUidKamar($uid_kamar)
    {
        $this->db->select('kamar_kost.*, gambar_kamar.*, kategori_kamar.*, count(testimonial.uid_testimonial) as testicount, ' . $this->queryBintang . '', FALSE);
        $this->db->from('kamar_kost');
        $this->db->join('gambar_kamar', 'kamar_kost.uid_gambar=gambar_kamar.uid_gambar', 'left');
        $this->db->join('kategori_kamar', 'kamar_kost.uid_kategori=kategori_kamar.uid_kategori', 'left');
        $this->db->join('testimonial', 'kamar_kost.uid_kamar=testimonial.uid_kamar', 'left');
        $this->db->where('kamar_kost.uid_kamar', $uid_kamar);
        return $this->db->get()->row_array();
    }

    public function getDetail($url_title)
    {
        $this->db->select('kamar_kost.*, gambar_kamar.*, kategori_kamar.*,member_juragan.nama as juragan, count(testimonial.uid_testimonial) as testicount, ' . $this->queryBintang . '', FALSE);
        $this->db->from('kamar_kost');
        $this->db->join('gambar_kamar', 'kamar_kost.uid_gambar=gambar_kamar.uid_gambar', 'left');
        $this->db->join('kategori_kamar', 'kamar_kost.uid_kategori=kategori_kamar.uid_kategori', 'left');
        $this->db->join('testimonial', 'kamar_kost.uid_kamar=testimonial.uid_kamar', 'left');
        $this->db->join('member_juragan', 'kamar_kost.uid_juragan=member_juragan.uid_juragan', 'left');
        $this->db->where('kamar_kost.url_title', $url_title);
        return $this->db->get()->row_array();
    }

    public function jumlah_data()
    {
        return $this->db->get('kamar_kost')->num_rows();
    }

    public function getUidKamarCV($url_title)
    {
        return $this->db->select('uid_kamar')->where('url_title', $url_title)->from('kamar_kost')->limit(1)->get()->row_array();
    }


    public function getDurasi()
    {
        return $this->db->get('durasi_kamar')->result_array();
    }

    public function getFasilitas()
    {
        return $this->db->get('fasilitas_kamar')->result_array();
    }
    public function getReview($uid_kamar)
    {
        $this->db->select('testimonial.bintang, testimonial.pesan, testimonial.anonim_status, member_penghuni.nama, member_penghuni.foto');
        $this->db->from('testimonial');
        $this->db->join('member_penghuni', 'testimonial.uid_penghuni=member_penghuni.uid_penghuni', 'right');
        $this->db->where('testimonial.uid_kamar', $uid_kamar);
        return $this->db->get()->result_array();
    }
}
