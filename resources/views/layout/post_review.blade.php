@extends('layout.master')
@section('content')
  <div class="container">
    <div class="contact-clean">
    @if(session() -> has('success'))
     <div class= "alert alert-success">
      {{ session() -> get('success')}}
     </div>

    @endif
        <form method="post" action = "{{ url('review/'.$id)}}">
        @csrf
            <h2 class="text-center">Give reviews about Tutor</h2>
          <div class="form-group"><textarea class="form-control" name="review" placeholder="please write about your requirements" rows="8"></textarea></div>
            <div class="form-group"><button class="btn btn-success" type="submit">review</button></div>
        </form>

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
