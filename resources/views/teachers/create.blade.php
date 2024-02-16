@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Teachers page</div>
    <div class="card-body">
        <form action="{{url('teachers')}}"method="post">
            {{!! csrf_field() !!}}
            <label>name</label> </br>
            <input type="text"name="name"id="name"class="form-control"></br>
            <label>Address</label> </br>
            <input type="text"name="address"id="address"class="form-control"></br>
            <label>phone</label> </br>
            <input type="text"name="phone"id="phone"class="form-control"></br>
         <input type="submit"value="save"class="btn btn-success"></br>

        </form>

    </div>



</div>
@endsection