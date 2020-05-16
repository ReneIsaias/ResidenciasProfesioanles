@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Edit Career</h2></div>

                <div class="card-body">
                    {!! Form::model($career, ['route' => ['careers.update', $career->id],
                    'method' => 'PUT']) !!}

                        @include('careers.partials.form')
                    {!! Form::close() !!}
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection