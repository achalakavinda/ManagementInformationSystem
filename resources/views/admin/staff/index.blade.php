@extends('layouts.admin')

@section('style')
    {!! Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
@endsection
<!-- main header section -->
@section('main-content-header')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Staff Table</h3>
        </div>
        @include('layouts.components.header-widgets.dashboard-header')
        <div class="box-body">
            <a onclick="showMegaMenu()" href="#" class="btn btn-app">
                <i class="main-action-btn-info fa fa-list"></i> Quick Menu
            </a>
            <a href="{!! url('staff') !!}" class="btn btn-app">
                <i class="main-action-btn-info fa fa-refresh"></i> Refresh
            </a>
            <a href="{!! url('staff/create') !!}" class="btn btn-app">
                <i class="main-action-btn-danger fa fa-plus"></i> New
            </a>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endsection
<!-- /main header section -->

<!-- main section -->
@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <div style="overflow: auto" class="box-body">
                    <table id="table" class="table table-responsive table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Emp No</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Cost</th>
                            <th>Hour Rate</th>
                            <th>Nic</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($Rows as $row)
                                <tr>
                                    <td>{!! $row->id !!}</td>
                                    <td>{!! $row->emp_no !!}</td>
                                    <td>{!! $row->User->name !!}</td>
                                    <td>{!! $row->address !!}</td>
                                    <td>{!! $row->cost  !!}</td>
                                    <td>{!! $row->hr_rates !!}</td>
                                    <td>{!! $row->nic !!}</td>
                                    <td>{!! $row->email !!}</td>
                                    <td>
                                        <a href="{!! url('/staff') !!}/{!! $row->id !!}/edit" >Edit <i class="fa fa-edit"></i></a>
                                        <a href="{!! url('/staff/profile') !!}/{!! $row->id !!}" >Profile <i class="fa fa-user"></i></a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

@endsection
<!-- /main section -->

@section('js')
    {!! Html::script('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}
    {!! Html::script('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}

    <script type="text/javascript">

        $(function () {
            $('#table').DataTable({
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
            })
        })
    </script>

@endsection
