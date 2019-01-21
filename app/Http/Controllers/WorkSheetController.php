<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use App\Models\WorkCodes;
use App\Models\WorkSheet;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WorkSheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $WorkSheet = WorkSheet::all();
        return view('admin.work_sheet.index',compact('WorkSheet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.work_sheet.create');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the post request body
        $request->validate([
            'work_code_id'=> 'required',
            'user_id' => 'required',
            'date' => 'required',
            'row' => 'required'
        ]);
        $ROWS = $request->row;

        //check for the working states
        //also helpful to calculate employee leave hours
        $WorkCode = WorkCodes::findOrFail($request->work_code_id);
        $Worked = $WorkCode->worked;
        //date time convert to sql format
        $DATE_VAR = date_format(date_create($request->date),"Y-m-d");

        //loop the row array and insert row into worksheet table
        foreach ($ROWS as $row)
        {
            $diffInMin = $this->timeDiff($row['from'],$row['to']);
            $work_hr = $this->convertToHoursMins($diffInMin);
            $actual_work_hr = $work_hr;

            $startTime = Carbon::parse($row['from']);
            $finishTime = Carbon::parse($row['to']);

            //this is true if the start time is greater than end time
            if($startTime->greaterThan($finishTime)){
                return redirect()->back()->withErrors(['Submit start time is greater than finish time']);
            }

            //get the submit user information
            $USER = User::findOrFail($request->user_id);
            //Worksheet get min from to max To
            $minFromTime = null;
            $maxToTime = null;
            $WorkSheetTuples = WorkSheet::where(['user_id'=>$request->user_id,'date'=>$DATE_VAR])->get();
            //check current work hrs
            $CurrentNoOfWork = 0;

            foreach ($WorkSheetTuples as $tuple){
                $from = $tuple->from;
                $to = $tuple->to;
                if($minFromTime == null)
                {
                    $minFromTime=$from;
                }else{
                    if($minFromTime>$from){
                        $minFromTime = $from;
                    }
                }
                if($maxToTime == null)
                {
                    $maxToTime=$to;
                }else{
                    if($maxToTime<$to){
                        $maxToTime = $to;
                    }
                }

                //actual work hrs related to number of work hrs
                $CurrentNoOfWork = $CurrentNoOfWork +$tuple->actual_work_hrs;

            }

            if(!$WorkSheetTuples->isEmpty()){
                //Recode check

                $from = Carbon::parse($minFromTime);
                $to = Carbon::parse($maxToTime);
                $postFrom = Carbon::parse($row['from']);
                $postTo = Carbon::parse($row['to']);

                ///sequence new time must greater than previous submit value
                if($postFrom->lessThan($to)){
                    return redirect()->back()->withErrors(['Time sequence overlap']);
                }

            }


            if($work_hr>8 || $CurrentNoOfWork>8){
                $work_hr = 8;
                if($CurrentNoOfWork>8){
                    $work_hr = 0;
                }
            }//set the working hr to 8

            //check the work state
            if($Worked){
                WorkSheet::create([
                    'date'=>$request->date,
                    'customer_id'=>$row['company'],
                    'user_id'=>$request->user_id,
                    'project_id'=>$request->project_id,
                    'job_type_id'=>$row['job_type_id'],
                    'work_code_id'=>$WorkCode->id,
                    'work_code'=>$WorkCode->name,
                    'worked'=>$Worked,
                    'from'=>$row['from'],
                    'to'=>$row['to'],
                    'work_hrs'=>$work_hr,
                    'leave_hrs'=>0,
                    'hr_rate'=>$USER->hr_rates,
                    'hr_cost'=>$USER->hr_rates*$work_hr,
                    'actual_work_hrs'=>$actual_work_hr,//this value is directly take into number of work hrs validation
                    'actual_hr_cost'=>$USER->hr_rates*$actual_work_hr,
                    'extra_work_hrs'=>$actual_work_hr - $work_hr,
                    'remark'=>$row['remark']
                ]);

                if($CurrentNoOfWork<=8){
                    //update the time report project
                    $PJ = Project::find($request->project_id);
                    if($PJ) {
                        $PJ->actual_cost = $PJ->actual_cost + ($USER->hr_rates*$work_hr);
                        $PJ->actual_number_of_hrs = $PJ->actual_number_of_hrs + $work_hr;
                        $PJ->actual_cost_by_work = $PJ->actual_cost_by_work + ($USER->hr_rates*$work_hr);
                        $PJ->save();
                    }
                }
            }else{
                WorkSheet::create([
                    'date'=>$request->date,
                    'customer_id'=>null,
                    'user_id'=>$request->user_id,
                    'project_id'=>null,
                    'job_type_id'=>null,
                    'work_code_id'=>$WorkCode->id,
                    'work_code'=>$WorkCode->name,
                    'worked'=>$Worked,
                    'from'=>$row['from'],
                    'to'=>$row['to'],
                    'work_hrs'=>0,
                    'leave_hrs'=>$work_hr,
                    'actual_work_hrs'=>0,//this value is directly take into number of work hrs validation
                    'hr_rate'=>0,
                    'hr_cost'=>0,
                    'actual_hr_cost'=>0,
                    'extra_work_hrs'=>0,
                    'remark'=>$row['remark']
                ]);
            }
        }

        return redirect()->back()->with('created');

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

    /**
     * calculate the time difference.
     *
     * @param  int  $from
     * @param  int  $to
     * @return float
     */
    public function timeDiff($from,$to)
    {
        $startTime = Carbon::parse($to);
        $finishTime = Carbon::parse($from);
        return $totalDuration = $finishTime->diffInMinutes($startTime);
    }

    function convertToHoursMins($time)
    {
        if ($time < 1) {
            return;
        }
        $hours = $time / 60;
        return $hours;
    }
}
