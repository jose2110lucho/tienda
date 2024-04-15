@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Usuarios Registrados</h1>
@stop

@section('content')
    <div class="card shadow-md">
        <div class="card-header">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Nombre de usuario" >
            </div>
        </div>
        @if ( $usuarios->count() )
            <div class="card-body">
                <div class="table-responsive-xl">
                    <table class="table table-striped table-hover table-bordered">
                        <thead class="table-dark">
                            <tr style="text-align: center;">
                                <th scope="col"></th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Fecha de Registro</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $usuarios as $usuario)
                                <tr style="text-align: center; vertical-align: middle;">
                                    <td>
                                        @isset( $usuario->profile_photo_url )
                                            <img class="table-img" src="{{ $usuario->profile_photo_url }}" alt="NoImage" />
                                        @else
                                            <img class="table-img" src="https://www.weact.org/wp-content/uploads/2016/10/Blank-profile.png" alt="NoImage">
                                        @endisset
                                    </td>
                                    <td>
                                        {{ $usuario->name }}
                                    </td>
                                    <td>
                                        {{ $usuario->email }}
                                    </td>
                                    <td>
                                        {{ $usuario->created_at }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="card-body ">
                <strong>No hay ningun registro</strong>
            </div>
        @endif
    </div>
@stop

@section('css')
    <style>
        .table-img {
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
        }
    </style>
@stop

@section('js')
@stop
