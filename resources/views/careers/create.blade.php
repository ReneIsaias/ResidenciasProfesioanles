@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Create Career</h2></div>

                <div class="card-body">
                    {!! Form::open(['route' => 'careers.store']) !!}

                        @include('careers.partials.form')
                    {!! Form::close() !!}
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
<!-- 
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Create Career</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('careers.store') }}" method="POST">
                    @csrf
                    <div class="container">
                        <h3>Require data</h3>
                        <div class="form-group">
                            <label for="keyCareer">keyCareer</label>
                            <input type="text"
                                class="form-control"
                                id="keyCareer"
                                placeholder="RFC Busines"
                                name="keyCareer"
                                autofocus>                                
                        </div>
                        <div class="form-group">
                            <label for="careerName">Name Career</label>
                            <input type="text"
                                class="form-control"
                                id="careerName"
                                placeholder="Name Busines"
                                name="careerName">
                        </div>
                        <div class="form-group">
                            <label for="careerStatus">Estado Career</label>
                            <input type="number"
                                class="form-control"
                                id="careerStatus"
                                placeholder="Email Busines"
                                name="careerStatus">
                        </div>
                        <hr>
                        <input class="btn btn-primary"
                            type="submit"
                            value="Guardar">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 -->