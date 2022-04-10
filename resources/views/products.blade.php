@extends('layouts.app')
<link href="{{ asset('css/prds.css') }}" rel="stylesheet">
@section('content')

<div class="container my-5">

    <!-- Section: Components -->
    
        <!--Section: Cards-->
        <section>
  
          <!--Grid row-->
          <div class="row">
  @forelse ($products as $product)
  @if ($product->video!=NULL)
            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card" >
                <div
                     class="bg-image hover-overlay ripple"
                     data-mdb-ripple-color="light"
                     >
                     <img
                     src="{{asset( str_replace('public' , 'storage' ,$product->photo))}}" 
                          class="img-fluid"
                          />
                  <a href="#!">
                    <div
                         class="mask"
                         style="background-color: rgba(251, 251, 251, 0.15)"
                         ></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">@if ($langu=="ar")
                           {!! $product->ar_name !!}
                           @else
                           {!!$product->en_name!!}
                           @endif</h5>
                  <p class="card-text">
                     @if ($langu=="ar")
                        {!!$product->ar_description!!}
                        @else
                        {!!$product->en_description!!}
                        @endif
                  </p>
                  <a  href="{{ $product->video }}" class="glightbox btn-watch-video btn-primary"><i class="bi bi-play-circle"></i><span>عرض الفيديو</span></a>
           
                  {{-- <a href="{{ route('showimg',$product->id) }}" class="btn ">عرض</a> --}}
                </div>
              </div>
            </div>





            <!--Grid column-->
  @else
        <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <div
                     class="bg-image hover-overlay ripple"
                     data-mdb-ripple-color="light"
                     >
                  <img
                  src="{{asset( str_replace('public' , 'storage' ,$product->photo))}}" 
                       class="img-fluid"
                       />
                  <a href="#!">
                    <div
                         class="mask"
                         style="background-color: rgba(251, 251, 251, 0.15)"
                         ></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">@if ($langu=="ar")
                           {{$product->ar_name}}
                           @else
                           {{$product->en_name}}
                           @endif</h5>
                  <p class="card-text">
                     @if ($langu=="ar")
                        {{$product->ar_description}}
                        @else
                        {{$product->en_description}}
                        @endif
                  </p>
                  <a href="{{ route('showimg',$product->id) }}" class="btn btn-primary">عرض</a>
                </div>
              </div>
            </div>
            <!--Grid column-->
  @endif
  @empty
     {{'No data to show.'}}
  @endforelse
      
  
          
  
          </div>
          <!--Grid row-->
        </section>
  
  
  </div>
@endsection
