<?php

namespace App\Http\Controllers\Painel\Tabelas;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{

    
 
    public function index()
    {
       
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        $usuario = User::find($id);
        
        $usuario->delete();

        return redirect()->route('Painel.Usuarios.index');
    } //
    
}
