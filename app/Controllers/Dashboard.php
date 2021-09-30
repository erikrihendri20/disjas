<?php

namespace App\Controllers;

use App\Models\ImportModel;
use App\Models\UserModel;
use CodeIgniter\API\ResponseTrait;

class Dashboard extends BaseController
{
    use ResponseTrait;
    public $userModel = null;
    public $importModel = null;
    public function __construct()
    {
        session();
        $this->userModel = new UserModel();
        $this->importModel = new ImportModel();
    }

    public function dataImport()
    {
        $data = [
            'title' => 'Data Import',
            'script' => 'data-import',
            'style' => 'data-import',
            'active' => 'data import',
            'link' => 'dataImport',
        ];
        return view('dashboard/data-import' , $data);
    }

    public function editDataImport($id = null)
    {
        $import = $this->importModel->find($id);
        if($import){
            $nilaiImport = $this->importModel->find($id);
        }else{
            $nilaiImport = null;
        }
        $data = [
            'title' => 'Edit Data Import',
            'script' => 'edit-data-import',
            'style' => 'edit-data-import',
            'active' => 'edit data import',
            'link' => 'editDataImport',
            'id' => $id,
            'nilaiImport' => $nilaiImport
        ];
        if(isset($_POST['submit'])){
            $this->importModel
            ->set('nilai' , $this->request->getPost('nilai'))
            ->where('tahun' , $this->request->getPost('tahun'))
            ->where('bulan' , $this->request->getPost('bulan'))
            ->update();
            $flash = '<div class="alert alert-success alert-dismissible fade show" role="alert">
									Nilai import bulan '.$this->request->getPost('bulan').' tahun '. $this->request->getPost('tahun').' berhasil diubah
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>';
			$flash = session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url('dashboard/dataImport'));
        }
        return view('dashboard/edit-data-import' , $data);
    }

    public function inputDataImport()
    {
        $date = $this->importModel->orderBy('tahun , bulan' , 'DESC')->get()->getRowArray();
        if($date){
            $defaultDate = [
                'bulan' => ($date['bulan']==12) ? 1 : (int)$date['bulan']+1,
                'tahun' => ($date['bulan']==12) ? (int)$date['tahun']+1 : (int)$date['tahun']
            ];
        }else{
            $defaultDate = [
                'bulan' => 1,
                'tahun' => 2019
            ];
        }
        $data = [
            'title' => 'Input Data Import',
            'script' => 'input-data-import',
            'style' => 'input-data-import',
            'active' => 'input data import',
            'link' => 'inputDataImport',
            'date' => $defaultDate
        ];
        if(isset($_POST['submit'])){
            $this->importModel->insert([
                'tahun' => $this->request->getPost('tahun'),
                'bulan' => $this->request->getPost('bulan'),
                'nilai' => $this->request->getPost('nilai'),
            ]);
            $flash = '<div class="alert alert-success alert-dismissible fade show" role="alert">
									Nilai import bulan '.$this->request->getPost('bulan').' tahun '. $this->request->getPost('tahun').' berhasil ditambahkan
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>';
			$flash = session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url('dashboard/inputDataImport'));
        }
        return view('dashboard/input-data-import' , $data);
    }

    public function getDataImport($tahun = null)
    {
        if($tahun == null){
            return $this->respond($this->importModel->orderBy('tahun', 'DESC')->orderBy('bulan', 'ASC')->get()->getResultArray());
        }else{
            return $this->respond($this->importModel->orderBy('tahun', 'DESC')->orderBy('bulan', 'ASC')->where('tahun' , $tahun)->get()->getResultArray());
        }
    }

    public function hapusDataImport($id = null)
    {
        if($id == null){
            $flash = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
									Data tidak ditemukan!
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
			</div>';
			$flash = session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url('dashboard/dataImport'));
        }else{
            $delete = $this->importModel->where('id', $id)
            ->delete();
            $flash = '<div class="alert alert-success alert-dismissible fade show" role="alert">
									Data berhasil dihapus!
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
			</div>';
			$flash = session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url('dashboard/dataImport'));
        }
    }

    // public function getTahunImport()
    // {
    //     $result = $this->importModel->select('tahun')->groupBy('tahun')->get()->getResultArray();
    //     $tahun = [];
    //     foreach ($result as $r) {
    //         $tahun[] = $r['tahun'];
    //     }
    //     return $this->respond($tahun);
    // }
}
