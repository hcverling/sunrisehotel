<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Navigation;
use CodeIgniter\Validation\Rules;

class NavigationController extends BaseController
{
    protected $navigation;

    function __construct()
    {
        $this->navigation = new Navigation();
    }

    public function index()
    {
        $data['navigations'] = $this->navigation->findAll();
        $data['page'] = uri_string(1);
        return view('pages/main/navigation', $data);
    }

    public function create(){
        $data['page'] = uri_string(1);
        return view('pages/main/create-navigation', $data);

    }

    public function store(){
       
        $data = [
            'navigation_label' => $this->request->getPost('navigation_label'),
            'status' => $this->request->getPost('status')
        ];
        $this->navigation->save($data);
        session()->setFlashdata('message', 'Data berhasil disimpan');

        return redirect()->to('/navigation');
    }

   

    public function edit($id){
        
      
        $data['navigation'] = $this->navigation->find($id);
        $data['page'] = uri_string(1);
        return view('pages/main/edit-navigation', $data);
        
    }

    public function update($id){
        
       $data = [
        'navigation_label' => $this->request->getPost('navigation_label'),
        'status' => $this->request->getPost('status')
       ];

       $this->navigation->update($id, $data);
       session()->setFlashdata('message','Data berhasil di update');

       return redirect()->to('/navigation');
     }

     public function delete($id){
        $this->navigation->delete($id);
        session()->setFlashdata('message','Data berhasil di hapus');
        return redirect()->to('/navigation');
     }
    }
