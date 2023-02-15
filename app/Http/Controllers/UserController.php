<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        return 'Hello from users' ;
    }

    public function show($id){
        $data=array(
            "id"=>$id,
            "name"=>"Denzel Shane Bondoc",
            "age"=>23,
            "email"=>"dbondoc0126@gmail.com"
             );
            return view('user', $data); 
        }

}
