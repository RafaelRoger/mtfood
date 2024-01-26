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
                    <div class="d-flex mt-3 ms-4 me-4 justify-content-between">
                        <select class="form-select-custom" style="padding:10px 15px 10px 15px;color:#fff;background-color:#202022;background-repeat: no-repeat;
                background-position: right 1rem center;
                
                background-size: 16px 12px;
                border: 1px solid #69697a;
                border-radius: .5rem;" id="validationDefault04" required>
                            <option selected disabled value="">10</option>
                            <option>20</option>
                            <option>30</option>
                            <option>40</option>
                        </select>
                        <div class="form-outline">
                            <input type="search" id="form1" class="form-control ms-1" placeholder="Search.."
                                aria-label="Search" />
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
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
                                    <tr>
                                        <td>Rafael Munguambe</td>
                                        <td>munguamberafael36@gmail.com</td>
                                        <td>+258 84 954 9369</td>
                                        <td>+258 87 954 9369</td>
                                        <td>Super utilizador</td>
                                        <td>14/01/2024</td>
                                    </tr>
                                    <tr>
                                        <td>Hélder Chirruta</td>
                                        <td>helderchirruta@gmail.com</td>
                                        <td>+258 84 954 9369</td>
                                        <td>+258 87 954 9369</td>
                                        <td>Super utilizador</td>
                                        <td>14/01/2024</td>
                                    </tr>
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
@endSection