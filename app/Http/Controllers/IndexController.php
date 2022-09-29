<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Redirect;

class IndexController extends Controller
{
    public function index() {
        return view('page');
    }
    public function store(Request $request) {
        $client = new Client;
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->phone = $request->input('phone');
        $client->message = $request->input('message');
        $client->save();
        return Redirect::route('home');
    }
}
