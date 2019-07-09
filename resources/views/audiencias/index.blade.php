@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          Audiencia
          <a class="btn btn-success float-xs-right" href="{{ route('audiencias.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($audiencias->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>Nome</th> <th>Data_hora</th> <th>Descricao</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($audiencias as $audiencia)
              <tr>
                <td class="text-xs-center"><strong>{{$audiencia->id}}</strong></td>

                <td>{{$audiencia->nome}}</td> <td>{{$audiencia->data_hora}}</td> <td>{{$audiencia->descricao}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('audiencias.show', $audiencia->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('audiencias.edit', $audiencia->id) }}">
                    E
                  </a>

                  <form action="{{ route('audiencias.destroy', $audiencia->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $audiencias->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
