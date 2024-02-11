@extends('theme.template')
@section('title', 'Bazuca | Visualizar produtos removidos do stock')
@section('content')
<div class="container-fluid content-inner pb-0">
    <div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-white">Produtos removidos do stock</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table dataTable" id="example1">
                                <thead class="">
                                    <tr>
                                        <th>#</th>
                                        <th>Produto</th>
                                        <th>Q. Retirada</th>
                                        <th>Q. remanescente</th>
                                        <th>Preço Unitário</th>
                                        <th>Preço total de saída</th>
                                        <th>Fornecedor</th>
                                        <th>Data de saída</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $outlets as $key => $outlet )
                                    <tr>
                                        <td>{{ __($key + 1) }}</td>
                                        <td>{{ __($outlet->entry->product_name) }}</td>
                                        <td>{{ __($outlet->quantity) }}</td>
                                        <td>{{ __($outlet->leftover) }}</td>
                                        <td>{{ __($outlet->entry->price) }}</td>
                                        <td>{{ __($outlet->quantity * $outlet->entry->price) }}</td>
                                        <td>{{ __($outlet->entry->supplier ?? '-') }}</td>
                                        <td>{{ __($outlet->entry->entry_date) }}</td>
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