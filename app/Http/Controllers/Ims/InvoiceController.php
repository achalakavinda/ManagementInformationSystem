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
            'order_date' => 'required',
            'company_vat_no' => 'required',
            'dispatched_date' => 'required',
            'customer_id' => 'required',
            'row' => 'required',
            'row.*.model_id' => 'required',
            'row.*.model_name' => 'required',
            'row.*.qty' => 'required',
        ]);

        $DiscountPercentage = $request->discount_percentage;

        $Invoice = Invoice::create([
            'order_date'=>$request->order_date,
            'purchase_order'=>$request->purchase_order,
            'invoice_no'=>$request->invoice_no,
            'dispatched_date'=>$request->dispatched_date,
            'delivery_method_id'=>1,
            'delivery_address'=>$request->delivery_address,
            'customer_id'=>$request->customer_id,
            'customer_detail'=>$request->customer_detail,
            'special_remarks'=>$request->special_remarks,
            'company_division_id'=>$this->CompanyDivision->id,
        ]);

        try{

            $Stock = null;
            $TotalAmount = 0;
            $TotalSum = 0;
            $TotalDiscount = $DiscountPercentage;

            $Stock = Stock::create([
                'name'=>'Batch',
                'company_division_id'=>1,
                'company_id'=>1,
                'invoice_id'=>$Invoice->id
            ]);


            $Stock->name = "Invoice :".Carbon::now()->year."|".Carbon::now()->month."|".Carbon::now()->day."-000".$Stock->id;
            $Stock->save();

            foreach ($request->row as $item)
            {

                $Model = ItemCode::find($item['model_id']);

                    $Stock_Item = StockItem::create([
                        'stock_id'=>$Stock->id,
                        'brand_id'=>$Model->brand_id,
                        'invoice_id'=>$Invoice->id,
                        'item_code_id'=>$Model->id,
                        'item_code'=>$Model->name,
                        'unit_price'=>$item['unit'],
                        'created_qty'=>-$item['qty'],//to identify the initial qty for bath item
                        'tol_qty'=>-$item['qty'],
                        'company_division_id'=>$this->CompanyDivision->id,
                        'company_id'=>1,
                    ]);

                    InvoiceItem::create([
                        'invoice_id'=>$Invoice->id,
                        'brand_id'=>$Model->brand_id,
                        'item_code_id'=>$Model->id,
                        'stock_item_id'=>$Stock_Item->id,
                        'price'=>$item['unit'],
                        'qty'=>$item['qty'],
                        'value'=>$item['qty']*$item['unit'],
                        'remarks'=>'k',
                        'company_division_id'=>$this->Company_Division_id
                    ]);

                    $TotalAmount = $TotalAmount + ( $item['qty'] * $item['unit']) ;
            }

            if($DiscountPercentage!=null){
                $TotalSum = $TotalAmount - ($TotalAmount*($DiscountPercentage/100));
            }else{
                $TotalSum = $TotalAmount;
                $DiscountPercentage = 0;
            }

            $Invoice->amount = $TotalAmount;
            $Invoice->discount = $DiscountPercentage;
            $Invoice->total = $TotalSum;
            $Invoice->save();

        } catch (\Exception $exception){
            $Invoice->delete();
            dd($exception->getMessage());
            return redirect(url('ims/invoice/create'))->with(['error'=>$exception->getMessage()]);
        }

        return redirect(url('ims/invoice').'/'.$Invoice->id.'/print');

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
        return view('admin.invoice.show',compact('Invoice'));
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
