@extends('theme.template')
@section('title', 'Bazuca | Lista de utilizadores')
@section('content')
<div class="container-fluid content-inner pb-0">
    <div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-white">Basic Datatable</h4>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table dataTable" id="example1">
                                <thead class="">
                                    <tr>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Telefone 1</th>
                                        <th>Telefone 2</th>
                                        <th>Nivel</th>
                                        <th>Data de Criação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{ __($user->name.' '.$user->last_name) }}</td>
                                        <td>{{ __($user->email) }}</td>
                                        <td>{{ __($user->phone1) }}</td>
                                        <td>{{ __($user->phone2) }}</td>
                                        <td>{{ __($user->nivel->level) }}</td>
                                        <td>{{ __(\Carbon\Carbon::parse($user->created_at)->format('d/m/Y')) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endSection