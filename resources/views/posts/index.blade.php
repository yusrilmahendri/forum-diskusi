@extends('layouts.master')

@section('content')

  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
         <div class="row">
             <div class="col-md-12">
               <div class="panel">
                 <div class="panel-heading">
                    <h3 class="panel-title">FORUM</h3>
                       <div class="right">
   
    <a type="button" class="btn btn-primary btn-lg"style ="margin:5px; padding: 5px;margin-bottom: 25px; margin-top: 25px; border-radius: 25px; border-size:20px;" data-toggle="modal" data-target="#exampleModal">Add Question</a>
  
     </div>
  </div>

  <div class="panel-body">
   <ul class="list-unstyled activity-list">
    
     @foreach($diskusi as $frm)
    
    <li>
      <img src="{{$frm->user->karyawan->getAvatar()}}" alt="avatar" class="img-circle pull-left avatar">
      <p>
        <a href="/diskusi/{{$frm->id}}/view">{{$frm->user->karyawan->nama}} : {{$frm->judul}}
        <p>
          <span class="timesstamp">{{$frm->created_at->diffForHumans()}}</span>
        </p>
      </p>
    </li>

  
    @endforeach
               </ul>
             </div>
           </div>      
         </div>
       </div>    
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Question</h5>
             <a type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
      </a>
   </div>
 
   <div class="modal-body">
  
   <form action="/diskusi/create" method="POST">
 
     {{csrf_field()}}
  
   <div class="form-group">
    <label for="judul">Judul</label> 
      <input type="text" name="judul" class="form-control"
    placeholder="Judul" aria-describedby="judul">
        <small id="judul" class="form-text text-muted">We'll never share your title with anyone else.</small>
   </div>

    <div class="form-group">
     <label for="konten">Content</label>
       <textarea class="form-control" name="konten" rows="3">{{old('alamat')}}</textarea>
    </div>
 

    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
  
       </div>
      </div>
     </div>
    </div>
  </div>
</div>  

@endsection