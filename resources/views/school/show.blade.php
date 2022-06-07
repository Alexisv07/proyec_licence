@extends('layouts.app')

@section('template_title')
    {{ $school->name ?? 'Show School' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Datos Registrados</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('schools.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $school->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Tipolicencia:</strong>
                            {{ $school->tipolicencia }}
                        </div>
                        <div class="form-group">
                            <strong>Uso:</strong>
                            {{ $school->uso }}
                        </div>
                        <div class="form-group">
                            <strong>Preciobase:</strong>
                            {{ $school->preciobase }}
                        </div>
                        <div class="form-group">
                            <strong>Incremento:</strong>
                            {{ $school->incremento }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $school->total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
