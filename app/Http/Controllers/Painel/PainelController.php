<?php

namespace App\Http\Controllers\Painel;
use App\User;
use App\Aluno;
use App\Estagio;
use App\Empresa;
use App\Http\Controllers\Controller ;


use Illuminate\Http\Request;

class PainelController extends Controller
{
   public $resquest;
   public $model;
   public $arrayAlunos;
   public $emp;

    
    public function __construct(Request $resquest, User $model, Aluno $arrayAlunos, Empresa $emp, Estagio $est)
    {
        $this->middleware('auth');
        $this->request = $resquest;
        $this->model = $model;
        $this->arrayAlunos = $arrayAlunos;
        $this->emp = $emp;
        $this->est = $est;
       
    }   

   
    
    public function index()
    {

        $user = Auth()->User();
        return view ('Painel.index', compact("user"));
    }
    public function viewUsuario()
    {

        $user = Auth()->User();
        $usuarios = $this->model->where('id', '!=', 0)->get();
        return view ('Painel.Usuarios.index', compact("user", 'usuarios'));
    }

    public function viewAlunos()
    {
        $user = Auth()->User();
        $alunos = $this->arrayAlunos->where('id', '!=', 0)->get();
        return view('Painel.Alunos.index', compact('user', 'alunos'));
    }
     public function viewEmpresas()
    {
        $user = Auth()->User();
        $empresas = $this->emp->where('id', '!=', 0)->get();
        return view('Painel.Empresas.index', compact('user', 'empresas'));
    }
      public function viewEstagios()
    {
        $user = Auth()->User();
        $estagios = $this->est->where('id', '!=', 0)->get();
        return view('Painel.Estagios.index', compact('user', 'estagios'));
    }

    public function viewDireitos()
    {
        $user = Auth()->User();
        return view('Painel.Fundadores', compact('user',));
    }

   

   
   
    
}
