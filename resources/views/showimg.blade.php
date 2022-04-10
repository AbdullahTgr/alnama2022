@extends('layouts.app')
<link href="{{ asset('css/prds.css') }}" rel="stylesheet">
<style>
    body{
        padding-top: 100px!important;
        direction: rtl;
    }
</style>
@section('content')



<div class="container py-4 my-4 mx-auto d-flex flex-column">
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
    <div class="container-body mt-4">
        <div class="row r3">
            <div class="col-md-5 p-0 klo">
                <p class="card-text">
                    @if ($langu=="ar")
                       {!! $product->ar_description !!}
                       @else
                       {!! $product->en_description !!}
                       @endif
                 </p>
            </div>
            <div class="col-md-7"> <img src="{{asset( str_replace('public' , 'storage' ,$product->photo))}}" width="90%" height="95%"> </div>
        </div>
    </div>
    <div class="footer d-flex flex-column mt-5">
        
    </div>
@empty
   {{'No data to show.'}}
@endforelse

</div>





@endsection
