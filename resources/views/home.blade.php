@extends('layouts.app') 
@section('content')


@if($langu=='ar') 
<style>
    .form-group input{
text-align:right ;
    }
</style>

@else  

<style>
    .form-group input{
        text-align:left ;
    }
</style>
@endif
  <!-- Masthead-->

  <video id="slider_vid" width="100%"  playsinline="" webkit-playsinline="" autoplay="" muted="" loop="">
    <source src="{{asset( str_replace('public' , 'storage' ,$cover->video))}}" type="video/mp4">
  </video>

  <header class="masthead" style="    margin-top: -7px; background-image:url({{asset( str_replace('public' , 'storage' ,$cover->cover))}})">
      <div class="container">
          <div class="masthead-heading text-uppercase">{{ trans('sentence.Company Vision')}}</div>
          <div class="masthead-subheading">{{ trans('sentence.AboutNamaa')}}</div>
          <a class="btn btn-primary btn-xl text-uppercase" href="#services">{{ trans('sentence.Tell Me More')}}</a>
      </div>
  </header>




  <!-- About-->
  <section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">{{ trans('sentence.whoweare')}}</h2>
            <br>
        </div>
        <div class="portfolio-caption-heading">
            {{ trans('sentence.whoweare_d')}}
        </div>
    </div>
</section>





  <!-- Portfolio Grid-->
  <section class="page-section bg-light" id="portfolio">
      <div class="container">
          <div class="text-center">
              <h2 class="section-heading text-uppercase">{{ trans('sentence.Our Products')}}</h2>
              <br>
          </div>
          <div class="row">
            @php
            $i=1;   
           @endphp
            @forelse ($allcats as $cat)

            <div class="col-lg-4 col-sm-6 mb-4">
               <!-- Portfolio item 1--> 
               <div class="portfolio-item">
                   <a class="portfolio-link" href="{{route('prds',$cat->id) }}">
                       <div class="portfolio-hover">
                           <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                       </div>
                       <img class="img-fluid" src="{{asset( str_replace('public' , 'storage' ,$cat->photo))}}" alt="..." />
                   </a>
                   <div class="portfolio-caption">
                       <div class="portfolio-caption-heading">
                           @if ($langu=="ar")
                           {{$cat->ar_name}}
                           @else
                           {{$cat->en_name}}
                           @endif
                       </div>
                       <div class="portfolio-caption-subheading text-muted">
                        @if ($langu=="ar")
                        {{$cat->ar_description}}
                        @else
                        {{$cat->en_description}}
                        @endif
                        
                    </div>
                   </div>
               </div>
           </div>
           @php
           $i++;   
          @endphp
           @empty
               {{'No data to show.'}}
           @endforelse
          </div>
      <a class='btn btn-success' href="{{route('prds','all') }}">{{ trans('sentence.showmore')}}</a>
      </div>
  </section>


















  <!-- Services-->
  <section class="page-section" id="services">
      <div class="container">
          <div class="text-center">
              <h2 class="section-heading text-uppercase">{{ trans('sentence.Policy And Terms')}}</h2>
              
              <br>
          </div>
          <div class="row text-center">
              <div class="col-md-4">
                  <span class="fa-stack fa-4x">
                      <i class="fas fa-circle fa-stack-2x text-primary"></i>
                      <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                  </span>
             </div>
              <div class="col-md-8">
                  
                  <p class="text-muted">{{ trans('sentence.Policy And Terms D')}}</p>
              </div>
          </div>
      </div>
  </section>
  <!-- Team-->
  <section class="page-section bg-light" id="team">
      <div class="container">
          <div class="text-center">
              <h2 class="section-heading text-uppercase">{{ trans('sentence.Call Us')}}</h2>
              <br>
          </div>
          <div class="row">
            {{-- https://wa.link/g4428p --}}
              @forelse ($contacts as $contact)
              <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{asset( str_replace('public' , 'storage' ,$contact->photo))}}" alt="..." />
                    <h4>{{ $contact->name }}</h4>
                    <h4><a target="blank_" href="{{ $contact->link }}">واتس اب</a></h4>
                  <br>
                </div>
            </div>
              @empty
                           {{'No data to show.'}}
              @endforelse


          </div>
          
      </div>


  </section>
  
 




  <!-- Send Message -->
  <section class="page-section bg-light" id="sendmsg" style="direction: ltr">
    <div class="container">
        <div class="row col-12">
            <div class="col-lg-8 offset-lg-2 col-xs-12">
                <div class="card">
                    <div class="card-header bg-info" style="
                    --bs-bg-opacity: 1;
    background-color: #0a7bb7!important;
    text-align: center;
                    ">
                        <h3 class="text-white">{{ trans('sentence.sendusmsg')}}</h3>
                    </div>
                    <div class="card-body">
                        
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                        @endif
                   
                        <form method="POST" action="{{ route('contact-form.store') }}"  style="@if($langu=='ar') text-align:right @else  text-align:left @endif">                  
                            {{ csrf_field() }}
                            <div class="row" >
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>{{ trans('sentence.name')}}:</strong>
                                        <input type="text" name="name" class="form-control" placeholder="{{ trans('sentence.name')}}" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>{{ trans('sentence.email')}}:</strong>
                                        <input type="text" name="email" class="form-control" placeholder="{{ trans('sentence.email')}}" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>{{ trans('sentence.phone')}}:</strong>
                                        <input type="text" name="phone" class="form-control" placeholder="{{ trans('sentence.phone')}}" value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('Phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>{{ trans('sentence.subject')}}:</strong>
                                        <input type="text" name="subject" class="form-control" placeholder="{{ trans('sentence.subject')}}" value="{{ old('subject') }}">
                                        @if ($errors->has('subject'))
                                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>{{ trans('sentence.message')}}:</strong>
                                        <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>  
                                </div>
                            </div>
                   
                            <div class="form-group text-center" style="padding:5px;">
                               
                               <button class="btn btn-success btn-submit" style="
 background: #ffc107;
    color: #0a7bb7;  "> {{ trans('sentence.send')}}
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>









  
  <!-- About-->
  <section class="page-section" id="ourprteners">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">{{ trans('sentence.ourprteners')}}</h2>
            <br>
        </div>
        <ul class="timeline">


            @forelse ($partners as $partner)
            <li>
                <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="{{asset( str_replace('public' , 'storage' ,$partner->photo))}}" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">{{ $partner->name }}</h4>
                    </div>
                </div>
            </li>
            @empty
                {{'No data to show.'}}
            @endforelse
        </ul>
    </div>
</section>
  <!-- Clients-->
  <div class="py-5"  id="clints">
      <div class="container">
          
        <div class="text-center">
            <h2 class="section-heading text-uppercase">{{ trans('sentence.clints')}}</h2>
            <br>
        </div>
          <div class="row align-items-center">


            @forelse ($clints as $clint)
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{asset( str_replace('public' , 'storage' ,$clint->photo))}}" alt="..." /></a>
            </div>
            @empty
                {{'No data to show.'}}
            @endforelse

          </div>
      </div>
  </div>

  <!-- Footer-->
  <footer class="footer py-4">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2021</div>
              <div class="col-lg-4 my-3 my-lg-0">
                  <a  target="_blank" class="btn btn-dark btn-social mx-2" href="https://www.youtube.com/channel/UCU-bnzWumRCZxZzw9QOoO1A"><i class="fab fa-youtube"></i></a>
                  <a  target="_blank" class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/companynama"><i class="fab fa-facebook-f"></i></a>
              </div>
              <div class="col-lg-4 text-lg-end">
                  <a target="_blank" class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                  <a target="_blank" class="link-dark text-decoration-none" href="#!">Terms of Use</a>
              </div>
          </div>
      </div>
  </footer>
  <!-- Portfolio Modals-->
  <!-- Portfolio item 1 modal popup-->




@endsection

