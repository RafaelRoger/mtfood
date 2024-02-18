@extends('theme.template')
@section('title', 'Bazuca | Visualizar produtos removidos do stock')
@section('content')

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-xl-8">
            </div>
            <div class="col-xl-3">
                <button id="download" class="btn btn-success">Download</button>
            </div>
        </div>
    </div>
</div>

<div class="card" >
    <div class="card-body" id="elementToPrint">
        <div class="container mb-5 mt-3">
            <div class="row d-flex align-items-baseline">
                <div class="col-xl-9">
                    <p style="color: #7e8d9f;font-size: 20px;">Factura</p>
                </div>
                <hr>
            </div>

            <div class="container">
                <div class="col-md-12">
                    <div class="text-center">
                        <i class="fab fa-mdb fa-4x ms-0" style="color:#5d9fc5 ;"></i>
                        <p class="pt-0">MT - Food</p>
                    </div>

                </div>


                <div class="row">
                    <div class="col-xl-8">
                        <ul class="list-unstyled">
                            <li class="text-muted">Caixa: <span style="color:#5d9fc5 ;">{{ Auth::user()->name.'
                                    '.Auth::user()->last_name }}</span></li>
                            <li class="text-muted">Maputo, Moçambique</li>
                            <li class="text-muted"><i class="fas fa-phone"></i> (+258) 84 954 9369</li>
                        </ul>
                    </div>
                    <div class="col-xl-4">
                        <p class="text-muted">Factura</p>
                        <ul class="list-unstyled">
                            <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                    class="fw-bold">Data de Criação: </span>{{ date('d/m/Y') }}</li>
                        </ul>
                    </div>
                </div>

                <div class="row my-2 mx-1 justify-content-center">
                    <table class="table table-striped table-borderless">
                        <thead style="background-color:#84B0CA ;" class="text-white">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Produto</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Preço Unitário</th>
                                <th scope="col">Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $products as $key => $product )
                            <tr>
                                <th scope="row" class="text-black">{{ __($key + 1) }}</th>
                                <td class="text-black">{{ __($product['product_name']) }}</td>
                                <td class="text-black">{{ __($product['quantity']) }}</td>
                                <td class="text-black">{{ __($product['unity_price']) }}</td>
                                <td class="text-black">{{ __($product['amount']) }}</td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                    </div>
                    <div class="col-xl-3">
                        <p class="text-black float-start"><span class="text-black me-3"> Total</span><span
                                style="font-size: 25px;">{{ __($total) }}</span></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xl-10">
                        <p>Obrigado pela sua compra</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
    integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    document.getElementById('download').addEventListener('click', () => {

        const inputElement = document.getElementById('elementToPrint');
        const options = {
            filename: 'invoice.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
        };

        html2pdf(inputElement, options);
    })
</script>
@endSection