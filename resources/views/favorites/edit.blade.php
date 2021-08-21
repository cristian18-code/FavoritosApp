@extends('layouts.app')
@section('content')
<div class="content-wrapper col-8 text-left">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="page-title">
            Editar favorito
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{route('favorites.index')}}">{{ __('Home')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar favorito</li>
            </ol>
        </nav>               
    </div>
    <!-- End of Topbar -->
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">{{$favorite->titulo}}</h4>
                    </div>

                    {!! Form::model($favorite, ['route'=>['favorites.update', $favorite], 'method'=>'PUT']) !!}                    
                        
                        @include('favorites._form')
                        <button type="submit" class="btn btn-primary mr-2">Actualizar categoria</button>
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