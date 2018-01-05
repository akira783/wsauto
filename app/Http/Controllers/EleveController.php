<?php

namespace wsauto\Http\Controllers;

use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function index()
    {
        return Eleve::all();
    }
 
    public function show($id)
    {
        return Eleve::find($id);
    }
}
