<?php
 
namespace App\Http\Controllers\Painel\Tabelas;
 use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Empresa;

class EmpresasController extends Controller
{
    

    public function __construct(Empresa $emp){
       

    }
    public function create() {

        $user = Auth()->User();

        return view('Painel.Empresas.create', compact('user'));
    }

    public function store(Request $request) {
        $formData = $request->all();

        Empresa::create($formData);

        return redirect()->route('Painel.Empresas.index');
    }

    public function edit($id) {
       
         $user = Auth()->User();
        $empresa = Empresa::find($id);
    
        return view('Painel.Empresas.edit', ['user' => $user, 'empresa' => $empresa] );
    }

    public function update(Request $request, $id) {
        $formData = $request->all();

        $empresa = Empresa::find($id);
        
        $empresa->update($formData);

        return redirect()->route('Painel.Empresas.index');
    }

    public function destroy($id) {
        $empresa = Empresa::find($id);
        
        $empresa->delete();

        return redirect()->route('Painel.Empresas.index');
    }
}
