@extends('backend.master')

@section('title')
One to One relationship
@endsection


@section('body')
<div class="container">
    <div class="row">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Student Name</th>
      <th scope="col">Student Address</th>
      <th scope="col">Student Phone Number</th>
    </tr>
  </thead>
  <tbody>
      @php($i=1)
      @foreach ($studentInfos as $studentInfo )
          
    <tr>
      <th scope="row">{{$i++ }}</th>
      <td>{{ $studentInfo->student_name }}</td>
      <td>{{ $studentInfo->student_address }}</td>
      <td>{{ $studentInfo->phone->phone_name }}</td>     <!-- phone name comes from relationship --> 
    </tr>
     @endforeach
  </tbody>
</table>
    </div>
</div>
@endsection
