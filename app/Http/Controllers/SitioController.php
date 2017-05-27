<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SitioController extends Controller
{
    function index(){
    	return view('site.inicio');
    }
      function productos(){
    	return view('site.productos');
    }
      function login(){
    	return view('site.login');
    }
      function contacto(){
    	return view('site.contacto');
    }
      function acerca(){
    	return view('site.acerca');
    }
}
