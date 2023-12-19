<?php

namespace App\Models;

use CodeIgniter\Model;

class Smartphone_model extends Model
{
    protected $table = 'tabel_smartphone';
    protected $allowedFields = ['ID', 'Nama_Handphone', 'Merek_Handphone', 'Tahun_Keluaran_Handphone', 'Tipe_Handphone'];

    public function getSmartphone($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }

        return $this->find($id);
    }

    public function saveSmartphone($data)
    {
        return $this->insert($data);
    }

    public function editSmartphone($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('ID', $id);
        return $builder->update($data);
    }

    public function hapusSmartphone($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['ID' => $id]);
    }
}
