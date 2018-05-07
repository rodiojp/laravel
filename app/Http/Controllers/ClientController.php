<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function index()
    {
        $data = [];

        //return __METHOD__;
        $obj = new \stdClass;
        $obj->id = 1;
        $obj->title = 'mr';
        $obj->name = 'john';
        $obj->last_name = 'doe';
        $obj->email = 'john@domain.com';
        $data['clients'][]=$obj;
  
        $obj = new \stdClass;
        $obj->id = 2;
        $obj->title = 'ms';
        $obj->name = 'jane';
        $obj->last_name = 'doe';
        $obj->email = 'jane@another-domain.com';
        $data['clients'][]=$obj;
        
        return view('client.index',$data);
    }

    public function newClient()
    {
        return __METHOD__;
        // return view('newClient');
    }

    public function create()
    {
        return __METHOD__;
        // return view('create');
    }

    public function show($client_id)
    {
        return __METHOD__ . ':' . $client_id;
        // return view('create');
    }
    public function modify($client_id)
    {
        return __METHOD__ . ':' . $client_id;
        // return view('create');
    }
}
