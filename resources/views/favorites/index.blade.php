@extends('layouts.app')
@section('title', 'Lista de favoritos')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('media/libs/DataTables/datatables.min.css')}}"/>
@endsection
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="{{route('favorites.create')}}" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Agregar site</span>
    </a>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item active" aria-current="page">{{ __('Home')}}</li>
        </ol>
    </nav>               
</div>
<!-- End of Topbar -->
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">                    
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Mis sitios web favoritos</h4>
                </div>

                <div class="table-responsive">
                    <table id="table-sites" class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Titulo</th>
                                <th>Tema</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($favorites as $favorite)
                            <tr>
                                <th scope="row">{{$favorite->id}}</th>
                                <td>
                                    <a href="{{$favorite->url}}" target="_blank">{{$favorite->titulo}}</a>
                                </td>
                                <td>{{$favorite->tema}}</td>
                                <td style="width: 50px;">
                                    
                                {!! Form::open(['route'=>['favorites.destroy',$favorite], 'method'=>'DELETE', 'id'=>'form_eliminar'.$favorite->id]) !!}

                                    <a class="jsgrid-button jsgrid-edit-button" href="{{route('favorites.edit', $favorite)}}" title="Editar">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    
                                    <button class="jsgrid-button jsgrid-delete-button unstyled-button" type="submit" title="Eliminar">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                {!! Form::close() !!}
                                </td>
                            </tr>
                            <script>
                                $('#form_eliminar{{$favorite->id}}').submit(function(e){
                                    e.preventDefault();
                                    Swal.fire({
                                        title: "Esta accion no se podra reversar!",
                                        text: 'Estas seguro de eliminar {{$favorite->titulo}} de tus favoritos?',
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Si, eliminarlo/a!',
                                        cancelButtonText: 'Cancelar'
                                    }).then((result) => {
                                    if (result.value) {
                                        this.submit();
                                    }
                                    })
                                });
                            </script>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="{{asset('media/libs/DataTables/DataTables-1.10.25/js/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('media/libs/DataTables/DataTables-1.10.25/js/dataTables.bootstrap5.min.js')}}"></script>
    <script>
        $(document).ready( function () {
            $('#table-sites').DataTable();
        } );
    </script>
@endsection