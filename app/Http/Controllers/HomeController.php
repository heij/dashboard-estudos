<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Study;
use Correios;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Study $study)
    {
        $this->middleware('auth');
        $this->study = $study;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', ['studies' => $this->study->numEstudosPorStatus()]);
    }
}
