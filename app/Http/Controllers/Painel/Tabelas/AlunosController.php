<?php
 
namespace App\Http\Controllers\Painel\Tabelas;
 use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Aluno;

class AlunosController extends Controller
{
    

    public function __construct(Aluno $alu){
       

    }
    public function create() {

        $user = Auth()->User();

        return view('Painel.Alunos.create', compact('user'));
    }

    public function store(Request $request) {
        $formData = $request->all();

        Aluno::create($formData);

        return redirect()->route('Painel.Alunos.index');
    }

    public function edit($id) {
       
         $user = Auth()->User();
        $aluno = Aluno::find($id);
    
        return view('Painel.Alunos.edit', ['user' => $user, 'aluno' => $aluno] );
    }

    public function update(Request $request, $id) {
        $formData = $request->all();

        $aluno = Aluno::find($id);
        
        $aluno->update($formData);

        return redirect()->route('Painel.Alunos.index');
    }

    public function destroy($id) {
        $aluno = Aluno::find($id);
        
        $aluno->delete();

        return redirect()->route('Painel.Alunos.index');
    }
}
