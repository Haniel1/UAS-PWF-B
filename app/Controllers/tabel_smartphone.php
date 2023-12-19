<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Smartphone_model;

class Tabel_smartphone extends Controller
{
    public function index()
    {
        $model = new Smartphone_model();
        $data['title'] = 'Data Tabel Smartphone';
        $data['getSmartphone'] = $model->getSmartphone();

        echo view('header', $data);
        echo view('Smartphone_view', $data);
        echo view('footer', $data);
    }

    public function add()
    {
        if ($this->request->getMethod() === 'post') {
            $model = new Smartphone_model();
            $data = [
                'ID'                        => $this->request->getPost('ID'),
                'Nama_Handphone'            => $this->request->getPost('nama_handphone'),
                'Merek_Handphone'           => $this->request->getPost('merek_handphone'),
                'Tahun_Keluaran_Handphone'  => $this->request->getPost('tahun_keluaran_handphone'),
                'Tipe_Handphone'            => $this->request->getPost('tipe_handphone')
            ];

            $model->saveSmartphone($data);

            return redirect()->to(base_url('Smartphone_view'))->with('success', 'Berhasil Menambah Data Tabel Smartphone');
        } else {
            return redirect()->to(base_url('Smartphone_view'))->with('error', 'Metode yang tidak valid.');
        }
    }
    public function edit($id)
    {
        $model = new Smartphone_model();
    
        $phone = $model->getSmartphone($id);
    
        if (!$phone) {
            return redirect()->to('tabel_smartphone')->with('error', 'Phone not found');
        }
    
        $data['phone'] = $phone;
    
        echo view('edit_view', $data);
    }
    

    public function update()
    {
        $model = new Smartphone_model();

        $id = $this->request->getPost('ID'); 
        $data = [
            'Nama_Handphone'           => $this->request->getPost('nama_handphone'),
            'Merek_Handphone'          => $this->request->getPost('merek_handphone'),
            'Tahun_Keluaran_Handphone' => $this->request->getPost('tahun_keluaran_handphone'),
            'Tipe_Handphone'           => $this->request->getPost('tipe_handphone')
        ];

        $model->editSmartphone($data, $id);

        echo '<script>
            alert("Selamat! Anda berhasil melakukan update data.");
            window.location="' . base_url('tabel_smartphone') . '";
          </script>';
          return redirect()->to(base_url('Smartphone_view'))->with('success', 'Berhasil Mengupdate Data Tabel Smartphone');
    }
    public function hapus($id)
    {
        $model = new Smartphone_model();
        $phone = $model->getSmartphone($id);
    
        if ($phone) {
            $model->hapusSmartphone($id);
            return redirect()->to(base_url('Smartphone_view'))->with('success', 'Selamat! Data berhasil terhapus.');
        } else {
            return redirect()->to(base_url('Smartphone_view'))->with('error', 'Gagal Menghapus! ID smartphone ' . $id . ' tidak ditemukan.');
        }
    }
    

}
