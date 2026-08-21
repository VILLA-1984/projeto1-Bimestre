<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::latest()->paginate(10);

        return view('aluno.aluno', compact('alunos'));
    }

    public function create()
    {
        return view('aluno.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:alunos,email',
            'cpf' => 'required|string|size:11|unique:alunos,cpf',
            'data_nascimento' => 'required|date',
            'telefone' => 'required|string|max:20',
            'curso' => 'required|string|max:255',
        ]);

        Aluno::create($request->all());

        return redirect()->route('aluno.index')->with('success', 'Aluno cadastrado com sucesso!');
    }

    public function show(Aluno $aluno)
    {
        return view('aluno.show', compact('aluno'));
    }

    public function edit(Aluno $aluno)
    {
        return view('aluno.edit', compact('aluno'));
    }

    public function update(Request $request, Aluno $aluno)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:alunos,email,' . $aluno->id,
            'cpf' => 'required|string|size:11|unique:alunos,cpf,' . $aluno->id,
            'data_nascimento' => 'required|date',
            'telefone' => 'required|string|max:20',
            'curso' => 'required|string|max:255',
        ]);

        $aluno->update($request->all());

        return redirect()->route('aluno.index')->with('success', 'Aluno atualizado com sucesso!');
    }

    public function destroy(Aluno $aluno)
    {
        $aluno->delete();

        return redirect()->route('aluno.index')->with('success', 'Aluno removido com sucesso!');
    }
}
