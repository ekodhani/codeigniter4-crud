<?php
namespace App\Models;

use CodeIgniter\Model;

class ModelProduk extends Model
{
    protected $table = 'produk';
    protected $allowedFields = [
        'nama_produk',
        'harga'
    ];

    public function getProduk ($id = false) {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function saveProduk ($data) {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
}

?>