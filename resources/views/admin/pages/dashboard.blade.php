@extends('admin.index')
@section('title', 'Dashboard')
@section('content')

    <div class="section-header">
        <h1>Blank Page</h1>
    </div>
    <div class="section-body">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Basic DataTables</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="table-1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="table-1_length"><label>Show <select
                                                name="table-1_length" aria-controls="table-1"
                                                class="form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="table-1_filter" class="dataTables_filter"><label>Search:<input type="search"
                                                class="form-control form-control-sm" placeholder=""
                                                aria-controls="table-1"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-striped dataTable no-footer" id="table-1" role="grid"
                                        aria-describedby="table-1_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="text-center sorting_asc" tabindex="0" aria-controls="table-1"
                                                    rowspan="1" colspan="1" style="width: 7.8px;"
                                                    aria-sort="ascending"
                                                    aria-label="
                          #
                        : activate to sort column descending">
                                                    #
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1"
                                                    colspan="1" style="width: 96.25px;"
                                                    aria-label="Task Name: activate to sort column ascending">Task Name</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 52.9833px;" aria-label="Progress">Progress</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 141.85px;" aria-label="Members">Members</th>
                                                <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1"
                                                    colspan="1" style="width: 56.2px;"
                                                    aria-label="Due Date: activate to sort column ascending">Due Date</th>
                                                <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1"
                                                    colspan="1" style="width: 70.6333px;"
                                                    aria-label="Status: activate to sort column ascending">Status</th>
                                                <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1"
                                                    colspan="1" style="width: 44.2833px;"
                                                    aria-label="Action: activate to sort column ascending">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            @forelse ($posts as $post)
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">
                                                        1
                                                    </td>
                                                    <td>{{ $post->title }}</td>
                                                    <td class="align-middle">
                                                        <div class="progress" data-height="4" data-toggle="tooltip"
                                                            title="" data-original-title="100%" style="height: 4px;">
                                                            <div class="progress-bar bg-success" data-width="100%"
                                                                style="width: 100%;"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <img alt="image" src="assets/img/avatar/avatar-5.png"
                                                            class="rounded-circle" width="35" data-toggle="tooltip"
                                                            title="" data-original-title="Wildan Ahdian">
                                                    </td>
                                                    <td>2018-01-20</td>
                                                    <td>
                                                        <div class="badge badge-success">Completed</div>
                                                    </td>
                                                    <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                                </tr>
                                            @empty
                                                <div class="alert alert-danger">
                                                    Data Post belum Tersedia.
                                                </div>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="table-1_info" role="status" aria-live="polite">
                                        Showing 1 to 4 of 4 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="table-1_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled" id="table-1_previous">
                                                <a href="#" aria-controls="table-1" data-dt-idx="0" tabindex="0"
                                                    class="page-link">Previous</a>
                                            </li>
                                            <li class="paginate_button page-item active"><a href="#"
                                                    aria-controls="table-1" data-dt-idx="1" tabindex="0"
                                                    class="page-link">1</a></li>
                                            <li class="paginate_button page-item next disabled" id="table-1_next"><a
                                                    href="#" aria-controls="table-1" data-dt-idx="2"
                                                    tabindex="0" class="page-link">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
