<?php
$Customers = \App\Models\Customer::all()->pluck('name','id');
$JobTypes = \App\Models\JobType::all()->pluck('jobType','id');
$Employess = \App\Models\User::where('designation_id','!=',-999)->pluck('name','id');

$PROJECTJOBTYPE = \App\Models\ProjectJobType::where('project_id',$Project->id)->get();

$PROJECTEMPLOYEES = \App\Models\ProjectEmployee::where('project_id',$Project->id)->get();

$WORKSHEETS =  DB::table('work_sheets')->select(DB::raw('sum(hr_cost) as cost,sum(work_hrs) as hrs,sum(hr_rate) as rate, user_id'))->where('project_id',$Project->id)->groupBy('user_id')->get();

?>

<div class="box-body">

    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('Code') !!}
            {!! Form::text('code',$Project->code,['class'=>'form-control','id'=>'code','placeholder'=>'Code','disabled']) !!}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('Company') !!}
            {!! Form::select('customer_id',$Customers,$Project->customer_id,['class'=>'form-control','id'=>'company_id','disabled']) !!}
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('Number of Hrs') !!}
            {!! Form::text('number_of_hrs',$Project->number_of_hrs,['class'=>'form-control','id'=>'number_of_hrs','placeholder'=>'Number of Hrs','disabled']) !!}
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('Budget Cost') !!}
            {!! Form::text('budget_cost',$Project->budget_cost,['class'=>'form-control','id'=>'budget_cost','placeholder'=>'Budget Cost','disabled']) !!}
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('Quoted Price') !!}
            {!! Form::text('qouted_price',$Project->quoted_price,['class'=>'form-control','id'=>'qouted_price','placeholder'=>'Qouted Price','disabled']) !!}
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('Actual Cost') !!}
            {!! Form::text('actual_cost',$Project->actual_cost,['class'=>'form-control','id'=>'actual_cost','placeholder'=>'Actual Cost','disabled']) !!}
        </div>
    </div>

</div>
<!-- /.box-body -->

<div class="box-header with-border">
    <h4 class="box-title">Assign Jobs</h4>
</div>

<div class="box-body">
    <div class="col-md-12">
        <table class="table table-responsive table-bordered table-striped">
            <?php
            $count =1;
                foreach ($PROJECTJOBTYPE as $val){
                    $JBTYPE =  \App\Models\JobType::find($val->jop_type_id);
                    echo '<tr style="padding-left: 20px"><th>'.$count.',  '.$JBTYPE->jobType.'</th></tr>';
                    $count++;
                }
            ?>

        </table>
    </div>
</div>
<!-- /.box-body -->


<div class="box-header with-border">
    <h4 class="box-title">Assign Employees</h4>
</div>

<div class="box-body">
    <div class="col-md-12">
        <table class="table table-responsive table-bordered table-striped">
            <?php
            $count =1;
            if(!empty($PROJECTEMPLOYEES)){
                foreach ($PROJECTEMPLOYEES as $val){
                    $user =  \App\Models\User::find($val->user_id);
                    echo '<tr style="padding-left: 20px"><th>'.$count.',  '.$user->name.'</th></tr>';
                    $count++;
                }
            }
            ?>

        </table>
    </div>
    <div class="col-md-12">
        <table class="table table-responsive table-bordered table-striped">
            <tbody>
            <tr>
                <th>Name</th>
                <th>Hour Rate</th>
                <th>Work Hours</th>
                <th>Cost</th>
            </tr>
            <?php
                    $TOLHR=0;
                    $TOLWH=0;
                    $TOLCOST=0;

            foreach ($WORKSHEETS as $worksheet){
                $USERNAME = \App\Models\User::find($worksheet->user_id);
                echo '<tr>
                        <td>'.$USERNAME->name.'</td>
                        <td>'.$worksheet->rate.'</td>
                        <td>'.$worksheet->hrs.'</td>
                        <td>'.$worksheet->cost.'</td>
                     </tr>';

                $TOLCOST = $TOLCOST+$worksheet->cost;
                $TOLWH   = $TOLWH+$worksheet->hrs;
                $TOLHR = $TOLHR+$worksheet->rate;

            }
            echo '<tr>
                        <th>Total</th>
                        <th>'.$TOLHR.'</th>
                        <th>'.$TOLWH.'</th>
                        <th>'.$TOLCOST.'</th>
                     </tr>';

            ?>
            </tbody>
        </table>


    </div>
</div>
<!-- /.box-body -->