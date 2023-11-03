@extends('layouts.app')

@section('template_title')
    {{ $venta->name ?? "{{ __('Show') Venta" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Venta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ventas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Cliente:</strong>
                            {{ $venta->id_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Id Empleado:</strong>
                            {{ $venta->id_empleado }}
                        </div>
                        <div class="form-group">
                            <strong>Id Producto:</strong>
                            {{ $venta->id_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Producto:</strong>
                            {{ $venta->cantidad_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Pago:</strong>
                            {{ $venta->tipo_pago }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $venta->fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
