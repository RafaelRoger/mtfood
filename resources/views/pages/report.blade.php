@extends('theme.template')
@section('title', 'Bazuca | Visualizar produtos removidos do stock')
@section('content')
<div class="container-fluid content-inner pb-0">
    <div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-white">Relatório</h4>
                    </div>
                    <div class="d-flex mt-3 ms-4 me-4 justify-content-between">

                        <div class="form-outline">
                            <select name="report" id="report" class="selectpicker form-control" data-style="py-0">
                                <option selected disabled>Selecionar periodo</option>
                                <option value="today">Hoje</option>
                                <option value="week">Ultima semana</option>
                                <option value="month">Ultimo mês</option>
                                <option value="all">Tudo</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
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
                            <div class="d-flex justify-content-between flex-wrap">
                                <div class="dataTables_info" id="example_info" role="status" aria-live="polite">
                                    Showing 1 to 10 of 57 entries</div>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true"><svg width="15" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.5 19L8.5 12L15.5 5" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg> </span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true"><svg width="15" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg> </span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('report').addEventListener('change', function () {
        var selectedValue = this.value;

        var redirectURL = "{{ url('admin/report/') }}/" + selectedValue;

        window.location.href = redirectURL;
    });
</script>
@endSection