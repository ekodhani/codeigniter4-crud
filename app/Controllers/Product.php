<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelProduk;

class Product extends Controller 
{
    public function index() 
    {
        $data['logo'] = 'CRUD';
        $data['title'] = 'CRUD Simple With CodeIgniter 4';
        $data['description'] = 'Membuat CRUD Simple Menggunakan CodeIgniter Versi 4';
        return view('index', $data);
    }

    public function product()
    {
        $data['logo'] = 'CRUD';
        $data['title'] = 'List Of Product';
        $model = new ModelProduk;
        $data['allProduk'] = $model->getProduk();
        return view('product', $data);
    }

    public function store() 
    {
        //load helper form and URL
        helper(['form', 'url']);

        //define validation
        $validation = $this->validate([
            'nama_produk' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama Produk.'
                ]
            ],
            'harga'    => [
                'rules'  => 'required|numeric',
                'errors' => [
                    'required' => 'Masukkann Harga.',
                    'numeric' => 'Hanya Bisa Memasukkan Angka.'
                ]
            ],
        ]);

        if(!$validation) {
            //render view with error validation message
            $data['logo'] = 'CRUD';
            $data['title'] = 'List Of Product';
            $model = new ModelProduk;
            $data['allProduk'] = $model->getProduk();
            return view('product', $data, [
                'validation' => $this->validator
            ]);
        } else {
             //model initialize
            $model = new ModelProduk();
            
            //insert data into database
            $model->saveProduk([
                'nama_produk'   => $this->request->getPost('nama_produk'),
                'harga' => $this->request->getPost('harga'),
            ]);

            //flash message
            session()->setFlashdata('message', 'Produk Berhasil Disimpan');

            return redirect()->to(base_url('product'));
        }
    }

    public function edit($id)
    {
        $data['logo'] = 'CRUD';
        $data['title'] = 'Edit Product';
        $model = new ModelProduk;
        $data['detail'] = $model->find($id);
        return view('edit', $data);
    }

    public function update($id)
    {
        //load helper form and URL
        helper(['form', 'url']);

        //define validation
        $validation = $this->validate([
            'nama_produk' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama Produk.'
                ]
            ],
            'harga' => [
                'rules'  => 'required|numeric',
                'errors' => [
                    'required' => 'Masukkann Harga.',
                    'numeric' => 'Hanya Bisa Memasukkan Angka.'
                ]
            ],
        ]);

        if(!$validation) {
            //render view with error validation message
            $data['logo'] = 'CRUD';
            $data['title'] = 'List Of Product';
            $model = new ModelProduk();
            // $data['detail'] = $model->find($id);
            return view('edit', $data, [
                'detail' => $model->find($id),
                'validation' => $this->validator
            ]);
        } else {
            //model initialize
            $model = new ModelProduk();

            $data = [
                'nama_produk'   => $this->request->getPost('nama_produk'),
                'harga' => $this->request->getPost('harga')
            ];
            
            //insert data into database
            $model->update($id, $data);

            //flash message
            session()->setFlashdata('messageAction', 'Produk Berhasil Diupdate');

            return redirect()->to(base_url('product'));
        }
    }

    public function delete($id)
    {
        //model initialize
        $ModelProduk = new ModelProduk();

        $drop = $ModelProduk->find($id);

        if($drop) {
            $ModelProduk->delete($id);

            //flash message
            session()->setFlashdata('messageAction', 'Produk Berhasil Dihapus');

            return redirect()->to(base_url('product'));
        }
    }
}

?>