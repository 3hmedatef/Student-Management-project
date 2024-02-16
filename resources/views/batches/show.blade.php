@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Batches </div>
    <div class="card-body">
    
            <div class="card-body">
                <h5 class="card-title">Name:{{ $batches->name}}</h5>
                <p class="card-text">course:{{ $batches->coures->name}}</p>
                <p class="card-text">start date:{{ $batches->start_date}}</p>
</hr>

        </div>
        </div>
        </div>
        </div>

@endsection