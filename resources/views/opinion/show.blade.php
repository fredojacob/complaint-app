@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $opinion->mail}}</div>

                <div class="card-body">
                   

                   <h1>  EL usuario es : {{$opinion->name}}</h1>
                   <h2>  {{ $opinion->complaint}}</h2>>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection