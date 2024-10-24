<?php

namespace App\Controllers;
use App\Models\Reservations;
use App\Models\Rooms;


class Page extends BaseController
{
    public function index()
    {
        $rooms = new Rooms();
        $validation = \Config\Services::validation();

        $data['validation'] = $validation;
        $data['rooms'] = $rooms->findAll();
        $data['page'] = uri_string(1);
        return view('pages/main/home',  $data);
    }

    public function about(){
        $data['page'] = uri_string(1);
        return view('pages/main/about', $data);
    }

    public function rooms(){
        $rooms = new Rooms();
        $data['rooms'] = $rooms->findAll();
        $data['page'] = uri_string(1);
        return view('pages/main/rooms', $data);
    }

    public function blog(){
        return view('blog');
    }

    public function contact(){
        return view('contact');
    }

    public function submit_reservation(){
        helper('form');
        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'check_in_date' => 'required',
            'check_out_date' => 'required',
            'total_guest' => 'required',
            'room_type' => 'required'
        ]);

        if(!$validation->withRequest($this->request)->run()){
            $data['validation'] = $validation;
            return view('pages/main/home', $data);
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model = new Reservations();
        $data = [
            'name' => $this->request->getPost('name'),
            'phone_number' => $this->request->getPost('phone_number'),
            'address' => $this->request->getPost('address'),
            'check_in_date' => $this->request->getPost('check_in_date'),
            'check_out_date' => $this->request->getPost('check_out_date'),
            'total_guest' => $this->request->getPost('total_guest'),
            'room_type' => $this->request->getPost('room_type')
        ];
        
        $model->save($data);

        

        return redirect()->to('/')->with('succes', 'Reservation process is succes.');
    }
}
