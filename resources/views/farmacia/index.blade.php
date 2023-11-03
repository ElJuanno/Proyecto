@extends('layouts.app')

@section('template_title')
    Farmacia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Farmacia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('farmacias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

										<th>Id Provedor</th>
										<th>Direccion</th>
										<th>Telefono</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($farmacias as $farmacia)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $farmacia->id_provedor }}</td>
											<td>{{ $farmacia->direccion }}</td>
											<td>{{ $farmacia->telefono }}</td>

                                            <td>
                                                @role('admin')
                                                <form action="{{ route('farmacias.destroy',$farmacia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('farmacias.show',$farmacia->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('farmacias.edit',$farmacia->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                                @endrole
                                                @role('empleado')
                                                <form action="{{ route('farmacias.destroy',$farmacia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('farmacias.show',$farmacia->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('farmacias.edit',$farmacia->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                </form>
                                                @endrole
                                                @role('cliente')
                                                <form action="{{ route('farmacias.destroy',$farmacia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('farmacias.show',$farmacia->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
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
                {!! $farmacias->links() !!}
            </div>
        </div>
    </div>
@endsection
