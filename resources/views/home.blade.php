@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                </svg>
                            </span>
                        </div>
                        <input type="search" class="form-control" placeholder="Buscar..." name="search" value="{{ request('search') }}">
                    </form>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <caption>Listado de interesados</caption>
                            <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Sexo</th>
                                    <th scope="col">País</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Ciudad</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Fuente</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($applicants as $applicant)
                                <tr>
                                    <th scope="row">
                                        {{ $applicant->name }}
                                    </th>
                                    <td>
                                        {{ __($applicant->gender) }}
                                    </td>
                                    <td>
                                        {{ $applicant->country }}
                                    </td>
                                    <td>
                                        {{ $applicant->region }}
                                    </td>
                                    <td>
                                        {{ $applicant->city }}
                                    </td>
                                    <td>
                                        {{ $applicant->email }}
                                    </td>
                                    <td>
                                        {{ $applicant->find_out }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $applicants->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
