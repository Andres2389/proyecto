@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? __('Show') . " " . __('User') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('users.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Rol:</strong>
                                    {{ $user->rol }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Documento:</strong>
                                    {{ $user->documento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $user->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellidos:</strong>
                                    {{ $user->apellidos }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Correo Electronico:</strong>
                                    {{ $user->correo_electronico }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Contraseña:</strong>
                                    {{ $user->contraseña }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono:</strong>
                                    {{ $user->telefono }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Etapa:</strong>
                                    {{ $user->tipo_etapa }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Programa Formacion:</strong>
                                    {{ $user->programa_formacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ficha:</strong>
                                    {{ $user->ficha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Instructor Asignado:</strong>
                                    {{ $user->instructor_asignado }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
