@extends('layouts.admin')

<!-- main header section -->
@section('main-content-header')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Item</h3>
        </div>
    @include('layouts.components.header-widgets.dashboard-header')
    <!-- /.box-body -->
    <div class="box-body">
        <a onclick="showMegaMenu()" href="#" class="btn btn-app">
            <i class="main-action-btn-info fa fa-list"></i> Quick Menu
        </a>
        <a href="{{ url('/ims/item') }}" class="btn btn-app">
            <i  class="main-action-btn-info fa fa-arrow-left"></i> Go Back
        </a>
        <a href="{{ url('/ims/item/create') }}" class="btn btn-app">
            <i  class="main-action-btn-info fa fa-refresh"></i> Refresh
        </a>
        <a href="{{ url('/ims/brand') }}" class="btn btn-app">
            <i  class="main-action-btn-info fa fa-table"></i> Brand
        </a>
        <a href="{{ url('/ims/invoice') }}" class="btn btn-app">
            <i  class="main-action-btn-info fa fa-table"></i> Invoice
        </a>
    </div>
    <!-- /.box-body -->
    </div>
@endsection
<!-- /main header section -->

<!-- main section -->
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">

                </div>
                <!-- /.box-header -->
                <!-- form start -->

                {!! Form::open(['action'=>'Ims\ItemController@store','class'=>'form-horizontal','id'=>'Form']) !!}
                @include('error.error')
                @include('admin.ims.item._partials.createForm')
                {!! Form::close() !!}
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row -->

@endsection
<!-- /main section -->