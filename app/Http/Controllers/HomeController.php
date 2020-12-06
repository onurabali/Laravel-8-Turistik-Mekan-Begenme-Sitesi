<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function about()
    {
        return view('home.about');
    }


    public function test($id,$name)
    {
        $data['id']=$id;
        $data['name']=$name;
        return view('home.test',$data);
        /*
        echo "ıd number:",$id;
        echo "<br>name: ",$name;
        for($i=1;$i<=$id;$i++)
        {
            echo "<br> $i - $name";
        }
        */
    }
}
