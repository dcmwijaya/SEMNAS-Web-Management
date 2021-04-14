<?php

namespace App\Controllers;
use App\Models\SemnasModel;

class Admin extends BaseController
{

    //Inheritance
    protected $adminModel;
    public function __construct(){
        $this->adminModel = new SemnasModel();
    }

    //Method Read
    public function index()
    {
        $curpage = $this->request->getVar('page_semnas') ? $this->request->getVar('page_semnas') : 1;

        $key = $this->request->getVar('key');
        if ($key){
            $semnas = $this->adminModel->searchAdmin($key);
        }
        else{
            $semnas = $this->adminModel;
        }
        
        $data = [
            'semnas' => $semnas->paginate(5, 'semnas'),
            'pager' => $this->adminModel->pager,
            'curpage' => $curpage
        ];
        return view('main/admin', $data);
    }

    //Method Save
    public function save()
    {
        $this->adminModel->save([
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'insek' => $this->request->getVar('insek'),
            'wa' => $this->request->getVar('wa')
        ]);

        session()->setFlashdata('pesanAdd', 'Data berhasil ditambahkan..');
        return redirect()->to('/admin');
    }

    //Method Update
    public function update($id)
    {
        $this->adminModel->save([
            'id' => $id,
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'insek' => $this->request->getVar('insek'),
            'wa' => $this->request->getVar('wa')
        ]);

        session()->setFlashdata('pesanUpdate', 'Data berhasil dirubah..');
        return redirect()->to('/admin');    
    }

    //Method Delete
    public function delete($id)
    {
        $this->adminModel->delete($id);
        $this->adminModel->getReset();

        session()->setFlashdata('pesanDelete', 'Data berhasil dihapus..');
        return redirect()->to('/admin');
    }

    //Method Export Excel
    public function excel()
    {
        $data = [
            'semnas' => $this->adminModel->getData()
        ];

        return view('admin/excel', $data);
    }

    //Method Print
    public function print()
    {
        $data = [
            'semnas' => $this->adminModel->getData()
        ];

        return view('admin/print', $data);
    }
}
