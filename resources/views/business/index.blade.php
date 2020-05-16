@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2>List Of Business</h2></div>

                <div class="card-body">
                    <a href="{{ route('busines.create') }}" class="btn btn-primary float-right">Create</a>
                    <br><br>
                    @include('custom.message')
                    <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">rfc</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mision</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">C.P.</th>
                        <th scope="col">Estado</th>
                        <th scope="col">idTitular</th>
                        <th scope="col">idStaff</th>
                        <th scope="col">idCovenant</th>
                        <th scope="col">idTurns</th>
                        <th scope="col">idSector</th>
                        <th colspan="3"></th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($business as $busines)
                            <tr>
                                <th scope="row">{{ $busines->id }}</th>
                                <td>{{ $busines->rfcBusiness }}</td>
                                <td>{{ $busines->nameBusiness }}</td>
                                <td>{{ $busines->emailBusiness }}</td>
                                <td>{{ $busines->misionBusiness }}</td>
                                <td>{{ $busines->addresBusiness }}</td>
                                <td>{{ $busines->phoneBusiness }}</td>
                                <td>{{ $busines->cpBusiness }}</td>
                                <td>{{ $busines->statusBusines }}</td>
                                <td>{{ $busines->id_titulars }}</td>
                                <td>{{ $busines->id_staffs }}</td>
                                <td>{{ $busines->id_covenant }}</td>
                                <td>{{ $busines->id_turns }}</td>
                                <td>{{ $busines->id_sectors }}</td>
                                <td> <a class="btn btn-info" href="{{ route('busines.show',$busines->id) }}">show</a> </td>
                                <td> <a class="btn btn-success" href="{{ route('busines.edit',$busines->id) }}">edit</a> </td>
                                <td> <a class="btn btn-danger" href="{{ route('busines.edit',$busines->id) }}">Delete</a> </td>
                            </tr>
                            @endforeach
                    </tbody>
                    </table>
                    {{ $business->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection