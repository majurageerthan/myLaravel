<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ClientApiController extends Controller
{
    public function store(Request $request){
        $client = new Client([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('password')

        ]);

        $client->save();
        return response()->json([
            'client' => $client
            //'state' => 'CA'
        ],201);
    }

    public function index()
    {
        $clients = DB::table('clients')->get();

        //return view('Clients.index', ['clients' => $clients]);
        return response()->json([
            'client' => $clients
            //'state' => 'CA'
        ],201);
    }

}