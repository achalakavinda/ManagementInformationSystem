<div class="box-body">

    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('name','Name*',['class' => 'control-label']) !!}
            {!! Form::text('name',null,['class'=>'form-control','id'=>'name','placeholder'=>'Permission Type','required' => '']) !!}
        </div>
    </div>


</div>
<!-- /.box-body -->

<div class="box-footer">
    {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
</div>