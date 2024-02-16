@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Teacher page</div>
    <div class="card-body">
    
            <div class="card-body">
                <h5 class="card-title">Name:{{ $teachers->name}}</h5>
                <p class="card-text">Address:{{ $teachers->address}}</p>
                <p class="card-text">phone:{{ $teachers->phone}}</p>
</hr>

        </div>
        </div>
        </div>
        </div>

@endsection