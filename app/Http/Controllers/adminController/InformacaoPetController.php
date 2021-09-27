<?php

namespace App\Http\Controllers\adminController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class InformacaoPetController extends Controller
{
    //
    public function BuscaInformacao(){
        return view('adminViews.informacaoPet');
    }
}
