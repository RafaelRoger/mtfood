@extends('theme.template')
@section('title', 'MT Food | Lista de produtos')
@section('content')
<div class="container-fluid content-inner pb-0">
    <div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-white">Produtos no stock</h4>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table dataTable" id="example1">
                                <thead class="">
                                    <tr>
                                        <th>#</th>
                                        <th>Produto</th>
                                        <th>Quantidade</th>
                                        <th>Preço unitário</th>
                                        <th>Fornecedor</th>
                                        <th>Data de entrada</th>
                                        <th>Acções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $entries as $key => $entry )
                                    <tr>
                                        <td>{{ __($key + 1) }}</td>
                                        <td>{{ __($entry->product_name) }}</td>
                                        <td>{{ __($entry->quantity) }}</td>
                                        <td>{{ __($entry->price) }}</td>
                                        <td>{{ __($entry->supplier ?? '-') }}</td>
                                        <td>{{ __($entry->entry_date) }}</td>
                                        <td>
                                            <a href="" data-toggle="modal"
                                                data-target="#updateModal{{ __($entry->id) }}">
                                                <svg width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.7476 20.4428H21.0002" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M11.021 6.00098L16.4732 10.1881" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </path>
                                                </svg>
                                            </a>

                                            <a href="" data-toggle="modal"
                                                data-target="#deleteModal{{ __($entry->id) }}">
                                                <svg width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M20.708 6.23975H3.75" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                        </td>
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
                <h5 class="modal-title" id="exampleModalLabel">Actualizar Produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ __(route('stock.in.update', $entry->id)) }}">
                @csrf
                <div class="modal-body">

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="name">Nome do produto:</label>
                            <input type="text" class="form-control" value="{{ __($entry->product_name) }}" name="name"
                                id="name" placeholder="Nome do produto" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="quantity">Quantidade:</label>
                            <input type="text" class="form-control" value="{{ __($entry->quantity) }}" name="quantity"
                                id="quantity" placeholder="Quantidade" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="data_in">Data de entrada:</label>
                            <input type="date" class="form-control" value="{{ __($entry->entry_date) }}" name="data_in"
                                id="data_in" placeholder="Data de entrada" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="price">Preço por unidade:</label>
                            <input type="text" class="form-control" value="{{ __($entry->price) }}" name="price"
                                id="price" placeholder="Preço por unidade" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="form-label" for="supplier">Fornecedor:</label>
                            <input type="text" class="form-control" value="{{ __($entry->supplier) }}" name="supplier"
                                id="supplier" placeholder="Fornecedor">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
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