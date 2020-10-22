<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

use DB;
use Hash;
use App\Models\User;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\EditRequest;

class HomeController extends Controller
{

    public function index()
    {

        $tabela['usuarios'] = DB::table('users')->where('status', '1')->get();
        return view('listar', $tabela);
    }


    public function create()
    {

        return view('cadastrar');
    }


    public function store(UsersRequest $request)
    {


        $dados = array(

            'name' => $request->name,
            'email' => $request->email,
            'password' =>  Hash::make($request->password),
            'status' => '1',
        );

        if (DB::table('users')->insert($dados)) {

            $request->session()->flash('success', "Usuário $request->name cadastrado !");

            return redirect()->to('/');
        } else {
            $request->session()->flash('error', "Ocorreu um Erro ao Cadastrar Usuario");

            return redirect()->to('/');
        }
    }


    public function show($id)
    { 

        $dados['usuario'] = User::find($id);
        return view('mostrar', $dados);

    }


    public function edit($id)
    {

        $dados['usuario'] = User::find($id);
        return view('editar', $dados);
    }

    public function update(UsersRequest $request, $id)
    {

      
        $dados = array(
            'name'    =>  $request->name,
            'email'    =>  $request->email,
            'password'    => Hash::make($request->password),
            'status'    => $request->status,


        );

        if (User::where('user_id', $id)->update($dados)) {

            $request->session()->flash('success', "Usuário $request->name Atualizado com Sucesso !");

            return redirect()->to('/');
        } else {
            $request->session()->flash('error', "Ocorreu um Erro ao Atualizar  Usuario");

            return redirect()->to('/');
        }
    }


    public function destroy(Request $request, $id)
    {


        $user = User::find($id);

        if ($user->delete()) {

            $request->session()->flash('success', "Usuario  $user->name foi Deleteado ");

            DB::table('users')->where('user_id', $id)->update(['status' => '0']);
        } else {
            $request->session()->flash('error', "Erro ao Deletar usuário !");
        }

        return back();
    }
}
