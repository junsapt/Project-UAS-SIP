<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
        $data['wisata'] = $this->M_admin->getWisata();
        $this->load->view('layout/template_admin', $data);
    }

    public function input_wisata()
    {
        $data['title'] = "Input Wisata Pantain Penimbangan";
        $data['content'] = "wisata/input_wisata";
        $data['kategori'] = $this->M_admin->getKategori();

        $this->form_validation->set_rules('nama_wisata', 'Nama Wisata', 'required|trim');
        $this->form_validation->set_rules('deskripsi_wisata', 'Deskripsi Wisata', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/template_admin', $data);
        } else {
            // print_r($_POST);
            // die;
            $this->M_admin->save_wisata($_POST);
            // $this->session->set_flashdata('prohum', 'Added');
            redirect('Admin');
        }
    }

    public function update_wisata($id)
    {
        $data['title'] = "Update Wisata Pantain Penimbangan";
        $data['content'] = "wisata/update_wisata";
        $data['kategori'] = $this->M_admin->getKategori();
        $data['wisata'] = $this->M_admin->getWisataById($id);

        $this->form_validation->set_rules('nama_wisata', 'Nama Wisata', 'required|trim');
        $this->form_validation->set_rules('deskripsi_wisata', 'Deskripsi Wisata', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/template_admin', $data);
        } else {
            $upload_file = $_FILES['foto']['name'];
            // print_r($_FILES['foto']['name']);
            // die;

            if ($upload_file != null) {
                $konfigurasi = array(
                    'allowed_types' => 'jpg|png|JPG|PNG|jpeg|JPEG',
                    'upload_path' => realpath('./upload'),
                    'remove_spaces' => true,
                    'mod_mime_fix' => true,
                );
                $this->load->library('upload', $konfigurasi);
                $this->upload->do_upload('foto');

                $old_file = $_POST['old_foto'];
                unlink(FCPATH . 'upload/' . $old_file);
                $fileName = str_replace(" ", "_", $_FILES['foto']['name']);
                $this->db->set('foto', $fileName);
                $this->db->where('id_wisata', $id);
                $this->db->update('tb_wisata');
            }

            $input = [
                'id_kategori' => $_POST['id_kategori'],
                'nama_wisata' => $_POST['nama_wisata'],
                'deskripsi_wisata' => $_POST['deskripsi_wisata'],
            ];
            // print_r($input);
            // die;

            $this->db->where('id_wisata', $id);
            $this->db->update('tb_wisata', $input);

            // $this->M_admin->update_wisata();
            // $this->session->set_flashdata('prohum', 'Added');
            redirect('Admin');
        }
    }

    public function delete_wisata($id)
    {
        $where = array('id_wisata' => $id);
        $this->M_admin->delete_data($where, 'tb_wisata');
        redirect('Admin');
    }
}
