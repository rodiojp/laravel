<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title as Title;

class ClientController extends Controller
{
    public function __construct(Title $titles)
    {
        $this->titles = $titles->all();
    }

    public function di()
    {
        dd($this->titles);
    }

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

    public function newClient( Request $request)
    {
        $data = [];
        $data['title'] = $request->input('title');
        $data['name'] = $request->input('name');
        $data['lastName'] = $request->input('lastName');
        $data['address'] = $request->input('address');
        $data['zipCode'] = $request->input('zipCode');
        $data['city'] = $request->input('city');
        $data['state'] = $request->input('state');
        $data['email'] = $request->input('email');

        $data['titles'] = $this->titles;
        $data['modify'] = 0;

        if ($request->isMethod('post')){
            dd($data);
        }
        return view('client.form', $data);
    }

    public function create()
    {
        return __METHOD__;
        // return view('create');
    }

    public function show($client_id)
    {
        $data = [];
        $data['titles'] = $this->titles;
        $data['modify'] = 1;
        return view('client.form', $data);
    }

    public function modify($client_id)
    {
        return __METHOD__ . ':' . $client_id;
        // return view('create');
    }
}