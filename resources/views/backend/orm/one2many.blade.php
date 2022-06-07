@extends('backend.master')

@section('title')
One to Many relationship
@endsection


@section('body')
<div class="container">
    <div class="row">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Blog Title</th>
      <th scope="col">Blog Comments</th>
    </tr>
  </thead>
  <tbody>
      @php($i=1)
      @foreach ($data as $data )
          
    <tr>
      <th scope="row">{{$i++ }}</th>
      <td>{{ $data->blog_title }}</td>
      <td>
          @foreach ($data->comments as $comment )
              {{ $comment->comment_message }}
          @endforeach
      </td>    
    </tr>
     @endforeach
  </tbody>
</table>
    </div>
</div>
@endsection
