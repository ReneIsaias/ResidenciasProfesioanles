@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2>List Of Careers</h2></div>

                <div class="card-body">
                    <a href="{{ route('careers.create') }}" class="btn btn-primary float-right">Create</a>
                    <br><br>
                    @include('custom.message')
                    <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">keyCareer</th>
                        <th scope="col">Name</th>
                        <th scope="col">Estado</th>
                        <th colspan="3"></th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($careers as $career)
                            <tr>
                                <th scope="row">{{ $career->id }}</th>
                                <td>{{ $career->keyCareer }}</td>
                                <td>{{ $career->careerName }}</td>
                                <td>{{ $career->careerStatus }}</td>
                                <td> <a class="btn btn-info" href="{{ route('careers.show',$career->id) }}">show</a> </td>
                                <td> <a class="btn btn-success" href="{{ route('careers.edit',$career->id) }}">edit</a> </td>
                                <td> <a class="btn btn-danger" href="{{ route('careers.edit',$career->id) }}">Delete</a> </td>
                            </tr>
                            @endforeach
                    </tbody>
                    </table>
                    {{ $careers->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection