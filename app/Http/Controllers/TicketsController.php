<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class TicketsController extends Controller
{
    protected $table = 'tickets'; 
    public function create(){
        $categories = Category::all();

        return view('tickets.create', compact('categories'));
    }
    
}
