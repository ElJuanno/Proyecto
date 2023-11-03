@extends('layouts.app')

@section('template_title')
    {{ $provedore->name ?? "{{ __('Show') Provedore" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Provedore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('provedores.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Producto:</strong>
                            {{ $provedore->id_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Pro:</strong>
                            {{ $provedore->nombre_pro }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $provedore->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $provedore->direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
