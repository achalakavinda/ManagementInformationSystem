<?php

namespace App\Http\Controllers\Ims;

use App\Models\CompanyDivision;
use App\Models\Ims\ItemCode;
use App\Models\Ims\Stock;
use App\Models\Ims\StockItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StockController extends Controller
{
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
        $Stocks = \DB::table('stock_items')
            ->select(\DB::raw('sum(stock_items.open_qty) as open_qty, sum(stock_items.qty) as qty , sum(stock_items.tol_qty) as tol_qty,stock_items.item_code_id'))
            ->groupBy('stock_items.item_code_id')
            ->get();
        return view('admin.ims.stock.index',compact(['Stocks']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ims.stock.create');
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
            'row'=>'required'
        ]);

        $Stock = Stock::create(['name'=>'Batch','company_division_id'=>1,'company_id'=>1]);
        $Stock->name = "Batch :".Carbon::now()->year."|".Carbon::now()->month."|".Carbon::now()->day."-000".$Stock->id;
        $Stock->save();

        foreach ($request->row as $item)
        {
            try {
                if( $item['model_id']>0 && $item['qty']>0)
                {
                    $Model = ItemCode::find($item['model_id']);
                    if($Model){
                        $Stock_Item = StockItem::create([
                            'stock_id'=>$Stock->id,
                            'brand_id'=>$Model->brand_id,
                            'item_code_id'=>$Model->id,
                            'item_code'=>$Model->name,
                            'unit_price'=>$Model->unit_cost,
                            'qty'=>$item['qty'],
                            'open_qty'=>$item['qty'],//to identify the initial qty for bath item
                            'tol_qty'=>$item['qty'],
                            'company_division_id'=>$this->CompanyDivision->id,
                            'company_id'=>1,
                        ]);
                    }
                }
            }catch (\Exception $e){

            }
        }

//        //check for a existing stock item
//        $Stock_Item = StockItem::where('item_code_id',$request->model_id)->first();
//        $Model = ItemCode::find($request->model_id);
//        $Stock = null;
//
//        if($Stock_Item == null){//if no item in stock create a stock and stock item
//            $Stock = Stock::create(['name'=>'Batch','company_division_id'=>1,'company_id'=>1]);
//            $Stock->name = "Batch :".Carbon::now()->year."|".Carbon::now()->month."|".Carbon::now()->day."-000".$Stock->id;
//            $Stock->save();
//
//            $Stock_Item = StockItem::create([
//                'stock_id'=>$Stock->id,
//                'brand_id'=>$Model->brand_id,
//                'item_code_id'=>$Model->id,
//                'item_code'=>$Model->name,
//                'unit_price'=>$Model->unit_cost,
//                'qty'=>$request->qty,
//                'company_division_id'=>$this->CompanyDivision->id,
//                'company_id'=>1,
//            ]);
//
//            $Stock_Item->tol_qty = $request->qty+$Stock_Item->open_qty;
//            $Stock_Item->save();
//
//
//        }else{
//            //create a new stock item record under the parent stock id
//            //if unit price are the same update the stock item quantities only
//            $Stock_Item_Same_Unit = StockItem::where(['item_code_id'=>$request->model_id,'unit_price'=>$Model->unit_cost,'company_division_id'=>$this->CompanyDivision->id])->first();
//            //if item exist with same unit price update the tuple or else create new tuple
//            if($Stock_Item_Same_Unit == null)
//            {
//                StockItem::create([
//                    'stock_id'=>$Stock_Item->stock_id,
//                    'brand_id'=>$Model->brand_id,
//                    'item_code_id'=>$Model->id,
//                    'unit_price'=>$Model->unit_cost,
//                    'qty'=>$request->qty,
//                    'open_qty'=>0,
//                    'tol_qty'=>$request->qty,
//                    'company_division_id'=>$this->CompanyDivision->id,
//                ]);
//            }else{
//                $SUM_TOL_QTY = $Stock_Item_Same_Unit->tol_qty;
//                $SUM_QTY = $Stock_Item_Same_Unit->qty;
//                $Stock_Item_Same_Unit->tol_qty = $SUM_TOL_QTY+$request->qty;
//                $Stock_Item_Same_Unit->qty = $SUM_QTY+$request->qty;
//                $Stock_Item_Same_Unit->save();
//            }
//        }

        return redirect('ims/stock');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
