@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Pessoa / Show #{{ $pessoa->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('pessoas.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('pessoas.edit', $pessoa->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>Nome</label>
<p>
	{{ $pessoa->nome }}
</p> <label>Email</label>
<p>
	{{ $pessoa->email }}
</p> <label>Cpf</label>
<p>
	{{ $pessoa->cpf }}
</p> <label>Endereco</label>
<p>
	{{ $pessoa->endereco }}
</p> <label>Telefone</label>
<p>
	{{ $pessoa->telefone }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
