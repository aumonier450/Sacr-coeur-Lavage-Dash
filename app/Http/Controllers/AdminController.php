<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index(){
    return view('admin.ReservationE');
   }

   public function index1(){
      return view('admin.ReservationV');
     }
     public function COMPTA(){
      return view('admin.comptabilité');
     }
     public function EDITP(Request $request){
      
      return view('admin.Editprofil',[
         'user' => $request->user(),
     ]);
     }
}
