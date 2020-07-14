@extends('layouts.layout')

@section('content') 
<div class="flex-center position-ref full-height">
    
    <div class="content">
        <div class="title m-b-md">
            People List
        </div>
        
        @foreach ($people as $person)
        <div>
           {{ $person->first_name }} {{ $person->last_name }} - email: {{ $person->email_address }}
        </div>
        
        @endforeach
    </div>
</div>
@endsection

