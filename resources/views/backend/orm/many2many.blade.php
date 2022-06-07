@extends('backend.master')

@section('title')
Many to Many relationship
@endsection


@section('body')
<div class="container">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Brand Name</th>
                </tr>
            </thead>
            <tbody>
                @php($i=1)
                @foreach ($data as $data )

                <tr>
                    <th scope="row">{{$i++ }}</th>
                    <td>{{ $data->product_name }}</td>

                    <td>
                        @foreach ( $data->brands as $brand)
                        {{ $brand->brand_name }}
                        @endforeach
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection