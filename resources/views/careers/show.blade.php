@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Career Datails</h2></div>

                <div class="card-body">
                    <p><strong>Key Career</strong> {{ $career -> keyCareer }} </p>
                    <p><strong>Name Career </strong> {{ $career -> careerName }} </p>
                    <p><strong>Status Career </strong> {{ $career -> careerStatus }} </p>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection