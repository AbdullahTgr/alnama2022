  <!-- Navigation-->
  <style>
      
  #mainNav .navbar-brand img {
    height: 5rem!important;
  }
  </style>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        

@if ($langu=="ar")
<a class="navbar-brand" href="#page-top"><img id="imglogo" src={{ asset('assets/img/logos/namaa.png') }} /></a>
@else
    @if ($langu=="en")
    <a class="navbar-brand" href="#page-top"><img id="imglogo" src={{ asset('assets/img/logos/namaa-en.png') }} /></a>
    @else
        @if ($langu=="fr")
        <a class="navbar-brand" href="#page-top"><img id="imglogo" src={{ asset('assets/img/logos/namaa-fr.png') }} /></a>
        @else
        <a class="navbar-brand" href="#page-top"><img id="imglogo" src={{ asset('assets/img/logos/namaa.png') }} /></a>
        @endif
    @endif
@endif
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            {{ trans('sentence.Home')}}
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="lang/ar">عربي</a></li>
                <li class="nav-item"><a class="nav-link" href="lang/en">English</a></li>
                
                <li class="nav-item"><a class="nav-link" href="/#services">{{ trans('sentence.Policy And Terms')}}</a></li>
                <li class="nav-item"><a class="nav-link" href="/#team">{{ trans('sentence.Call Us')}}</a></li>
                <li class="nav-item"><a class="nav-link" href="/#about">{{ trans('sentence.whoweare')}}</a></li>
                <li class="nav-item"><a class="nav-link" href="/#clints">{{ trans('sentence.clints')}}</a></li>
                <li class="nav-item"><a class="nav-link" href="/#ourprteners">{{ trans('sentence.ourprteners')}}</a></li>
                <li class="nav-item"><a class="nav-link" href="/#portfolio">{{ trans('sentence.Our Products')}}</a></li>
                <li class="nav-item"><a class="nav-link" href="/">{{ trans('sentence.Home')}}</a></li>
            </ul>
        </div>
    </div>
</nav>