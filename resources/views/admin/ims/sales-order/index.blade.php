@extends('layouts.admin')

@section('main-content-header')
<!-- main header section -->
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Sales Order</h3>
    </div>
    @include('layouts.components.header-widgets.dashboard-header')
    <div class="box-body">
        <a onclick="showMegaMenu()" href="#" class="btn btm-menu">
            <i class="main-action-btn-info fa fa-list"></i> Quick Menu
        </a>
        <a href="{!! url('ims/sales-order') !!}" class="btn btn-menu">
            <i class="main-action-btn-info fa fa-refresh"></i> Refresh
        </a>
        <a href="{!! url('ims/sales-order/create') !!}" class="btn btn-menu">
            <i class="main-action-btn-danger fa fa-plus"></i> New
        </a>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
<!-- /main header section -->
@endsection

@section('main-content')
<!-- main section -->
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <!-- /.box-header -->
            <div style="overflow: auto" class="box-body">
                <table id="table" class="table table-responsive table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Date</th>
                            <th>Customer</th>
                            <th>Amount</th>
                            <th>Discount</th>
                            <th>Total</th>
                            <th><i class="fa fa-cogs"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Items as $item)
                        <tr>
                            <td>{!! $item->id !!}</td>
                            <td>{!! $item->date !!}</td>
                            <td><?php $CM = \App\Models\Customer::find($item->customer_id); if($CM!=null){echo $CM->name;}?>
                            </td>
                            <td>{!! $item->amount !!}</td>
                            <td>{!! $item->discount !!}%</td>
                            <td>{!! $item->total !!}</td>
                            <td>
                                <a style="padding: 10px" href="{!! url('ims/sales-order') !!}/{!! $item->id !!}"><i
                                        class="fa fa-list"></i></a>
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
<!-- /main section -->
@endsection

@section('js')
@include('layouts.components.dataTableJs.index')
@endsection