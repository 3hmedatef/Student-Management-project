@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Edit page</div>
    <div class="card-body">
        <form action="{{url('batches/'.$batches->id)}}"method="post">
            {{!! csrf_field() !!}}
            @method('PATCH')
            <input type="hidden"name="id"id="id"value="{{ $batches->id}}"id="id"/>
            <label>name</label> </br>
            <input type="text"name="name"id="name"value="{{ $batches->name}}"class="form-control"></br>
            <label>course</label> </br>
            <input type="text"name="coures_id"id="address"value="{{ $batches->coures->name}}"class="form-control"></br>
            <label>start date</label> </br>
            <input type="text"name="start_date"id="duration"value="{{ $batches->start_date}}"class="form-control"></br>
         <input type="submit"value="update"class="btn btn-success"></br>

        </form>

    </div>



</div>
@endsection