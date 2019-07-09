@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Audiencia / Show #{{ $audiencia->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('audiencias.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('audiencias.edit', $audiencia->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>Nome</label>
<p>
	{{ $audiencia->nome }}
</p> <label>Data_hora</label>
<p>
	{{ $audiencia->data_hora }}
</p> <label>Descricao</label>
<p>
	{{ $audiencia->descricao }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
