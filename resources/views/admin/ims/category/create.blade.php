@extends('layouts.admin')

@section('main-content-header')
    <!-- main header section -->
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Category</h3>
        </div>
    @include('layouts.components.header-widgets.dashboard-header')
    <!-- /.box-body -->

        <div class="box-body">

            <a onclick="showMegaMenu()" href="#" class="btn btn-menu">
                <i class="main-action-btn-info fa fa-list"></i> Quick Menu
            </a>

            <a href="{{ url('/ims/category') }}" class="btn btn-menu">
                <i class="main-action-btn-info fa fa-arrow-left"></i> Go Back
            </a>

            <a href="{{ url('/ims/category/create') }}" class="btn btn-menu">
                <i class="main-action-btn-info fa fa-refresh"></i> Refresh
            </a>

            <a href="{{ url('/ims/item') }}" class="btn btn-menu">
                <i class="main-action-btn-info fa fa-table"></i> Item
            </a>

            <a href="{{ url('/ims/invoice') }}" class="btn btn-menu">
                <i class="main-action-btn-info fa fa-table"></i> Invoice
            </a>

        </div>
    </div>
    <!-- /.box -->
    <!-- /main header section -->
@endsection



@section('main-content')
    <!-- main section -->
    @include('error.error')
    <!-- form start -->
    {!! Form::open(['action'=>'Ims\CategoryController@store','class'=>'form-horizontal','id'=>'Form','enctype'=>'multipart/form-data']) !!}
    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                </div>
                <!-- /.box-header -->
                @include('admin.ims.category._partials.createForm')
            </div>
            <!-- /.box -->
        </div>
        @include('admin.ims.category._partials.extentions.extCreateForm')
    </div>
    <!-- /.row -->
    {!! Form::close() !!}
    <!-- /main section -->
@endsection
