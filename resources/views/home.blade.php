@extends('layouts.default')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-2">
        <div class="list-group mt-3">
            <a href="#" class="list-group-item list-group-item-action">
                Link
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                Link
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                Link
            </a>
        </div>
    </div>
    <div class="col-md-10">
        <div class="row">
            <div class="card card-home text-white bg-primary col-md-3 m-3">
                <a href="" class="a-custom">
                    <div class="card-body">
                        <h4 class="card-text text-center">
                            Pessoa
                        </h4>
                    </div>
                </a>
            </div>
            <div class="card card-home text-white bg-primary col-md-3 m-3">
                <a href="" class="a-custom">
                    <div class="card-body">
                        <h4 class="card-text text-center">
                            Agenda
                        </h4>
                    </div>
                </a>
            </div>
            <div class="card card-home text-white bg-primary col-md-3 m-3">
                <a href="" class="a-custom">
                    <div class="card-body">
                        <h4 class="card-text text-center">
                            Docs
                        </h4>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="card card-home text-white bg-primary col-md-3 m-3">
                <a href="" class="a-custom">
                    <div class="card-body">
                        <h4 class="card-text text-center">
                            Ger. Arquivo
                        </h4>
                    </div>
                </a>
            </div>
            <div class="card card-home text-white bg-primary col-md-3 m-3">
                <a href="" class="a-custom">
                    <div class="card-body">
                        <h4 class="card-text text-center">
                            Acesso
                        </h4>
                    </div>  
                </a>
            </div>
            <div class="card card-home text-white bg-primary col-md-3 m-3">
                <a href="" class="a-custom">
                    <div class="card-body">
                        <h4 class="card-text text-center">
                            Links
                        </h4>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="card card-home text-white bg-primary col-md-3 m-3">
                <a href="" class="a-custom">
                    <div class="card-body">
                        <h4 class="card-text text-center">
                            Audiencias
                        </h4>
                    </div>  
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
    <link href="{{ asset('css/home/home.css') }}" rel="stylesheet">        
@endsection