@extends('layouts.app')
@section('title', 'Registro de url')
@section('styles')
<style>
    textarea {
        resize: none !important;
    }
</style>
@endsection
@section('content')
<div class="content-wrapper col-8 text-left">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="page-title">
            Registrar url
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{route('favorites.index')}}">{{ __('Home')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">Agregar url</li>
            </ol>
        </nav>               
    </div>
    <!-- End of Topbar -->
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registrar website</h4>
                    </div>

                    {!! Form::open(['route'=>'favorites.store', 'method'=>'POST']) !!}
                        @include('favorites._form')
                        <button type="submit" class="btn btn-primary mr-2">Guardar</button>
                        <a href="{{route('favorites.index')}}" class="btn btn-danger mr-2">
                            Cancelar
                        </a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection