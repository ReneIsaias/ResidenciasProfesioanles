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
                            <label for="rfc">keyCareer</label>
                            <input type="text"
                                class="form-control"
                                id="name"
                                placeholder="RFC Busines"
                                name="name"
                                autofocus>                                
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text"
                                class="form-control"
                                id="slug"
                                placeholder="Name Busines"
                                name="slug">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email"
                                class="form-control"
                                id="slug"
                                placeholder="Email Busines"
                                name="slug">
                        </div>
                        <div class="form-group">
                            <label for="mision">Mision</label>
                            <textarea class="form-control"
                                name="description"
                                id="description"
                                placeholder="Mision Business"
                                rows="3">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control"
                                name="description"
                                id="description"
                                placeholder="Address Business"
                                rows="3">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number"
                                class="form-control"
                                id="slug"
                                placeholder="Phone Busines"
                                name="slug">
                        </div>
                        <div class="form-group">
                            <label for="cp">C.P.</label>
                            <input type="text"
                                class="form-control"
                                id="slug"
                                placeholder="C.P. Busines"
                                name="slug">
                        </div>
                        <hr>
                        <h3>Full Access</h3>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio"
                                id="fullaccessyes"
                                name="full_access"
                                class="custom-control-input">
                            <label class="custom-control-label"
                                for="fullaccessyes"
                                value="yes">
                                Yes
                            </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio"
                                id="fullaccessno"
                                name="full-access"
                                class="custom-control-input">
                            <label class="custom-control-label"
                                for="fullaccessno"
                                value="no"
                                checked>
                                No
                            </label>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection