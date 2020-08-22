<?php

namespace App\Http\Controllers\Ims;

use App\Models\CompanyDivision;
use App\Models\Ims\Invoice;
use App\Models\Ims\InvoiceItem;
use App\Models\Ims\ItemCode;
use App\Models\Ims\Stock;
use App\Models\Ims\StockItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public $Company_Division_id = 1;

    public $CompanyDivision;

    public function __construct()
    {
        $this->CompanyDivision = CompanyDivision::get()->first();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Items = Invoice::all();
        return view('admin.ims.invoice.index',compact(['Items']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ims.invoice.forms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'row' => 'required',
            'row.*.model_id' => 'required',
            'row.*.model_name' => 'required',
            'row.*.qty' => 'required',
        ]);

        $DiscountPercentage = $request->discount_percentage;
        $date = $request->order_date?$request->order_date:Carbon::now();

        $Invoice = Invoice::create([
            'company_division_id'=>$this->CompanyDivision->id,
            'customer_id'=>$request->customer_id,
            'code'=>'INV',
            'date'=>$date,
            'order_date'=>$date,
            'dispatched_date'=>$date,
            'purchase_order'=>$request->purchase_order,
            'delivery_address'=>$request->delivery_address,
            'remarks'=>$request->special_remarks,
            'userdef1' => $request->courier_service
        ]);

        try{

            $Stock = null;
            $TotalAmount = 0;
            $TotalSum = 0;
            $TotalDiscount = $DiscountPercentage;

            $Stock = Stock::create([
                'code'=>'Batch',
                'company_division_id'=>$this->CompanyDivision->id,
                'company_id'=>1,
                'invoice_id'=>$Invoice->id
            ]);


            $Stock->code = "Inv-".Carbon::now()->year."-".Carbon::now()->month."-".Carbon::now()->day."-000".$Stock->id;
            $Stock->save();

            foreach ($request->row as $item)
            {

                $Model = ItemCode::find($item['model_id']);

                    $Stock_Item = StockItem::create([
                        'stock_id'=>$Stock->id,
                        'invoice_item_id'=>$Invoice->id,
                        'item_code_id'=>$Model->id,
                        'item_code'=>$Model->name,
                        'item_unit_cost_from_table'=>$Model->unit_cost,
                        'unit_price'=>$item['unit_price'],
                        'created_qty'=>-$item['qty'],//to identify the initial qty for bath item
                        'tol_qty'=>-$item['qty'],
                        'total'=>-$item['qty']*$item['unit_price'],
                        'company_division_id'=>$this->CompanyDivision->id,
                        'company_id'=>1,
                    ]);

                    InvoiceItem::create([
                        'invoice_id'=>$Invoice->id,
                        'item_code_id'=>$Model->id,
                        'stock_item_id'=>$Stock_Item->id,
                        'item_unit_cost_from_table'=>$Model->unit_cost,
                        'unit_price'=>$item['unit_price'],
                        'qty'=>$item['qty'],
                        'total'=>$item['qty']*$item['unit_price'],
                        'company_division_id'=>$this->Company_Division_id
                    ]);

                    $TotalAmount = $TotalAmount + ( $item['qty'] * $item['unit_price']) ;
            }

            if($DiscountPercentage>0){
                $TotalSum = $TotalAmount - ($TotalAmount*($DiscountPercentage/100));
            }else{
                $TotalSum = $TotalAmount;
                $DiscountPercentage = 0;
            }

            $Invoice->code = "Inv-".Carbon::now()->year."-".Carbon::now()->month."-".Carbon::now()->day."-000".$Invoice->id."C".$Invoice->customer_id;
            $Invoice->amount = $TotalAmount;
            $Invoice->discount = $DiscountPercentage;
            $Invoice->total = $TotalSum;
            $Invoice->save();

            $Stock->total = -$TotalSum;
            $Stock->save();

        } catch (\Exception $exception){
            $Invoice->delete();
            dd($exception->getMessage());
            return redirect(url('ims/invoice/create'))->with(['error'=>$exception->getMessage()]);
        }

        return redirect(url('ims/invoice/'.$Invoice->id));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Invoice = Invoice::findOrFail($id);
        return view('admin.ims.invoice.show',compact('Invoice'));
    }

    public function print($id)
    {
        $Invoice = Invoice::findOrFail($id);
        return view('admin.ims..invoice.print',compact('Invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}