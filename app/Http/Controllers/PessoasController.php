<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PessoaRequest;

class PessoasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$pessoas = Pessoa::paginate();
		return view('pessoas.index', compact('pessoas'));
	}

    public function show(Pessoa $pessoa)
    {
        return view('pessoas.show', compact('pessoa'));
    }

	public function create(Pessoa $pessoa)
	{
		return view('pessoas.create_and_edit', compact('pessoa'));
	}

	public function store(PessoaRequest $request)
	{
		$pessoa = Pessoa::create($request->all());
		return redirect()->route('pessoas.show', $pessoa->id)->with('message', 'Created successfully.');
	}

	public function edit(Pessoa $pessoa)
	{
        $this->authorize('update', $pessoa);
		return view('pessoas.create_and_edit', compact('pessoa'));
	}

	public function update(PessoaRequest $request, Pessoa $pessoa)
	{
		$this->authorize('update', $pessoa);
		$pessoa->update($request->all());

		return redirect()->route('pessoas.show', $pessoa->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Pessoa $pessoa)
	{
		$this->authorize('destroy', $pessoa);
		$pessoa->delete();

		return redirect()->route('pessoas.index')->with('message', 'Deleted successfully.');
	}
}