@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Student page</div>
    <div class="card-body">
    
            <div class="card-body">
                <h5 class="card-title">Name:{{ $students->name}}</h5>
                <p class="card-text">Address:{{ $students->address}}</p>
                <p class="card-text">phone:{{ $students->phone}}</p>
</hr>

        </div>
        </div>
        </div>
        </div>

@endsection