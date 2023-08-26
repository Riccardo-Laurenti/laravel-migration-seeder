<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        $today = now()->toDateString();
        $trains = Train::whereDate('orario_partenza', $today)->get();

        return view('trains', compact('trains'));
    }
}
