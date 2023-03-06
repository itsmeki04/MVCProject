<?php

namespace App\Http\Controllers;

use App\Models\Modellalista;
use Illuminate\Http\Request;

class Controllalist extends Controller
{
    public function Functionalist()
    {
        return view('Section.body',['data' => Modellalista:: all()]);
    }
    //
}
