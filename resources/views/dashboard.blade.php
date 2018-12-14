@extends('layouts.admin')

<!-- main header section -->
    @section('main-content-header')
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Dashboard</h3>
            </div>
            <div class="box-body">
                <a href="{{ url('/staff') }}" class="btn btn-success">Staff Register</a>
                <a href="{{ url('/customer') }}" class="btn btn-success">Customer</a>
                <a href="{{ url('/work-sheet') }}" class="btn btn-success">Work Sheet</a>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    @endsection
<!-- /main header section -->

<!-- main section -->
    @section('main-content')
        <!-- Main content -->
       <div class="row">

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-aqua">
                        <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Projects</span>
                            <span class="info-box-number">{!! DB::table('projects')->count() !!}</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                    Number of Project Completed
                  </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>


                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-green">
                        <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Employees</span>
                            <span class="info-box-number">{!! DB::table('users')->count() !!}</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                    Number Of Staff
                  </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Projects</h3>
                    </div>
                    <!-- /.box-header -->
                    <div style="overflow: auto" class="box-body">
                        <table id="table" class="table table-responsive table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Code</th>
                                <th>Customer</th>
                                <th>Number OF Hrs</th>
                                <th>Budget</th>
                                <th>Quoted</th>
                                <th>Cost</th>
                                <th>Revenue</th>
                                <th>Recovery Ratio</th>
                                <th>Status</th>
                                <th>View</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php $Rows = \App\Models\Project::all();?>

                            @foreach($Rows as $row)
                                <?php
                                $Customer="";
                                $CM = \App\Models\Customer::find($row->customer_id );
                                if(!empty($CM)){
                                    $Customer = $CM->name;
                                }
                                ?>
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->code }}</td>
                                    <td>{{ $Customer }}</td>
                                    <td>{{ $row->number_of_hrs }}</td>
                                    <td>{{ $row->budget_cost }}</td>
                                    <td>{{ $row->quoted_price }}</td>
                                    <td>{{ $row->actual_cost }}</td>
                                    <td>{{ $row->revenue }}</td>
                                    <td>{{ $row->recovery_ratio }}</td>
                                    <td>{{ $row->close }}</td>
                                    <td>
                                        <a href="{{ url('/project') }}/{{ $row->id }}"><i class="fa fa-paper-plane"></i></a>
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
