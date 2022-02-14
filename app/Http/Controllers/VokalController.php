<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VokalModel;
use Illuminate\Routing\Controller;

class VokalController extends Controller
{
    public function index()
    {
        return view ('home');
    }

    public function store(Request $request)
    {
        $arr = $request->all();
        VokalModel::setVokal($arr['kata']);
        return view('/hasil', ["hasil" => VokalModel::getHasil(), "jumlah" => VokalModel::getHitung()]);
    }
}
