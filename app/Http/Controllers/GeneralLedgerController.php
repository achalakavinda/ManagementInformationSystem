<?php

namespace App\Http\Controllers;

use App\Models\GeneralLedger\GeneralLedger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GeneralLedgerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $GeneralLedger = DB::table('general_ledgers')
            ->join('g_l_codes','general_ledgers.g_l_code_id','=','g_l_codes.id')
            ->rightJoin('g_l_codes as gl','general_ledgers.g_l_code_id','=','gl.id')
            ->rightJoin('journal_codes as jc','general_ledgers.journal_code_id','=','jc.id')
            ->where('general_ledgers.user_id',\Auth::id())
            ->select('general_ledgers.*','gl.name as gl_code','jc.name as journal_code')->get();

        return view('admin.general_ledger.index',compact('GeneralLedger'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
