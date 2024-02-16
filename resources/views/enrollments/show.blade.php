@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Batches </div>
    <div class="card-body">
    
            <div class="card-body">
                <h5 class="card-title">Enrollment Number:{{ $enrollments->enroll_on}}</h5>
                <p class="card-text">Batch:{{ $enrollments->batch_id}}</p>
                <p class="card-text">student:{{ $enrollments->student_id}}</p>
                <p class="card-text">Join_Date:{{ $enrollments->join_date}}</p>
                <p class="card-text">fee:{{ $enrollments->fee}}</p>
</hr>

        </div>
        </div>
        </div>
        </div>

@endsection