@extends('theme.template')
@section('title', 'MT Food | Lista de produtos')
@section('content')
<div class="container-fluid content-inner pb-0">
    <div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-white">Produtos esgotados</h4>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table dataTable" id="example1">
                                <thead class="">
                                    <tr>
                                        <th>#</th>
                                        <th>Produto</th>
                                        <th>Preço unitário</th>
                                        <th>Fornecedor</th>
                                        <th>Data de entrada</th>
                                        @can('admin')
                                        <th>Acções</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $entries as $key => $entry )
                                    <tr>
                                        <td>{{ __($key + 1) }}</td>
                                        <td>{{ __($entry->product_name) }}</td>
                                        <td>{{ __($entry->price) }}</td>
                                        <td>{{ __($entry->supplier ?? '-') }}</td>
                                        <td>{{ __($entry->entry_date) }}</td>
                                        @can('admin')
                                        <td>
                                            <button type="button" class="btn btn-success" data-toggle="modal"
                                                data-target="#updateModal{{ __($entry->id) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4">
                                                    </path>
                                                </svg>
                                                Adcionar
                                            </button>
                                        </td>
                                        @endcan
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

@foreach($entries as $entry)
<div class="modal fade" id="updateModal{{ __($entry->id) }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Acrescentar quantidades</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ __(route('soldout.add', $entry->id)) }}">
                @csrf
                <div class="modal-body">

                    <div class="row">                       
                        <div class="form-group col-md-12">
                            <label class="form-label" for="quantity">Quantidade:</label>
                            <input type="text" class="form-control" value="{{ __(old('quantity')) }}" name="quantity"
                                id="quantity" placeholder="Quantidade">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal{{ __($entry->id) }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirme</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Você tem a certeza que deseja apagar o produto?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a href="{{ __(route('stock.in.delete', $entry->id)) }}" class="btn btn-primary">Deletar</a>
            </div>
        </div>
    </div>
</div>
@endforeach



<div class="position-fixed top-0 end-0 p-3" style="z-index: 10000">
    <div id="liveToast" class="toast fade hide" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#007aff"></rect>
            </svg>
            <strong class="me-auto">Status</strong>
            <small class="text-muted">agora mesmo</small>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            @if($errors->any() || session('message'))
            {{ __(session('message')) }}
            @endif
        </div>
    </div>
</div>

@if($errors->any() || session('message'))
<script>
    // Espera o DOM estar pronto
    document.addEventListener('DOMContentLoaded', function () {

        // Cria o elemento Toast
        var toast = new bootstrap.Toast(document.getElementById('liveToast'));

        // Exibe o Toast
        toast.show();
    });
</script>
@endif
@endSection