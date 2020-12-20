@extends('layout.master')
@section('content')
  <div class="container">
    <div class="contact-clean">
    @if(session() -> has('success'))
     <div class= "alert alert-success">
      {{ session() -> get('success')}}
     </div>

    @endif
    <div class="row">
                
                
                </div>

        <form method="post" action = "{{ url('review/'.$id)}}">
        @csrf
            <h2 class="text-center">Give reviews about Tutor</h2>
            <div class="" style="font-size: 2em;">
                    <div id="review" name ="star"></div>
                </div>

                <div class="">
                    <label for="starsInput"></label>
                    <input type="text" name ='star' readonly id="starsInput" class="form-control form-control-sm"> 
           </div>
           <br>
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

        <script>
    $("#review").rating({
        "value": 2,
        "click": function (e) {
            console.log(e);
            $("#starsInput").val(e.stars);
        }
    });

   
</script>
    </div>
  </div>

    @endsection
