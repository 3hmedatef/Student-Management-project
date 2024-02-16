@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Batches</div>
    <div class="card-body">
        <form action="{{url('batches')}}"method="post">
            {{!! csrf_field() !!}}
            <label> Batch name</label> </br>
            <input type="text"name="name"id="name"class="form-control"></br>
            <label>course </label> </br>
            <!-- <input type="text"name="coures_id"id="coures_id"class="form-control"></br> -->
            <select name="coures_id" id="coures_id"class="form-control">
                @foreach($courses as $id=>$name)
                <option value="{{$id}}">{{$name}}</option>
                @endforeach

            </select>


            <label>start date</label> </br>
            <input type="text"name="start_date"id="start_date"class="form-control"></br>
         <input type="submit"value="save"class="btn btn-success"></br>

        </form>

    </div>



</div>
@endsection