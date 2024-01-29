@extends('theme.template')
@section('title', 'Bazuca | Realizar saida de produtos')
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
                            <form method="post" action="{{ __(route('stock.out')) }}">
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
                                <button type="submit" class="btn btn-primary">Efectuar saída</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endSection