@extends('layout.master')
@section('content')
  <div class="container">
    <div class="contact-clean">
    @if(session() -> has('success'))
     <div class= "alert alert-success">
      {{ session() -> get('success')}}
     </div>

    @endif
        <form method="post" action = "{{ url('report_submit/'.$id)}}">
        @csrf
            <h2 class="text-center">Provide Feedback</h2>
          <div class="form-group"><textarea class="form-control" name="report" placeholder="please write about your requirements" rows="8"></textarea></div>
            <div class="form-group"><button class="btn btn-danger" type="submit">Report</button></div>
        </form>
        @if(session() -> has('fail'))
     <div class= "alert alert-danger">
      {{ session() -> get('fail')}}
     </div>

    @endif

        @if(!$errors -> isempty())
        <div class= "alert alert danger mt-3">
         <ul>
         @foreach($errors->all() as $error)
           <li> {{$error}} </li>
         @endforeach
         </ul>

        </div>


        @endif
    </div>
  </div>
@endsection
