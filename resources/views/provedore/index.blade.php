@extends('layouts.app')

@section('template_title')
    Provedore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Provedore') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('provedores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Id Producto</th>
										<th>Nombre Pro</th>
										<th>Telefono</th>
										<th>Direccion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($provedores as $provedore)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $provedore->id_producto }}</td>
											<td>{{ $provedore->nombre_pro }}</td>
											<td>{{ $provedore->telefono }}</td>
											<td>{{ $provedore->direccion }}</td>

                                            <td>
                                                @role('admin')
                                                <form action="{{ route('provedores.destroy',$provedore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('provedores.show',$provedore->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('provedores.edit',$provedore->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                                @endrole
                                                @role('empleado')
                                                <form action="{{ route('provedores.destroy',$provedore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('provedores.show',$provedore->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('provedores.edit',$provedore->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                </form>
                                                @endrole
                                                @role('cliente')
                                                <form action="{{ route('provedores.destroy',$provedore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('provedores.show',$provedore->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                </form>
                                                @endrole
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $provedores->links() !!}
            </div>
        </div>
    </div>
@endsection
