@extends('layouts.app')
<link href="{{ asset('css/prds.css') }}" rel="stylesheet">
<style>
    body{
        padding-top: 100px!important;
        direction: rtl;
    }
</style>
@section('content')



@forelse ($products as $product)
    <div class="header">
        <div class="row r1">
            <div class="col-md-9 abc">

            <h5 class="card-title">

            @if ($langu=="ar")
                    {!! $product->ar_name !!}
                    @else
                    {!! $product->en_name !!}
            @endif
        </h5>
        
           
            </div>
            
        </div>
    </div>
                <p class="card-text">
                    @if ($langu=="ar")
                       {!! $product->ar_description !!}
                       @else
                       {!! $product->en_description!!}
                       @endif
                 </p>
            <div class="col-md-12"> 
                
                  {{-- <iframe style="
                  height: 100%;
    width: 100%;
                  " src="{{asset( str_replace('public' , 'storage' ,str_replace("watch?v=","embed/",$product->video)))}}">
                  </iframe> --}}

                  <a target="_blank" href="{{ $product->video }}" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
    <div class="footer d-flex flex-column mt-5">
        
    </div>
@empty
   {{'No data to show.'}}
@endforelse






@endsection
