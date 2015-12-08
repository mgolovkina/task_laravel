<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        $data = ['cell1' => 'c1',
                'cell2' => 'c2',
                'cell3' => 'c3',
                'cell4' => 'c4'];
        
        return view('index', $data);
    }
}
