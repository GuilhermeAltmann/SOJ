@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          Link /
          @if($link->id)
            Edit #{{ $link->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($link->id)
          <form action="{{ route('links.update', $link->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('links.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="form-group">
                	<label for="name-field">Name</label>
                	<input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $link->name ) }}" />
                </div> 
                <div class="form-group">
                	<label for="link-field">Link</label>
                	<input class="form-control" type="text" name="link" id="link-field" value="{{ old('link', $link->link ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('links.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
