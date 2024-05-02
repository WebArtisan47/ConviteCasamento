<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CasamentoController extends Controller
{
    public function ConviteCasamento(){
        return Inertia::render('Convite');
    }
}
