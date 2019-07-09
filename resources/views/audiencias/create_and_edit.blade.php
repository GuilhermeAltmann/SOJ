@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          Audiencia /
          @if($audiencia->id)
            Edit #{{ $audiencia->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($audiencia->id)
          <form action="{{ route('audiencias.update', $audiencia->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('audiencias.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="form-group">
                	<label for="nome-field">Nome</label>
                	<input class="form-control" type="text" name="nome" id="nome-field" value="{{ old('nome', $audiencia->nome ) }}" />
                </div> 
                <div class="form-group">
                    <label for="data_hora-field">Data_hora</label>
                    <input class="form-control" type="text" name="data_hora" id="data_hora-field" value="{{ old('data_hora', $audiencia->data_hora ) }}" />
                </div> 
                <div class="form-group">
                	<label for="descricao-field">Descricao</label>
                	<textarea name="descricao" id="descricao-field" class="form-control" rows="3">{{ old('descricao', $audiencia->descricao ) }}</textarea>
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('audiencias.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
