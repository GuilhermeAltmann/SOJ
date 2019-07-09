@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          Pessoa /
          @if($pessoa->id)
            Edit #{{ $pessoa->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($pessoa->id)
          <form action="{{ route('pessoas.update', $pessoa->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('pessoas.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="form-group">
                	<label for="nome-field">Nome</label>
                	<input class="form-control" type="text" name="nome" id="nome-field" value="{{ old('nome', $pessoa->nome ) }}" />
                </div> 
                <div class="form-group">
                	<label for="email-field">Email</label>
                	<input class="form-control" type="text" name="email" id="email-field" value="{{ old('email', $pessoa->email ) }}" />
                </div> 
                <div class="form-group">
                	<label for="cpf-field">Cpf</label>
                	<input class="form-control" type="text" name="cpf" id="cpf-field" value="{{ old('cpf', $pessoa->cpf ) }}" />
                </div> 
                <div class="form-group">
                	<label for="endereco-field">Endereco</label>
                	<input class="form-control" type="text" name="endereco" id="endereco-field" value="{{ old('endereco', $pessoa->endereco ) }}" />
                </div> 
                <div class="form-group">
                	<label for="telefone-field">Telefone</label>
                	<input class="form-control" type="text" name="telefone" id="telefone-field" value="{{ old('telefone', $pessoa->telefone ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('pessoas.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
