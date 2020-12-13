<?php
class M_admin extends CI_Model
{
    public function getWisata()
    {
        $this->db->join('tb_kategori', 'tb_kategori.id_kategori=tb_wisata.id_kategori');
        return $this->db->get('tb_wisata')->result_array();
    }

    public function getKategori()
    {
        return $this->db->get('tb_kategori')->result_array();
    }

    public function getWisataById($id)
    {
        $this->db->join('tb_kategori', 'tb_kategori.id_kategori=tb_wisata.id_kategori');
        $this->db->where('id_wisata', $id);
        return $this->db->get('tb_wisata')->row_array();
    }

    public function save_wisata()
    {
        $konfigurasi = array(
            'allowed_types' => 'jpg|png|JPG|PNG|jpeg|JPEG',
            'upload_path' => realpath('./upload'),
            'remove_spaces' => true,
            'mod_mime_fix' => true,
        );
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('foto');

        // $fileName = url_title($_FILES['produk']['name'], '_', false);
        $fileName = str_replace(" ", "_", $_FILES['foto']['name']);

        $data = [
            'id_kategori' => $_POST['id_kategori'],
            'nama_wisata' => $_POST['nama_wisata'],
            'deskripsi_wisata' => $_POST['deskripsi_wisata'],
            'foto' => $fileName,
        ];

        $this->db->insert('tb_wisata', $data);
    }

    public function update_wisata()
    {
        $fileName = str_replace(" ", "_", $_FILES['foto']['name']);
        $data = [
            'id_kategori' => $_POST['id_kategori'],
            'nama_wisata' => $_POST['nama_wisata'],
            'deskripsi_wisata' => $_POST['deskripsi_wisata'],
            'foto' => $fileName
        ];

        $this->db->where('id_wisata', $_POST['id']);
        $this->db->update('tb_wisata', $data);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
