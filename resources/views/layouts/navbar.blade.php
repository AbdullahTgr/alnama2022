  <!-- Navigation-->
    <div class="langnav row col-12">
        <div class="col-1 "><a class="nav-link" href="lang/ar"><img class="img-flag" src={{ asset('assets/flags/egy.png') }} />عربي</a></div>
        <div class="col-1 "><a class="nav-link" href="lang/en"><img class="img-flag" src={{ asset('assets/flags/us.png') }} />English</a></div>
        <div class="col-1 "><a class="nav-link" href="lang/fr"><img class="img-flag" src={{ asset('assets/flags/france.png') }} />France</a></div>
    
        <form action="{{ route('search') }}" method="GET">
        <div class="serchcon">
            <input class="serchinpu" placeholder="ابحث هنا" type="text" name="search" required/>
            <button class="serchbtn" type="submit">بحث</button>
        </div>
        
    </form>
    </div>

    <br>
    <br>
    <br>
    <br>





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