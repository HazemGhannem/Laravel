<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Ramsey\Uuid\Type\Integer;

class HomeController extends Controller
{
    //
    public function index( $name){
        $word= "Bonjour " . $name ;
        return response("<h1>$word </h1>");
    }
    public function show():View{
        return View ("Home.show",[
            "name"=>"5twin5"
        ]);
    }
    public function show1( $n):View{
        return View ("Home.show",[
            "name"=>$n
        ]);
    }
    public function form( ):View{
        return View ("Home.form");
    }
    public function result( ):View{
        return View ("Home.result",[
            "result"=>Request()->pseudo
        ]);
    }
}
