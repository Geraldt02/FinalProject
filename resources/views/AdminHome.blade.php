@extends('AdminHeader')

@section('navbar-admin')
     <div class="p-10">
        <h1 class="text-center m-4"> Find your best clothes here! </h1>
    </div>

    <div class="container-sm d-flex flex-column flex-wrap gap-4 justify-content-center align-items-center ">
        <div class="row row-cols-3 gap-5">
            @foreach ($Data as $d)

                <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 18rem;">
                    <div class="card-body">

                             <img src="{{$d->image_url}}" class="" id="img" width="100%", height="200px" alt="default">
                             <h5 class="card-title mt-2"><b>{{$d->name}}</b></h5>
                             <p class="card-text"></p>Rp{{$d->price}}</p>
                             <p class="date">{{$d->description}}</p>
                             <a href="{{url('AdminHome/'.$d->name)}}" class="btn btn-primary">more</a>
                    </div>
                </div>
             @endforeach
         </div>
         {{$Data->links() }}
    </div>
@endsection
