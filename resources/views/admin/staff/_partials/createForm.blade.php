<div class="col-md-6">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Basic Detail Form</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('name','Name*',['class' => 'control-label']) !!}
                        {!! Form::text('name',null,['class'=>'form-control','id'=>'name' , 'placeholder'=>'']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('date_joined','Date Joined',['class' => 'control-label']) !!}
                        {!! Form::date('date_joined',\Carbon\Carbon::now(),['class'=>'form-control','id'=>'dateJoined','required']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('emp_no','*Employee No',['class' => 'control-label']) !!}
                        {!! Form::text('emp_no',null,['class'=>'form-control','id'=>'employeeNo', 'placeholder'=>'']) !!}
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('email','*Email',['class' => 'control-label']) !!}
                        {!! Form::email('email',null,['class'=>'form-control','id'=>'email', 'placeholder'=>'']) !!}
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('nic','*NIC Number',['class' => 'control-label']) !!}
                        {!! Form::text('nic',null,['class'=>'form-control','id'=>'employeeNic' , 'placeholder'=>'']) !!}
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('mobile','Mobile',['class' => 'control-label']) !!}
                        {!! Form::text('mobile',null,['class'=>'form-control','id'=>'mobile']) !!}
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('designation_id','*Designation',['class' => 'control-label']) !!}
                        {!! Form::select('designation_id',$Designations,null,['class'=>'form-control', 'placeholder'=>''])  !!}
                    </div>
                </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Address Detail Form</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body ">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('hometown_district_id','Hometown Districts',['class' => 'control-label']) !!}
                    {!! Form::select('hometown_district_id',$HOMETOWN_DISTRICTS,null,['class'=>'form-control','id'=>'hometownDistrict']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('hometown_city','Hometown City',['class' => 'control-label']) !!}
                    {!! Form::text('hometown_city',null,['class'=>'form-control','id'=>'hometownCity']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('residence','Residence',['class' => 'control-label']) !!}
                    {!! Form::text('residence',null,['class'=>'form-control','id'=>'residence']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('cmb_location_district','Colombo Location',['class' => 'control-label']) !!}
                    {!! Form::select('cmb_location_district',$CM_LOCATION_DISTRICTS,null,['class'=>'form-control','id'=>'cmbLocationDistrict']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('cmb_city','Colombo City',['class' => 'control-label']) !!}
                    {!! Form::text('cmb_city',null,['class'=>'form-control','id'=>'cmbCity', 'placeholder'=>'']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('address','Address',['class' => 'control-label']) !!}
                    {!! Form::text('address',null,['class'=>'form-control','id'=>'address', 'placeholder'=>'']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Advance Form -->
<div class="col-md-6" id="AdvanceForm1" style="display: none">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Extra Detail Form</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body ">
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('user_id','Supervising Member',['class' => 'control-label']) !!}
                    {!! Form::select('user_id',[],null,['class'=>'form-control','id'=>'userId', 'placeholder'=>''])  !!}
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('ca_agree_no','CA Agreement No',['class' => 'control-label']) !!}
                    {!! Form::text('ca_agree_no',null,['class'=>'form-control','id'=>'caAgreeNo' , 'placeholder'=>'']) !!}
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('ca_training','CA Training',['class' => 'control-label']) !!}
                    {!! Form::select('ca_training',$CA_TRAINGINS,null,['class'=>'form-control','id'=>'caTraining', 'placeholder'=>''])  !!}
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('ca_training_period_from','From',['class' => 'control-label']) !!}
                    {!! Form::date('ca_training_period_from',null,['class'=>'form-control','id'=>'caTrainingPeriodFrom', 'placeholder'=>'']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('ca_training_period_to','To',['class' => 'control-label']) !!}
                    {!! Form::date('ca_training_period_to',null,['class'=>'form-control','id'=>'caTrainingPeriodTo', 'placeholder'=>'']) !!}
                </div>
            </div>
        </div>

    </div>
</div>

<div class="col-md-6" id="AdvanceForm2" style="display: none">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">EPF/ETF Detail Form</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body ">
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('epf_no','EPF No',['class' => 'control-label']) !!}
                    {!! Form::text('epf_no',null,['class'=>'form-control','id'=>'epfNo', 'placeholder'=>'']) !!}
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('epf_cost','EPF Cost',['class' => 'control-label']) !!}
                    {!! Form::number('epf_cost',null,['class'=>'form-control','id'=>'epfCost' , 'placeholder'=>'', 'step'=>'0.01']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('etf_cost','ETF Cost',['class' => 'control-label']) !!}
                    {!! Form::number('etf_cost',null,['class'=>'form-control','id'=>'etfCost' , 'placeholder'=>'', 'step'=>'0.01']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('allowance_cost','Allowance Cost',['class' => 'control-label']) !!}
                    {!! Form::number('allowance_cost',null,['class'=>'form-control','id'=>'allowanceCost' , 'placeholder'=>'', 'step'=>'0.01']) !!}
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('gratuity_cost','Gratuity Cost',['class' => 'control-label']) !!}
                    {!! Form::number('gratuity_cost',null,['class'=>'form-control','id'=>'gratuityCost' , 'placeholder'=>'', 'step'=>'0.01']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('other_cost','Other Cost',['class' => 'control-label']) !!}
                    {!! Form::number('other_cost',null,['class'=>'form-control','id'=>'otherCost' , 'placeholder'=>'', 'step'=>'0.01']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Salary Detail Form</h3>
        </div>
        <!-- /.box-header -->

        <div class="box-body ">
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('basic_sal','*Basic Salary',['class' => 'control-label']) !!}
                    {!! Form::number('basic_sal',null,['class'=>'form-control','id'=>'basicSalary', 'placeholder'=>'', 'step'=>'0.01']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('cost','*Cost',['class' => 'control-label']) !!}
                    {!! Form::number('cost',null,['class'=>'form-control','id'=>'cost' , 'placeholder'=>'', 'step'=>'0.01']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('hr_rates','*Hourly Rate',['class' => 'control-label']) !!}
                    {!! Form::number('hr_rates',null,['class'=>'form-control','id'=>'hourlyRate' , 'placeholder'=>'', 'step'=>'0.01']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('hr_billing_rates','Hourly Billing Rate',['class' => 'control-label']) !!}
                    {!! Form::number('hr_billing_rates',null,['class'=>'form-control','id'=>'hrBillingRates' , 'placeholder'=>'', 'step'=>'0.01']) !!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::button('Generate',['class'=>'form-control btn btn-primary','id'=>'GenerateBtn']) !!}
                </div>
            </div>
    </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-app pull-right"><i style="color: #00a157" class="fa fa-save"></i> Save </button>
        </div>
    </div>
    <!-- /.box -->
</div>
