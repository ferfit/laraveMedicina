<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MedicacionController extends Controller
{
    public function view($id){
      return view('content.pages.medishare.medicacion.view',['id'=>$id]);
    }
}
