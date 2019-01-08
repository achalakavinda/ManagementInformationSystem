<div class="box-body">

    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('designationType','*Designation Type',['class' => 'control-label']) !!}
            {!! Form::text('designationType',null,['class'=>'form-control','id'=>'designationType','placeholder'=>'Designation Type']) !!}
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('avg_hr_rate','*Avg Hr Rate',['class' => 'control-label']) !!}
            {!! Form::number('avg_hr_rate',null,['class'=>'form-control','id'=>'AvgHrRate','step'=>'0.01']) !!}
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('description','Description',['class' => 'control-label']) !!}
            {!! Form::textarea('description',null,['class'=>'form-control','id'=>'description','placeholder'=>'Description']) !!}
        </div>
    </div>


</div>
<!-- /.box-body -->

<div class="box-footer">
    {!! Form::submit('submit',['class'=>'btn btn-primary']) !!}
</div>