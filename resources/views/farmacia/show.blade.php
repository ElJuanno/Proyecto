@extends('layouts.app')

@section('template_title')
    {{ $farmacia->name ?? "{{ __('Show') Farmacia" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Farmacia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('farmacias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Provedor:</strong>
                            {{ $farmacia->id_provedor }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $farmacia->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $farmacia->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
