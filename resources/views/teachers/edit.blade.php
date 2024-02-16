@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Edit page</div>
    <div class="card-body">
        <form action="{{url('teachers/'.$teachers->id)}}"method="post">
            {{!! csrf_field() !!}}
            @method('PATCH')
            <input type="hidden"name="id"id="id"value="{{ $teachers->id}}"id="id"/>
            <label>name</label> </br>
            <input type="text"name="name"id="name"value="{{ $teachers->name}}"class="form-control"></br>
            <label>Address</label> </br>
            <input type="text"name="address"id="address"value="{{ $teachers->address}}"class="form-control"></br>
            <label>phone</label> </br>
            <input type="text"name="phone"id="phone"value="{{ $teachers->phone}}"class="form-control"></br>
         <input type="submit"value="update"class="btn btn-success"></br>

        </form>

    </div>



</div>
@endsection