@extends('layouts.admin')

<!-- main header section -->
@section('main-content-header')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Job Type</h3>
        </div>
        @include('layouts.components.header-widgets.dashboard-header')
        <div class="box-body">
            <a onclick="showMegaMenu()" href="#" class="btn btn-app">
                <i class="main-action-btn-info fa fa-list"></i> Quick Menu
            </a>
            <a href="{!! url('job-type') !!}" class="btn btn-app">
                <i class="main-action-btn-info fa fa-arrow-left"></i> Go Back
            </a>
            <a href="{!! url('job-type/create') !!}" class="btn btn-app">
                <i class="main-action-btn-info fa fa-refresh"></i> Refresh
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
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add a new Job Type</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(['action'=>'JobTypeController@store','class'=>'form-horizontal','id'=>'Form']) !!}
                @include('error.error')
                @include('admin.job_type._partials.createForm')
                {!! Form::close() !!}
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row -->

@endsection
<!-- /main section -->

@section('js')
    @include('error.swal')
@endsection