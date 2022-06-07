@extends('backend.master')
@section('title')
Has One Through Relationship
@endsection


@section('body')
<div class="container">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Mechanic Name</th>
                    <th scope="col">Car Name</th>
                    <th scope="col">Owner Name</th>
                </tr>
            </thead>
            <tbody>
                @php($i=1)
                @foreach ($data as $data )

                <tr>
                    <th scope="row">{{$i++ }}</th>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->car->model }}</td>
                    <td>{{ $data->owner->name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection