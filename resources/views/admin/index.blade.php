@extends('layouts.app')

@section('section')
    <section id="page-title">
        <div class="container">
            <div class="page-title">
                <h1>Data Tables</h1>
                <span>Inspiration comes of working every day.</span>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="#">Home</a> </li>
                    <li><a href="#">Components</a> </li>
                    <li class="active"><a href="#">Data Tables</a> </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end: Page title -->
    <!-- Page Menu -->
    <div class="page-menu">
        <div class="container">
            <nav>
                <ul>
                    <li class="dropdown"><a href="#">Basic</a>
                        <ul class="dropdown-menu">
                            <li><a href="component-datatable.html">Zero Configuration</a></li>
                            <li><a href="component-datatable-complex-headers.html">Complex Headers</a></li>
                            <li><a href="component-datatable-scrollable.html">Scrollable</a></li>
                            <li><a href="component-datatable-pagination-option.html">Alternative pagination</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Advanced</a>
                        <ul class="dropdown-menu">
                            <li><a href="component-datatable-column-rendering.html">Column Rendering</a></li>
                            <li><a href="component-datatable-multiple-controls.html">Multiple Controls</a></li>
                            <li><a href="component-datatable-column-visibility.html">Column Visibility</a></li>
                            <li><a href="component-datatable-row-callback.html">Row Callback</a></li>
                            <li><a href="component-datatable-row-grouping.html">Row Grouping</a></li>
                            <li><a href="component-datatable-footer-callback.html">Footer Callback</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Data sources</a>
                        <ul class="dropdown-menu">
                            <li><a href="component-datatable-html.html">HTML</a></li>
                            <li><a href="component-datatable-ajax-source-data.html">Ajax sourced data</a></li>
                            <li><a href="component-datatable-javascript-source-data.html">Javascript sourced data</a></li>
                            <li><a href="component-datatable-server-side-processing.html">Server-side processing</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Search Options</a>
                        <ul class="dropdown-menu">
                            <li><a href="component-datatable-column-search.html">Column Search</a></li>
                            <li><a href="component-datatable-advanced-search.html">Advanced Search</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Extensions</a>
                        <ul class="dropdown-menu">
                            <li><a href="component-datatable-autofill.html">Autofill</a></li>
                            <li><a href="component-datatable-buttons.html">Buttons</a></li>
                            <li><a href="component-datatable-colreorder.html">ColReorder</a></li>
                            <li><a href="component-datatable-fixedheader.html">FixedHeader</a></li>
                            <li><a href="component-datatable-keytable.html">KeyTable</a></li>
                            <li><a href="component-datatable-responsive.html">Responsive</a></li>
                            <li><a href="component-datatable-rowgroup.html">RowGroup</a></li>
                            <li><a href="component-datatable-rowreorder.html">RowReorder</a></li>
                            <li><a href="component-datatable-scroller.html">Scroller</a></li>
                            <li><a href="component-datatable-select.html">Select</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="pageMenu-trigger">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </div>
    <!-- end: Page Menu -->
    <!-- Page Content -->
    <section id="page-content" class="no-sidebar">
        <div class="container">
            <!-- DataTable -->
            <div class="row mb-3">
                <div class="col-lg-6">
                    <h4>DataTables</h4>
                    <p>Add advanced interaction controls to your HTML tables</p>
                </div>
                <div class="col-lg-6 text-right">
                    <button type="button" class="btn btn-light"><i class="icon-plus"></i> Add Record</button>
                    <div class="p-dropdown ml-3 float-right">
                        <a class="title btn btn-light"><i class="icon-sliders"></i> Options</a>
                        <div class="p-dropdown-content">
                            <ul>
                                <li><a href="#"><i class="icon-refresh-cw"></i>Update Records</a></li>
                                <li><a href="#"><i class="icon-edit"></i>Edit</a></li>
                                <li><a href="#"><i class="icon-x"></i>Delete</a></li>
                                <li>
                                    <hr>
                                </li>
                                <li><a href="#"><i class="icon-life-buoy"></i>Documentation</a></li>
                                <li><a href="#"><i class="icon-mail"></i>Email Support Team</a></li>
                                <li><a href="#"><i class="icon-alert-triangle"></i>Report an issue</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="export_buttons" class="mt-2"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Age</th>
                            <th>Admin</th>
                            <th>Options</th>

                        </tr>


                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th>{{$user->name}}</th>
                                <th>{{$user->information->first_nam ?? "-"}}</th>
                                <th>{{$user->information->last_name ?? "-"}}</th>
                                <th>{{$user->email}}</th>
                                <th>{{$user->phone}}</th>
                                <th>{{$user->created_at}}</th>
                                <th>{{$user->information->age ?? "-"}}</th>
                                <th>{{$user->is_admin}}</th>
                                <th><div class="p-dropdown ml-3 float-right">
                                        <a class="title btn btn-light"><i class="icon-sliders"></i> </a>
                                        <div class="p-dropdown-content">
                                            <ul>
                                                <li><a href="#"><i class="icon-refresh-cw"></i>Update Records</a></li>
                                                <li><a href="#"><i class="icon-edit"></i>Edit</a></li>
                                                <form method="POST" action="{{route("admin.dashboard.delete")}}">
                                                    @csrf
                                                    <input type="hidden" name="userId" value="{{$user->id}}">
                                                    <li><button type="submit">Delete</button> <i class="icon-x"></i></li>
                                                </form>

                                                <li>
                                                    <hr>
                                                </li>
                                                <li><a href="#"><i class="icon-life-buoy"></i>Documentation</a></li>
                                                <li><a href="#"><i class="icon-mail"></i>Email Support Team</a></li>
                                                <li><a href="#"><i class="icon-alert-triangle"></i>Report an issue</a></li>
                                            </ul>
                                        </div>
                                    </div></th>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end: DataTable -->
            <div>{{$users->links()}}</div>
        </div>
    </section>
@endsection
