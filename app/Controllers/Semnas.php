<?php

namespace App\Controllers;
use App\Models\SemnasModel;

class Semnas extends BaseController
{

    //Inheritance
    protected $semnasModel;
    public function __construct(){
        $this->semnasModel = new SemnasModel();
    }

    //Method Read
    public function index()
    {
        $curpage = $this->request->getVar('page_semnas') ? $this->request->getVar('page_semnas') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword){
            $semnas = $this->semnasModel->search($keyword);
        }
        else{
            $semnas = $this->semnasModel;
        }
        
        $data = [
            'semnas' => $semnas->paginate(5, 'semnas'),
            'pager' => $this->semnasModel->pager,
            'curpage' => $curpage
        ];
        return view('main/semnas', $data);
    }

    //Method Save
    public function save()
    {
        $this->semnasModel->save([
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'insek' => $this->request->getVar('insek'),
            'wa' => $this->request->getVar('wa')
        ]);

        session()->setFlashdata('Pesan', 'Data berhasil ditambahkan..');
        return redirect()->to('/semnas');
    }
}
