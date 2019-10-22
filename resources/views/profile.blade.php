<section>
@extends('layouts.app')
</section>
<section>

@section('content')
</section>
<section>
  <div class="jumbotron jumbotron-fluid">
   <div class="container">
          <div class="row">
            <div class="col-sm-12 col-lg-3">
              <div class="card">
                <div class="card-header" style="width: 100%;"> {{  $user->name}}  Update Your Profile</div>
                {{$user ->email}}
                
               <img src="/images/avatars/{{$user->avatar}}" class="rounded-circle" onclick="openNav()" style=" max-width: 100%; height: auto; float: left;  margin-right: 25px;  cursor: pointer;" id="myImg" >
                    <!--<i class="fab fa-facebook"></i> -->
                    <div class="card-footer">
                       
                        <form enctype="multipart/form-data" action="/profile" method="POST">
                         
                          <input type="file" name="avatar">
                          <input type="hidden" name="_token" value="{{csrf_token() }}">
                          <input type="submit" class="pull-right btn btn-primary btn-sm">
                        </form>
                      </div>
                    </div>
              </div>
           <div class="col-lg-6">
            <div class="card">
               <div class="card-header">
                 
             <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="address">General</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menu1">Address</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menu2">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menu3">photos</a>
              </li>
           </ul>
  </div>
<!-- Tab panes -->
 <div class="card-body">
<div class="tab-content">
  <div class="tab-pane container active" id="home">


    

  </div>
  
  <div class="tab-pane container fade" id="menu1">Ram</div>
  <div class="tab-pane container fade" id="menu2">Marasini</div>
   <div class="tab-pane container fade" id="menu3">
     Upload Your photos
   </div>
</div>

                
                  </div>
                  <div class="card-footer">
                  By Uuuuggghhh.com
                  </div>
              </div>
            </div>

    <div class="col-lg-3">
     <div class="card">
        <div class="card-header">
          Featured
        </div>
   <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
       <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
       <a href="#" class="btn btn-primary">Go somewhere</a>
   </div>
</div>
</div>


    
   	       
  </div>
    <!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
</div>

<!-- model for crud -->
<div class="modal fade" id="ajax-crud-modal" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="postCrudModal"></h4>
    </div>
    <div class="modal-body">
        <form id="postForm" name="postForm" class="form-horizontal">
           <input type="hidden" name="post_id" id="post_id">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="title" name="title" value="" required="">
                </div>
            </div>
 
            <div class="form-group">
                <label class="col-sm-2 control-label">Body</label>
                <div class="col-sm-12">
                    <input class="form-control" id="body" name="body" value="" required="">
                </div>
            </div>
            <div class="col-sm-offset-2 col-sm-10">
             <button type="submit" class="btn btn-primary" id="btn-save" value="create">Save
             </button>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        
    </div>
</div>
</div>


  

</section>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>




@endsection()


