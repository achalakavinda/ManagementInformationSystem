<?php

namespace App\Http\Controllers;

use App\Models\JobType;
use App\Models\User;
use Illuminate\Http\Request;

class JobTypeController extends Controller
{

    public function __construct()
    {
        $this->middleware(['permission:'.config('constant.Permission_Job_Type')]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        User::CheckPermission([ config('constant.Permission_Job_Type_Registry') ]);
        $Rows = JobType::all();
        return view('admin.job_type.index',compact('Rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        User::CheckPermission([ config('constant.Permission_Job_Type_Creation') ]);
        return view('admin.job_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::CheckPermission([ config('constant.Permission_Job_Type_Creation') ]);
        $request->validate([
            'jobType' => 'required | min:3',
            'key' => 'required | min:2',
        ]);
        
        try{
            JobType::create([
                'jobType'=>$request->jobType,
                'description'=>$request->description,
                'key'=>$request->key
            ]);
        }catch (\Exception $exception){
            return redirect()->back()->with(['created'=>'error','message'=>$exception->getMessage()]);
        }
        return redirect()->back()->with(['created'=>'success','message'=>'Successfully created!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        User::CheckPermission([ config('constant.Permission_Job_Type_Registry') ]);
        $JobType = JobType::findOrFail($id);
        return view('admin.job_type.edit',compact('JobType'));
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
        User::CheckPermission([ config('constant.Permission_Job_Type_Update') ]);
        $request->validate([
            'jobType' => 'required | min:3',
            'key' => 'required | min:2',
        ]);

        try{
            $JOBTYPE = JobType::find($id);
            if(!empty($JOBTYPE)){
                $JOBTYPE->jobType = $request->jobType;
                $JOBTYPE->description = $request->description;
                $JOBTYPE->key = $request->key;
                $JOBTYPE->save();
            }
        }catch (\Exception $exception){
            return redirect()->back()->with(['created'=>'error','message'=>$exception->getMessage()]);
        }
        return redirect()->back()->with(['created'=>'success','message'=>'Successfully updated!']);
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
