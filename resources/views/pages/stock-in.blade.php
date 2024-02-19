@extends('theme.template')
@section('tite', 'MT Food | Entrada de produtos')
@section('content')
<div class="container-fluid content-inner pb-0">
    <div>
        <div class="row">
            <div class="col-xl-12 col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Entrada de novos produtos</h4>
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
                            <form method="post" action="{{ __(route('stock.in')) }}">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="name">Nome do produto:</label>
                                        <input type="text" class="form-control" name="name" :value="old('name')" id="name"
                                            placeholder="Nome do produto" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="quantity">Quantidade:</label>
                                        <input type="text" class="form-control" :value="old('quantity')" name="quantity" id="quantity"
                                            placeholder="Quantidade" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="data_in">Data de entrada:</label>
                                        <input type="date" class="form-control" :value="old('data_in')" name="data_in" id="data_in"
                                            placeholder="Data de entrada" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="price">Preço por unidade:</label>
                                        <input type="text" class="form-control" :value="old('price')" name="price" id="price"
                                            placeholder="Preço por unidade" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="form-label" for="supplier">Fornecedor:</label>
                                        <input type="text" class="form-control" :value="old('supplier')" name="supplier" id="supplier"
                                            placeholder="Fornecedor">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Adicionar produto</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endSection