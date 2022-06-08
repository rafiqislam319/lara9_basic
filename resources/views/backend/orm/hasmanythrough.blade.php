@extends('backend.master')
@section('title')
    Has Many Through Relationship
@endsection


@section('body')
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Branch Name</th>
                    <th scope="col">Employee Name</th>
                </tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach ($data as $data )

                    <tr>
                        <th scope="row">{{$i++ }}</th>
                        <td>{{ $data->name }}</td>
                        <td>
                            @foreach($data->branches as $branch)
                            {{ $branch->address }}           {{--This value comes from hasMany relation--}}
                            @endforeach
                        </td>

                        <td>
                            @foreach($data->employee as $employee)
                            {{ $employee->employee_name }}         {{--this value comes from hasManyThrough relation--}}
                            @endforeach
                        </td>

                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
