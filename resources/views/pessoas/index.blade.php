@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          Pessoa
          <a class="btn btn-success float-xs-right" href="{{ route('pessoas.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($pessoas->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>Nome</th> <th>Email</th> <th>Cpf</th> <th>Endereco</th> <th>Telefone</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($pessoas as $pessoa)
              <tr>
                <td class="text-xs-center"><strong>{{$pessoa->id}}</strong></td>

                <td>{{$pessoa->nome}}</td> <td>{{$pessoa->email}}</td> <td>{{$pessoa->cpf}}</td> <td>{{$pessoa->endereco}}</td> <td>{{$pessoa->telefone}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('pessoas.show', $pessoa->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('pessoas.edit', $pessoa->id) }}">
                    E
                  </a>

                  <form action="{{ route('pessoas.destroy', $pessoa->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $pessoas->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
