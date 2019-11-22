<?php
 
namespace App\Http\Controllers\Painel\Tabelas;
 use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Estagio;
use App\Aluno;
use App\Empresa;

class EstagiosController extends Controller
{
    
    public $varAlunos;
    public function __construct(Estagio $estagios, Aluno $varAlunos){
       $this->varAlunos = $varAlunos; 

    }
    public function create() {

        $user = Auth()->User();
        $empresas = Empresa::all();
        $alunos = Aluno::all();

        return view('Painel.Estagios.create', [ "user" => $user,"empresas" => $empresas, "alunos" => $alunos]);
    }

    public function store(Request $request) {
        $formData = $request->all();

        Estagio::create($formData);

        return redirect()->route('Painel.Estagios.index');
    }

    public function edit($id) {

        $user = Auth()->User();
        $empresas = Empresa::all();
        $alunos = Aluno::all();
         $user = Auth()->User();
        $estag = Estagio::find($id);
    
        return view('Painel.Estagios.edit', ['user' => $user, 'estag' => $estag, "empresas" => $empresas, "alunos" => $alunos] );
    }

    public function update(Request $request, $id) {
        $formData = $request->all();

        $estagio = Estagio::find($id);
        
        $estagio->update($formData);

        return redirect()->route('Painel.Estagios.index');
    }

    public function destroy($id) {
        $estagio = Estagio::find($id);
        
        $estagio->delete();

        return redirect()->route('Painel.Estagios.index');
    }
}
