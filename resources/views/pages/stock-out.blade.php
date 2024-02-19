@extends('theme.template')
@section('title', 'MT Food | Realizar saida de produtos')
@section('content')
<div class="container-fluid content-inner pb-0">
    <div>
        <div class="row">
            <div class="col-xl-12 col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Saída de produtos</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="new-user-info">
                            @if($errors->any() || session('message'))
                            <div class="alert alert-@php if($errors->any()) echo 'danger'; else echo 'success'; @endphp alert-dismissible fade show"
                                role="alert">
                                @if($errors->any())
                                <x-validation-errors class="mb-4" :errors="$errors" />
                                @else
                                {{ __(session('message')) }}
                                @endif
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                            <form method="post" action="{{ __(route('stock.out.add')) }}">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label">Produto:</label>
                                        <select name="product" class="selectpicker form-control" data-style="py-0">
                                            <option selected disabled>Selecionar produto</option>
                                            @foreach( $entries as $entry )
                                            <option value="{{ __($entry->id) }}">{{ __($entry->product_name) }} ( {{
                                                __($entry->quantity) }} )</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="quantity">Quantidade:</label>
                                        <input type="number" class="form-control" name="quantity" id="quantity"
                                            placeholder="Quantidade">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Adicionar a lista</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-white">Lista</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <a href="{{ __(route('stock.out.deduce')) }}" class="btn btn-success">Efectuar Saída</a>
                            <a href="{{ __(route('stock.out.empty-list')) }}" class="btn btn-danger">Esvaziar Lista</a>
                            <table class="table dataTable" id="">
                                <thead class="">
                                    <tr>
                                        <th>#</th>
                                        <th>Produto</th>
                                        <th>Quantidade</th>
                                        <th>Preço Unitário</th>
                                        <th>Preço total de saída</th>
                                        <th>Fornecedor</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $products as $key => $product )
                                    <tr>
                                        <td>{{ __($key + 1) }}</td>
                                        <td>{{ __($product['product_name']) }}</td>
                                        <td>{{ __($product['quantity']) }}</td>
                                        <td>{{ __($product['unity_price']) }}MT</td>
                                        <td>{{ __($product['amount']) }}MT</td>
                                        <td>{{ __($product['supplier'] ?? '-') }}</td>
                                        <td>
                                            <a href="" data-toggle="modal"
                                                data-target="#deleteModal{{ __($key) }}">
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

@foreach( $products as $key => $product )
<div class="modal fade" id="deleteModal{{ __($key) }}" tabindex="-1" role="dialog"
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
                Você tem a certeza que deseja remover o produto da lista?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a href="{{ __(route('stock.out.remove-product', $key)) }}" class="btn btn-primary">Remover</a>
            </div>
        </div>
    </div>
</div>
@endforeach
@endSection