@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Edit page</div>
    <div class="card-body">
        <form action="{{url('students/'.$students->id)}}"method="post">
            {{!! csrf_field() !!}}
            @method('PATCH')
            <input type="hidden"name="id"id="id"value="{{ $students->id}}"id="id"/>
            <label>name</label> </br>
            <input type="text"name="name"id="name"value="{{ $students->name}}"class="form-control"></br>
            <label>Address</label> </br>
            <input type="text"name="syllabus"id="syllabus"value="{{ $students->syllabus}}"class="form-control"></br>
            <label>phone</label> </br>
            <input type="text"name="phone"id="phone"value="{{ $students->phone}}"class="form-control"></br>
         <input type="submit"value="update"class="btn btn-success"></br>

        </form>

    </div>



</div>
@endsection