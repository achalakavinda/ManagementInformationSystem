@extends('layouts.admin')

@section('style')
    {!! Html::style('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
@endsection

@section('js')
    {!! Html::script('bower_components/datatables.net/js/jquery.dataTables.min.js') !!}
    {!! Html::script('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}

    <script type="text/javascript">

        $(function () {
            $('#table').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true
            })
        })
    </script>

@endsection

<!-- main header section -->
@section('main-content-header')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Staff Board</h3>
        </div>
        <div class="box-body">
            <a href="{{ url('/dashboard') }}" class="btn btn-success">Go Back</a>
            <a href="{{ url('/staff') }}" class="btn btn-success">Staff</a>
            <a href="{{ url('/staff/create') }}" class="btn btn-success">New</a>
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
                <div class="box-header">
                    <h3 class="box-title">Staff Registry</h3>
                </div>
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
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($Rows as $row)

                            <tr>
                                <td>{!! $row->id !!}</td>
                                <td>{!! $row->emp_no !!}</td>
                                <td>{!! $row->name !!}</td>
                                <td>{!! $row->address !!}</td>
                                <td>{!! $row->cost  !!}</td>
                                <td>{!! $row->hr_rates !!}</td>
                                <td>{!! $row->nic !!}</td>
                                <td>{!! $row->email !!}</td>
                                <td><a href="{!! url('/staff/profile') !!}/{!! $row->id !!}" class="btn btn-sm btn-danger">Profile</a> </td>
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