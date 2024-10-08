@extends('layouts.admin')
@section('main-content-header')
<!-- main header section -->
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Invoice</h3>
    </div>
    @include('layouts.components.header-widgets.dashboard-header')
    <!-- /.box-body -->

    <div class="box-body">
        <a onclick="showMegaMenu()" href="#" class="btn btn-app">
            <i class="main-action-btn-info fa fa-list"></i> Quick Menu
        </a>
        <a href="{{ url('/ims/invoice/create') }}" class="btn btn-app">
            <i class="main-action-btn-info fa fa-refresh"></i> Refresh
        </a>
        <a href="{{ url('/ims/item') }}" class="btn btn-app">
            <i class="main-action-btn-info fa fa-table"></i> Item
        </a>

        <a href="{{ url('/ims/invoice/create') }}" class="btn btn-app">
            <i class="main-action-btn-info fa fa-plus"></i> New
        </a>

        <a onclick="postToReturn()" id="postToReturnBtn" class="btn btn-app">
            <i class="main-action-btn-info fa fa-refresh"></i> Return this invoice
        </a>
        {!!
        Form::open(['action'=>'Ims\InvoiceController@postToReturn','style'=>'display:none','id'=>'postToReturn'])
        !!}
        @csrf()
        <input type="hidden" value="{{ $Invoice->id }}" name="invoice_id">
        {{ Form::close() }}
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
<!-- /main header section -->
@endsection

<!-- main section -->
@section('main-content')
<div class="row">
    {!!
    Form::open(['action'=>'Ims\InvoiceController@store','class'=>'form-horizontal','id'=>'Form','ng-app'=>'xApp','ng-controller'=>'xAppCtrl'])
    !!}

    <div class="col-md-12">
        @include('error.error')
        <!-- general form elements -->
        <div class="box box-primary">
            <!-- form start -->
            <div class="box-body">
                <!-- invoice date -->
                <div class="col-md-12">

                    <!-- title row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <h4>
                                Customer: {!!
                                Form::select('customer_id',\App\Models\Customer::all()->pluck('name','id'),$Invoice->customer_id,['id'=>'CustomerId','disabled'])
                                !!}
                                <small class="pull-right">Date: {{ $Invoice->created_at }}</small>
                            </h4>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->

                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            <table style="width: 100%">
                                <tbody>
                                    <tr>
                                        <td>Order Date :</td>
                                        <td><input disabled style="width: 100%" id="OrderDate" name="order_date"
                                                type="date" value="{{ $Invoice->order_date }}"></td>
                                    </tr>

                                    <tr>
                                        <td>Courier Service : </td>
                                        <td><input disabled style="width: 100%" id="PurchaseOrder" name="purchase_order"
                                                type="text" value="{{ $Invoice->userdef1 }}"></td>
                                    </tr>

                                    <tr>
                                        <td>Invoice No: </td>
                                        <td><input disabled style="width: 100%" id="InvoiceNo" name="invoice_no"
                                                type="text" value="{{ $Invoice->code }}"></td>
                                    </tr>

                                    <tr>
                                        <td>Dispatch Date: </td>
                                        <td><input disabled style="width: 100%" id="DispatchedDate"
                                                name="dispatched_date" type="date" value="2020-08-03"></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    <!-- Table row -->
                    <div style="margin-top: 20px" class="row">
                        <div class="col-xs-12">
                            <table id="invoiceItemTable" class="table table-bordered">
                                <thead>
                                    <tr style="text-align: center">
                                        <th>No</th>
                                        <th>Item</th>
                                        <th>QTY</th>
                                        <th>Unit Price (LKR)</th>
                                        <th>Total (LKR)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                    <?php $count = 1 ;?>
                                    @foreach($Invoice->items as $item)
                                    <tr class="tr_{{ $count }}">
                                        <td>{{ $count }} <input style="display:none" name="row[{{ $count }}][insert]"
                                                type="checkbox" checked></td>
                                        <td>
                                            <input style="display:none" type="number" value="{{ $item->item_code_id }}"
                                                name="row[{{ $count }}][model_id]">
                                            <?php
                                                $ItemCode = \App\Models\Ims\ItemCode::find($item->item_code_id);
                                            ?>
                                            <input disabled type="text" name="row[{{ $count }}][model_name]"
                                                value="@if($ItemCode) {{ $ItemCode->name }} {{ $ItemCode->size?' - '.$ItemCode->size->code:'' }}  {{ $ItemCode->color?' - '.$ItemCode->color->code:'' }} @endif"
                                                style="width: 100%">
                                        </td>

                                        <td>
                                            <input disabled onkeyup="calTol({{ $count }})" id="qty{{ $count }}"
                                                type="number" name="row[{{ $count }}][qty]" style="width: 100%"
                                                value="{{ $item->qty }}">
                                        </td>
                                        <td>
                                            <input disabled id="price{{ $count }}" type="text" readonly
                                                name="row[{{ $count }}][unit]" value="{{ $item->unit_price }}"
                                                style="width: 100%">
                                        </td>
                                        <td>
                                            <input disabled id="tol{{ $count }}" type="text" readonly
                                                name="row[{{ $count }}][tol]" style="width: 100%"
                                                value="{{ $item->total }}">
                                        </td>
                                        {{--                                            <td>--}}
                                        {{--                                                <a  style="cursor: pointer" type="button" onclick="rowRemove('.tr_{{ $count }}')"><i
                                            class="fa fa-remove"></i></a>--}}
                                        {{--                                            </td>--}}
                                        <tr />

                                        <?php $count ++ ;?>
                                        @endforeach

                                        {{--                                    <tr>--}}
                                        {{--                                        <th>No</th>--}}
                                        {{--                                        <th>{!! Form::select('model_select_id',\App\Models\Ims\ItemCode::all()->pluck('name','id'),null,['id'=>'ModelSelectId','class'=>'form-control']) !!}</th>--}}
                                        {{--                                        <th>--}}
                                        {{--                                            <button id="addNewItem" type="button" style="width: 100%" class="btn">Add</button></th>--}}
                                        {{--                                    </tr>--}}
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-xs-8">

                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th style="width:50%">Subtotal:</th>
                                        <td><input disabled style="width: 100%" id="subtotal" name="subtotal"
                                                type="text" value="{{ $Invoice->amount }}"></td>
                                    </tr>
                                    <tr>
                                        <th>Discount:</th>
                                        <td><input disabled style="width: 80%" id="discountpercentage"
                                                name="discount_percentage" type="text"
                                                value="{{ $Invoice->discount }}">%</td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td><input disabled style="width: 100%" id="total" name="total" type="text"
                                                value="{{ $Invoice->total }}"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <div style="height: 100px" class="box-footer">
                <button disabled style="position: absolute;right: 10px;width: 100px" type="submit"
                    class="btn btn-primary">Edit</button>
                <a style="position: absolute;right: 120px;width: 100px" target="_blank"
                    href="{{ url('ims/invoice') }}/{{ $Invoice->id }}/print" class="btn btn-primary">Print</a>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>
<!-- /.row -->
<!-- /main section -->
@endsection

@section('js')
<script>
    function postToReturn() {
        if(confirm("Are you want to return this invoice")){
            $('#postToReturn').submit();
        }
    }

    var table = $('#invoiceItemTable');
        var count = 0;
        var RawCount = 1;

        $( document ).ready(function() {

            $('#CustomerId').click(function() {
                var customer_id =$('#CustomerId').val();
                $.ajax('{!! url('api/customer-for-invoices') !!}/'+customer_id, {
                    type: 'GET',  // http method
                    success: function (data, status, xhr) {
                        $('#CustomerDetail').val(data.address);
                        $('#DeliveryAddress').val(data.address);
                    },
                    error: function (jqXhr, textStatus, errorMessage) {
                        alert(errorMessage);
                    }
                });
            });

            $('#addNewItem').click(function() {
                var SelecTModelId = $('#ModelSelectId').val();
                var SelecTModelName = $('#ModelSelectId option:selected').text();

                $('#postToReturnBtn').fadeOut();

                $.ajax('{!! url('api/item-code-for-invoices') !!}/'+SelecTModelId, {
                    type: 'GET',  // http method
                    success: function (data, status, xhr) {

                        if(data.item){

                            table.append('<tr class="tr_'+count+'">\n' +
                                '                        <td>'+RawCount+'<input style="display:none" name="row['+count+'][insert]" type="checkbox" checked></td>\n' +
                                '                        <td>\n' +
                                '                            <input style="display:none" type="number" value="'+SelecTModelId+'" name="row['+count+'][model_id]" >\n' +
                                '                            <input readonly type="text" name="row['+count+'][model_name]" value="'+SelecTModelName+'" style="width: 100%">\n' +
                                '                        </td>\n' +
                                '                        <td>\n' +
                                '                            <input onkeyup="calTol('+(count+1)+')" id="qty'+count+'"  type="number" name="row['+count+'][qty]" placeholder="In Stock '+data.qty+' items" style="width: 100%">\n' +
                                '                        </td>\n' +
                                '                        <td>\n' +
                                '                            <input id="price'+count+'"  type="number" readonly name="row['+count+'][unit]" value="'+data.item.unit_price_with_tax+'" style="width: 100%">\n' +
                                '                        </td>\n' +
                                '                        <td>\n' +
                                '                            <input id="tol'+count+'"  type="number" readonly name="row['+count+'][tol]" style="width: 100%">\n' +
                                '                        </td>\n' +
                                '                        <td>\n' +
                                '                            <a style="cursor: pointer" type="button" onclick="rowRemove(\'.tr_'+count+'\')"><i class="fa fa-remove"></i></a>\n' +
                                '                        </td>\n' +
                                '                    <tr/>');

                            count++;
                            RawCount++;

                        }else{
                            alert('Empty Items');
                        }

                    },
                    error: function (jqXhr, textStatus, errorMessage) {
                        alert(errorMessage);
                    }
                });
            });

        });

        function rowRemove(value) {
            $(value).remove();
        }

        function calTol(count) {
            let total = 0;
            let discount = 0;
            let subtotal = 0;
            for(let i=0; i<count; i++){
                $('#tol'+i).val($("#price"+i).val() * $("#qty"+i).val());
                subtotal = subtotal+parseFloat($('#tol'+i).val());
            }
            $('#subtotal').val(subtotal);

            if(parseFloat($('#discountpercentage').val())>0){
                let disamount = subtotal*(parseFloat($('#discountpercentage').val())/100);
                $('#total').val(subtotal-disamount);
            }else{
                $('#total').val(subtotal);
            }
        }

</script>

@endsection