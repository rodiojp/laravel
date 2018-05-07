<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function index()
    {
        //return __METHOD__;
        return view('client.index');
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
