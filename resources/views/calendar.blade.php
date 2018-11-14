@extends('layouts.master')

@section('test')
<div class="container">
    <div class="content">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-4 col-md-offset-4">
                    <form action={{ route('calendar.save') }} method="post">
                    @csrf
                    <div class="input-group date #basic_example_1 datePicker">
                        <input type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th "></i></span>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    

    $('#.datePicker').datetimepicker();
</script>

@endsection