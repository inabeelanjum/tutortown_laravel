@extends('layout.master')
@section('head')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
@endsection

@section('content')
<hr>

<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1></h1></div>
    </div>
    @if(session() -> has('success'))
     <div class= "alert alert-success">
      {{ session() -> get('success')}}
     </div>

    @endif
    <div class="row">
  		<!--/col-3-->
    	<div class="col-sm-9">    
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="{{ url('editpro')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                  <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file"  name="file" class="text-center center-block file-upload">
      </div></hr><br>
                   </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="about"><h4>About</h4></label>
                             <textarea class="form-control" name="about" placeholder="please write about your education and achievements" rows="6"></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                          
                      <div class="col-xs-6">
                              <label for="location"><h4>Location</h4></label>
                             <textarea class="form-control" name="location" placeholder="please write about yourlocation" rows="6"></textarea>
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="charges"><h4>charges</h4></label>
                              <input type="text" class="form-control" name="charges" id="charges" placeholder="enter charges per hour in rupees" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="subject1"><h4>subject 1</h4></label>
                              <input type="text" class="form-control" name="subj1"  placeholder="enter subject 1 here" title="enter subject.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                      <div class="col-xs-6">
                              <label for="subject1"><h4>subject 2</h4></label>
                              <input type="text" class="form-control" name="subj2"  placeholder="enter subject 2 here" title="enter subject.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="subject3"><h4>subject 3</h4></label>
                              <input type="text" class="form-control" name="subj3"  placeholder="enter subject 3 here" title="enter subject.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                      <div class="col-xs-6">
                              <label for="subject4"><h4>subject 4</h4></label>
                              <input type="text" class="form-control" name="subj4"  placeholder="enter subject 4 here" title="enter subject.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="subject5"><h4>subject 5</h4></label>
                              <input type="text" class="form-control" name="subj5"  placeholder="enter subject 5 here" title="enter subject.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                      <div class="col-xs-6">
                              <label for="subject6"><h4>subject 6</h4></label>
                              <input type="text" class="form-control" name="subj6"  placeholder="enter subject 6 here" title="enter subject.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              
                            	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
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
              	</form>
              
              <hr>   
           
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                                                      

@endsection