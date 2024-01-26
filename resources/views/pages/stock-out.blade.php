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
                            <form>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label">Produto:</label>
                                        <select name="type" class="selectpicker form-control" data-style="py-0">
                                            <option>Select</option>
                                            <option>Saco de arroz</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="quantity">Quantidade:</label>
                                        <input type="number" class="form-control" id="quantity"
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