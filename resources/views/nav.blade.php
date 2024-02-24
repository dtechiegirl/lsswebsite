{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"> --}}
<header class="header-area style-1">
    <div class="main-nav">
    <div class="mobile-logo-area d-xl-none d-flex justify-content-between align-items-center">
    <div class="mobile-logo-wrap ">
    <a href="index.html"><img alt="image" src="assets/images/icons/logo-icon.svg" style="width: 20%"></a>
    </div>
    <div class="menu-close-btn">
    <i class="bi bi-x-lg text-white"></i>
    </div>
    </div>
    <ul class="menu-list">
    <li class="">
    <a href="{{route('index')}}" class="drop-down">Home</a><i class="bi bi-chevron-down dropdown-icon"></i>
    {{-- <ul class="sub-menu">
    <li><a href="index.html" class="active-menu">Home 1</a></l
    <li><a href="index2.html">Home 2</a></li>
    <li><a href="index3.html">Home 3</a></li>
    <li><a href="index4.html">Home 4</a></li>
    </ul> --}}
    </li>
    <li><a href="{{route('about')}}">About Us</a></li>
    
    <li class="">
        <a href="#" class="drop-down">Chambers And Organsations</a><i class="bi bi-chevron-down dropdown-icon"></i>
        <ul class="sub-menu">
        <li><a href="{{route('Olakunle-Orojo-Chamber')}}">Olakunle Orojo Public Chamber</a></li>
        <li><a href="{{route('Akioola-Aguda-Chamber')}}">Akinola Aguda Public Chamber</a></li>
        <li><a href="{{route('Gani-Fawehimi-Chamber')}}">Gani Fawehimi Public Chamber</a></li>
        <li><a href="{{route('Kayode-Eso-Chamber')}}">Kayode Eso Public Chamber</a></li>
        <li><a href="{{route('Equity')}}">Equity Private Chamber</a></li>
        <li><a href="{{route('Justice-Cloak')}}">Justice Cloak</a></li>
        <li><a href="{{route('Legal-Temple')}}">The Legal Temple</a></li>
        <li><a href="{{route('Law Clinic,AAUA')}}">Akungba Law Clinic</a></li>
       
        <li><a href="{{route('clubs')}}">See Clubs</a><i class="bi bi-arrow-right"></i></li>
        
      
        </ul>
        </li>
        
    <li class="">
        <a href="#" class="drop-down">Material Bank</a><i class="bi bi-chevron-down dropdown-icon"></i>
        <ul class="sub-menu">
        <li><a href="https://drive.google.com/drive/folders/166OxRyRf4IrWNQw6P5hP9IpaSY9Gs6wp?usp=sharing">100L</a></li>
        <li><a href="https://drive.google.com/drive/folders/19RJY4l7vcj4H_JmPY7KsRLJj5QC8Vust">200L</a></li>
        <li><a href="https://drive.google.com/drive/folders/1AuKS2tDWpW4o0auAxr2ptVs4MVD2dg7T">300L</a></li>
        <li><a href="https://drive.google.com/drive/folders/1AkX6KZg2QP4HQaD_d9JMTH3fgEZxx4u9">400L</a></li>
        <li><a href="https://drive.google.com/drive/folders/1AYkV3yISSD8JFnJkHBaKS__N3UiGMiqa">500 L</a></li>

      
        </ul>
        </li>
    
    <li class="">
    <a href="{{route('blog')}}">Blog & Publications</a><i class="bi bi-chevron-down dropdown-icon"></i>
    @auth
   
    @if(auth()->user()->is_admin == 1)
    <ul class="sub-menu">
    <li><a href="{{route('create-post')}}">Create Post</a></li> 

    </ul>
    @endif 
    @endauth 
    </li>
    <li><a href="{{route('Contributors-&-Sponsors')}}">Contributors & Sponsors</a></li>
    </ul>
    </div>
    <div class="mobile-menu-btn d-xl-none d-block">
        <i class="bi bi-list text-white"></i>
        </div>

    {{-- <div class="mobile-menu-btn d-xl-none d-block">
        <i class="bi bi-list text-white"></i>
        </div> --}}
    
    </div>
 
    </header>
    