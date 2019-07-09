<?php

namespace App\Http\Controllers;

use App\Models\Audiencia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AudienciaRequest;

class AudienciasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$audiencias = Audiencia::paginate();
		return view('audiencias.index', compact('audiencias'));
	}

    public function show(Audiencia $audiencia)
    {
        return view('audiencias.show', compact('audiencia'));
    }

	public function create(Audiencia $audiencia)
	{
		return view('audiencias.create_and_edit', compact('audiencia'));
	}

	public function store(AudienciaRequest $request)
	{
		$audiencia = Audiencia::create($request->all());
		return redirect()->route('audiencias.show', $audiencia->id)->with('message', 'Created successfully.');
	}

	public function edit(Audiencia $audiencia)
	{
        $this->authorize('update', $audiencia);
		return view('audiencias.create_and_edit', compact('audiencia'));
	}

	public function update(AudienciaRequest $request, Audiencia $audiencia)
	{
		$this->authorize('update', $audiencia);
		$audiencia->update($request->all());

		return redirect()->route('audiencias.show', $audiencia->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Audiencia $audiencia)
	{
		$this->authorize('destroy', $audiencia);
		$audiencia->delete();

		return redirect()->route('audiencias.index')->with('message', 'Deleted successfully.');
	}
}