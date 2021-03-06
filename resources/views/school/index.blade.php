@extends('layouts.app')

@section('template_title')
    School
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Escuela de Conducción') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('schools.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
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

										<th>Nombre</th>
										<th>Tipolicencia</th>
										<th>Uso</th>
										<th>Preciobase</th>
										<th>Incremento</th>
										<th>Total</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($schools as $school)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $school->nombre }}</td>
											<td>{{ $school->tipolicencia }}</td>
											<td>{{ $school->uso }}</td>
											<td>{{ $school->preciobase }}</td>
											<td>{{ $school->incremento }}</td>
											<td>{{ $school->total }}</td>

                                            <td>
                                                <form action="{{ route('schools.destroy',$school->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('schools.show',$school->id) }}"><i class="fa fa-fw fa-eye"></i> Detalles</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('schools.edit',$school->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $schools->links() !!}
            </div>
        </div>
    </div>
@endsection
