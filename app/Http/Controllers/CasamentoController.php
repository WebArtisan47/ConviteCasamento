<?php

namespace App\Http\Controllers;

use App\Models\Confirmados;
use Exception;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CasamentoController extends Controller
{
    public function ConviteCasamento(){
        return Inertia::render('Convite');
    }

    public function confirmarPresenca(Request $request){
        try {
            $create = [
                'nome' => $request->nome,
                'quantidade' => $request->qtd 
            ];
            $confirmados = Confirmados::create($create);
            if($confirmados->id){
                return response()->json([
                    "mensagem" => "Confirmado com sucesso"
                ],200);
            }else{
                throw new Exception("Erro ao tentar confirmar");
            }
        } catch (\Throwable $th) {
            return response()->json([
                "mensagem" => $th->getMessage()
            ],500);
        }
    }
}
