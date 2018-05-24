<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title as Title;
use App\Models\Client as Client;

class ClientController extends Controller
{
    public function __construct(Title $titles, Client $client)
    {
        $this->titles = $titles->all();
        $this->client = $client->all();
    }

    public function di()
    {
        dd($this->titles);
    }

    //
    public function index()
    {
        $data = [];

        // //return __METHOD__;
        // $obj = new \stdClass;
        // $obj->id = 1;
        // $obj->title = 'mr';
        // $obj->name = 'john';
        // $obj->last_name = 'doe';
        // $obj->email = 'john@domain.com';
        // $data['clients'][]=$obj;
  
        // $obj = new \stdClass;
        // $obj->id = 2;
        // $obj->title = 'ms';
        // $obj->name = 'jane';
        // $obj->last_name = 'doe';
        // $obj->email = 'jane@another-domain.com';
        // $data['clients'][]=$obj;

        $data['clients']=$this->client->all();
        return view('client.index',$data);
    }

    public function newClient( Request $request, Client $client)
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

        if ($request->isMethod('post')){
            // dd($data);
            $this->validate(
                $request,
                [
                    'name' => 'required|min:5',
                    'lastName' => 'required',
                    'address' => 'required',
                    'zipCode' => 'required',
                    'city' => 'required',
                    'state' => 'required',
                    'email' => 'required'
                ]

            );

            $tableClient = [];
            $tableClient['title'] = $data['title'];
            $tableClient['name'] = $data['name'];
            $tableClient['last_name'] = $data['lastName'];
            $tableClient['address'] = $data['address'];
            $tableClient['zip_code'] = $data['zipCode'];
            $tableClient['city'] = $data['city'];
            $tableClient['state'] = $data['state'];
            $tableClient['email'] = $data['email'];
            
            $client->insert($tableClient);

            return redirect('clients');
        }
        $data['titles'] = $this->titles;
        $data['modify'] = 0;


        return view('client.form', $data);
    }

    public function create()
    {
        return __METHOD__;
        // return view('create');
    }

    public function show($client_id, Request $request)
    {
        $data = [];
        $data['client_id'] = $client_id;
        
        $data['titles'] = $this->titles;
        $data['modify'] = 1;
        $clientTable = $this->client->find($client_id);
 
        $data['title'] = $clientTable->title;
        $data['name'] = $clientTable->name;
        $data['lastName'] = $clientTable->last_name;
        $data['address'] = $clientTable->address;
        $data['zipCode'] = $clientTable->zip_code;
        $data['city'] = $clientTable->city;
        $data['state'] = $clientTable->state;
        $data['email'] = $clientTable->email;

        $request->session()->put('last_updated', $clientTable->name .' ' .
            $clientTable->last_name);

        return view('client.form', $data);
    }

    // public function modify($client_id)
    // {
    //     return __METHOD__ . ':' . $client_id;
    //     // return view('create');
    // }

    public function modify( Request $request, $client_id, Client $client)
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

        if ($request->isMethod('post')){
            // dd($data);
            $this->validate(
                $request,
                [
                    'name' => 'required|min:5',
                    'lastName' => 'required',
                    'address' => 'required',
                    'zipCode' => 'required',
                    'city' => 'required',
                    'state' => 'required',
                    'email' => 'required'
                ]

            );
            
            $clientTable = $this->client->find($client_id);

            $clientTable->title = $request->input('title');
            $clientTable->name = $request->input('name');
            $clientTable->last_name = $request->input('lastName');
            $clientTable->address = $request->input('address');
            $clientTable->zip_code = $request->input('zipCode');
            $clientTable->city = $request->input('city');
            $clientTable->state = $request->input('state');
            $clientTable->email = $request->input('email');

            $clientTable->save();

            return redirect('clients');
        }
        $data['titles'] = $this->titles;
        $data['modify'] = 0;


        return view('client.form', $data);
    }
}