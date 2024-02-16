@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Payments</div>
    <div class="card-body">
        <form action="{{url('batches')}}"method="post">
            {{!! csrf_field() !!}}
            <label> Enrollment No</label> </br>
        
            <select name="enrollment_id" id="enrollment_id"class="form-control">
                @foreach($enrollments as $id => $enroll_on)
                <option value="{{ $id }}">{{$enroll_on}}</option>
                @endforeach

            </select>
            <label>paid Date </label> </br>
              <!-- <input type="text"name="coures_id"id="coures_id"class="form-control"></br> -->
            <input type="text"name="paid_date"id="paid_date"class="form-control"></br>
          


            <label>Amount</label> </br>
            <input type="text"name="amount"id="amount"class="form-control"></br>

         <input type="submit"value="save"class="btn btn-success"></br>

        </form>

    </div>



</div>
@endsection