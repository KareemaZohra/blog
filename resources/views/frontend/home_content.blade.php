@extends('welcome')
@section('content')
  <div class="row">
       <div class="col-xs-12">
        <h1 style="text-align: center">Popular in store <hr class="my-5" style="width: 10%"></h1>
        <p class="text-muted" style="text-align: center">Claritas processus sequitur mutationem consuetudium lectorumseacula quarta decima futurum.</p>
         </div>
         </div>

      @foreach($data as $d)
      <div class="col-md-4">
           <div class="row">
              <div class="col-xs-12">
              <img src="images/{{$d->photo}}" class="img-responsive">
              <p class="text-muted">Price : {{$d->price}}</p>
              <p>Name : {{$d->name}}</p>
              <a class="btn btn-info" href="{{url('/view_full',$d->id)}}">View full</a>
              <a class="btn btn-success">Edit</a>
              <a class="btn btn-danger" href="{{url('/delete',$d->id)}}">Delete</a>
         </div>
       </div>
     </div>
     @endforeach

@endsection