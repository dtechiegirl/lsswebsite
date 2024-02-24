<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<!-- Mirrored from demo.egenslab.com/html/corelaw/preview/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2023 16:59:28 GMT -->
@include('layouts')
<body>

{{-- <div class="egns-preloader">
<div class="container">
<div class="row d-flex justify-content-center">
<div class="col-6">
<div class="circle-border">
<div class="moving-circle"></div>
<div class="moving-circle"></div>
<div class="moving-circle"></div>
<svg width="180px" height="150px" viewBox="0 0 187.3 93.7" preserveAspectRatio="xMidYMid meet" style="left: 50%; top: 50%; position: absolute; transform: translate(-50%, -50%) matrix(1, 0, 0, 1, 0, 0);">
<path stroke="#D90A2C" id="outline" fill="none" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z" />
<path id="outline-bg" opacity="0.05" fill="none" stroke="#959595" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z" />
</svg>
</div>
</div>
</div>
</div>
</div> --}}

@include('nav')


<div class="banner-section">
<div class="banner-social-area">
<ul class="banner-social gap-4">
    <li><a href="https://x.com/AauaLss?t=BynE3eNYtEsfeb-jMNXnFQ&s=09"><i class="bx bxl-twitter"></i></a></li>
    <li><a href="https://www.instagram.com/aaualaw?igshid=YzVkODRmOTdmMw=="><i class="bx bxl-instagram"></i></a></li>
    <li><a href="https://www.linkedin.com/in/law-students-society-adekunle-ajasin-university-bb6597218?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="bx bxl-linkedin"></i></a></li>
    <li><a href="http://tiktok.com/@aaualaw_"><i class="bx bxl-tiktok"></i></a></li>
</ul>
</div>
<div class="banner-scroll-area">
<a href="#about">Scrool Down<i class="bi bi-arrow-right"></i></a>
</div>
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-10">
<div class="banner-content">

<h1 style= "color: white">The Law Students <br><span style="color:white">Society, AAUA.</span></h1>
{{-- <span>AAUA</span> --}}
<div class="button-area">
<a href="{{route('index')}}" class="eg-btn btn--primary btn--lg" style="background-color: black; color: white"><i class="bi bi-dash-lg" style="color: white"></i>Take A Tour</a>
<div class="phone-call d-flex justify-content-center align-items-center flex-row">
<div class="icon">
<svg width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
<path d="M28.4525 22.3006C27.7155 21.5332 26.8265 21.1229 25.8844 21.1229C24.9498 21.1229 24.0532 21.5256 23.2858 22.293L20.8848 24.6864C20.6873 24.58 20.4898 24.4813 20.2998 24.3825C20.0263 24.2457 19.7679 24.1166 19.5476 23.9798C17.2986 22.5514 15.2547 20.6898 13.2944 18.2813C12.3446 17.0808 11.7064 16.0702 11.2429 15.0445C11.866 14.4746 12.4434 13.882 13.0057 13.3121C13.2184 13.0994 13.4312 12.879 13.6439 12.6663C15.2395 11.0707 15.2395 9.00404 13.6439 7.40845L11.5696 5.33419C11.3341 5.09865 11.091 4.85551 10.863 4.61237C10.4071 4.14129 9.92847 3.65502 9.4346 3.19913C8.69759 2.46972 7.81621 2.08222 6.88925 2.08222C5.96229 2.08222 5.06572 2.46972 4.30592 3.19913C4.29832 3.20673 4.29832 3.20673 4.29072 3.21433L1.70738 5.82046C0.734835 6.79301 0.180177 7.97831 0.0586086 9.35355C-0.123745 11.5722 0.529687 13.6389 1.03116 14.9913C2.26204 18.3116 4.10077 21.3889 6.84366 24.6864C10.1716 28.6602 14.1758 31.7982 18.7498 34.0092C20.4974 34.8374 22.83 35.8176 25.4361 35.9847C25.5956 35.9923 25.7628 35.9999 25.9148 35.9999C27.6699 35.9999 29.1439 35.3693 30.2988 34.1156C30.3064 34.1004 30.3216 34.0928 30.3292 34.0776C30.7243 33.5989 31.1802 33.1658 31.6589 32.7024C31.9856 32.3908 32.3199 32.0641 32.6466 31.7222C33.3988 30.9396 33.7939 30.0278 33.7939 29.0933C33.7939 28.1511 33.3912 27.247 32.6238 26.4871L28.4525 22.3006ZM31.1726 30.3014C31.165 30.3014 31.165 30.309 31.1726 30.3014C30.8763 30.6205 30.5724 30.9092 30.2456 31.2283C29.7518 31.6994 29.2503 32.1933 28.7792 32.7479C28.0118 33.5685 27.1077 33.956 25.9224 33.956C25.8084 33.956 25.6868 33.956 25.5728 33.9484C23.3162 33.8041 21.2192 32.9227 19.6464 32.1705C15.3459 30.0886 11.5696 27.133 8.43165 23.3871C5.84072 20.2643 4.10837 17.3771 2.96106 14.2771C2.25444 12.3852 1.99611 10.9112 2.11008 9.52071C2.18606 8.63174 2.52797 7.89473 3.15861 7.26409L5.74954 4.67316C6.12185 4.32365 6.51695 4.13369 6.90445 4.13369C7.38312 4.13369 7.77063 4.42242 8.01376 4.66556C8.02136 4.67316 8.02896 4.68075 8.03656 4.68835C8.50004 5.12144 8.94072 5.56973 9.4042 6.0484C9.63974 6.29154 9.88288 6.53468 10.126 6.78541L12.2003 8.85968C13.0057 9.66507 13.0057 10.4097 12.2003 11.2151C11.9799 11.4354 11.7672 11.6558 11.5469 11.8685C10.9086 12.5219 10.3008 13.1298 9.63974 13.7224C9.62455 13.7376 9.60935 13.7452 9.60175 13.7604C8.94832 14.4139 9.06989 15.0521 9.20666 15.4852C9.21425 15.508 9.22185 15.5308 9.22945 15.5536C9.76891 16.8604 10.5287 18.0913 11.6836 19.5577L11.6912 19.5653C13.7883 22.1487 15.9993 24.1621 18.4383 25.7045C18.7498 25.9021 19.0689 26.0617 19.3728 26.2136C19.6464 26.3504 19.9047 26.4795 20.125 26.6163C20.1554 26.6315 20.1858 26.6543 20.2162 26.6695C20.4746 26.7987 20.7177 26.8595 20.9684 26.8595C21.5991 26.8595 21.9942 26.4644 22.1233 26.3352L24.7219 23.7367C24.9802 23.4783 25.3905 23.1668 25.8692 23.1668C26.3402 23.1668 26.7277 23.4631 26.9633 23.7215C26.9709 23.7291 26.9709 23.7291 26.9785 23.7367L31.165 27.9232C31.9476 28.6982 31.9476 29.496 31.1726 30.3014Z" />
<path d="M19.4556 8.56378C21.4463 8.8981 23.2547 9.84025 24.6983 11.2839C26.1419 12.7275 27.0765 14.5358 27.4184 16.5265C27.502 17.028 27.9351 17.3775 28.4289 17.3775C28.4897 17.3775 28.5429 17.3699 28.6037 17.3623C29.1659 17.2711 29.5382 16.7393 29.4471 16.177C29.0368 13.7684 27.8971 11.5726 26.1571 9.83266C24.4172 8.0927 22.2213 6.953 19.8127 6.5427C19.2505 6.45152 18.7262 6.82383 18.6275 7.37849C18.5287 7.93314 18.8934 8.47261 19.4556 8.56378Z" />
<path d="M35.9595 15.8804C35.2832 11.9142 33.4141 8.30511 30.5421 5.43304C27.67 2.56098 24.0609 0.691864 20.0947 0.0156379C19.5401 -0.0831367 19.0158 0.296766 18.917 0.851423C18.8259 1.41368 19.1982 1.93794 19.7604 2.03672C23.3011 2.63696 26.5303 4.31613 29.0984 6.87667C31.6666 9.44481 33.3381 12.674 33.9384 16.2147C34.022 16.7161 34.455 17.0657 34.9489 17.0657C35.0097 17.0657 35.0629 17.0581 35.1237 17.0505C35.6783 16.9669 36.0582 16.435 35.9595 15.8804Z" />
</svg>
</div>
<div class="number">
<span>Call Us Now</span>
<h5><a href="tel:+8801701111000">+2347059162814</a></h5>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>




<div class="about-section pt-120 pb-120" id="about">
<img src="assets/images/bg/section-bg1.svg" alt="image" class="section-bg1 img-fluid">
<div class="container">
<div class="row">
<div class="col-lg-6 text-lg-start text-center wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="200ms">
<div class="section-title1">
<h2>Law Students' Society, Adekunle Ajasin University.</h2>
<p>The Law Students' Society, Adekunle Ajasin University Akungba-Akoko (LSS, AAUA) is a conglomeration of the bona-fide students of the Faculty of Law, Adekunle Ajasin University Akungba-Akoko (AAUA).</p>
</div>
{{-- <div class="about-content1">
<h3>Get About our Law Firm and Learn About our Expertise.</h3>
<div class="lawyer-word">
<p>In consequat tincidunt turpis sit amet imperdiet. Praesent Classei
consequat tincidunt turpis sit amet imperdiet for mind.</p>
<img src="assets/images/icons/lawyer-sign.svg" alt="image">
<h6>Simanto Rahman, CEO-Founder</h6>
</div>
</div> --}}
</div>
<div class="col-lg-6 d-flex justify-content-lg-end justify-content-center">
<div class="about1-img wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.2s">
<img src="assets/images/bg/img.jpg" alt="image" class="img-fluid">
{{-- <div class="experience-tag">
<h2>05 <span>Years</span></h2>
<p>We Have A Lot Of Real Experience</p>
</div> --}}
</div>
</div>
</div>
</div>
</div>


<br><div class="row justify-content-center">
  <div class="col-md-7">
  <div class="section-title1 text-center">
  <h2>Legally Inspired:</h2>
 <p>  <b>Navigating the Jurisprudence Journey Together!</b></p>
  <p>Embark on your legal journey with confidence and knowledge. Our blog is here to support you every step of the way, offering guidance, resources, and inspiration for law students navigating the intricacies of legal education. Stay tuned for more valuable content that will empower you to thrive in the challenging yet rewarding world of law.</p>
  {{-- <p>In consequat tincidunt turpis sit amet imperdiet. Praesent Class officelan nonatoureanor mauris laoreet, iaculis libero quis.Curabitur et tempus eri consequat tincidunt.</p> --}}
  </div>
  </div>
  </div>

<div class="blog-standard-section pt-120 pb-120">
   <div class="container">
   <div class="row gy-5">
   <div class="col-lg-8">
   <div class="blog-standard-area">
    @if($posts->isEmpty())
    <div class="row justify-content-center">
        <div class="col-md-10">
        <div class="section-title1 text-center">
        <h2>No Blog Post, Check Back Later!</h2>

        </div>
        </div>
        </div>
    @else
    @foreach($posts as $post)

    
   <div class="blog-standard-single">
   <div class="image">
   <span class="blog-badge">{{$post->category}}</span>
   <a href="/blog/{{$post->id}}"><img src="{{asset('images/' . $post->picture)}}" class="img-fluid" alt="image"></a>
   </div>
   <div class="text">
   <h2><a href="/blog/{{$post->id}}">{{$post->title}}</a></h2>
   <ul class="post-meta-list">
   <li><img src="assets/images/icons/user.svg" alt="image"><span>By, Admin</span></li>
   <li><img src="assets/images/icons/calendr.svg" alt="image"><span>{{date('jS M Y', strtotime($post->updated_at))}}</span></li>
   {{-- <li><img src="assets/images/icons/bubble.svg" alt="image"><span>Comments (02)</span></li> --}}
   </ul>
   <p class="para">{{$post->description}}.</p>
   <a href="/blog/{{$post->id}}" class="read-more-btn">Continue Reading<i class="bi bi-arrow-right"></i></a><br>
   @auth
   {{-- <li>Hello, {{auth()->user()->full_name}}</li> --}}
  @if(auth()->user()->is_admin == 1)
  {{-- <a href="{{route('create-post')}}" class="">Create Post</a> --}}
  <a href="/blog/{{$post->id}}/edit">Edit Post</a>
  <a href="/blog/{{$post->id}}/delete">Delete Post</a>
    @endif 
    @endauth

   </div>
   </div>

       @endforeach
       @endif
   </div>
   </div>
   </div>
   </div>
</div>



@if(session()->has('message'))
<h3 style="color: #349AFF">{{session()->get('message')}}</h3>
@endif

<div class="contact-section pb-120">
<div class="container-fluid">
<div class="row g-0">
<div class="col-lg-6 bg--light">
<div class="contact-wrap wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="200ms">
<div class="section-title1 text-lg-start text-center">
<h2>Contact Now</h2>
<p>Have something on your mind? <br>Let's talk! Explore our contact option below.
    </p>
{{-- <p>In consequat tincidunt turpis sit amet imperdiet. Praesent Class officelan nonatoureai mauris laoreet, iaculis libero quis.Curabitur et tempus eri consequat tincidunt.</p> --}}
</div>

<form method="post" action="/contact-us" class="contact-form contact-form3">
   @csrf
<div class="row">
<div class="col-lg-6">
<div class="form-inner">
<input type="text" placeholder="Enter your name" name="name">
</div>
</div>

  <!-- Form Group -->
  @error('email')
  <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
  @enderror
<div class="col-lg-6">
<div class="form-inner">
<input type="email" placeholder="Enter your email" name="email">
</div>
</div>
  <!-- Form Group -->
  @error('phone')
  <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
  @enderror
<div class="col-lg-6">
<div class="form-inner">
<input type="text" placeholder="Enter your Phone" name="phone">
</div>
</div>
  <!-- Form Group -->
  @error('message')
  <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
  @enderror
<div class="col-lg-12">
<div class="form-inner">
<textarea rows="5" placeholder="Your message" name="message"></textarea>
</div>
</div>
<div class="col-lg-12 text-lg-start text-center">
    <button type="submit" class="eg-btn btn--primary2 sibling2  btn--lg2"><i class="bi bi-dash-lg"></i>Contact Now<i class="bi bi-chevron-right"></i></button>
    </div>
</div>
</form>
</div>
</div>
<div class="col-lg-6">
<ul class="address-list ps-lg-5">
<li>
<div class="icon">
<svg width="44" height="44" viewBox="0 0 44 44" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_153_65)">
<path d="M22 0.125C13.519 0.125 6.61914 7.02485 6.61914 15.5059C6.61914 18.3713 7.41288 21.1677 8.91508 23.5938L21.1245 43.2691C21.3584 43.646 21.7704 43.875 22.2135 43.875C22.217 43.875 22.2203 43.875 22.2237 43.875C22.6707 43.8715 23.0836 43.6354 23.3132 43.2519L35.2114 23.386C36.6307 21.0112 37.3809 18.2863 37.3809 15.5059C37.3809 7.02485 30.481 0.125 22 0.125ZM33.0115 22.0699L22.1941 40.1311L11.0939 22.2432C9.84348 20.2239 9.16553 17.8942 9.16553 15.5059C9.16553 8.43835 14.9325 2.67139 22 2.67139C29.0675 2.67139 34.8259 8.43835 34.8259 15.5059C34.8259 17.8233 34.1927 20.0935 33.0115 22.0699Z" />
<path d="M22 7.81543C17.7595 7.81543 14.3096 11.2654 14.3096 15.5059C14.3096 19.7193 17.7034 23.1963 22 23.1963C26.3496 23.1963 29.6904 19.673 29.6904 15.5059C29.6904 11.2654 26.2405 7.81543 22 7.81543ZM22 20.6499C19.1582 20.6499 16.856 18.34 16.856 15.5059C16.856 12.6789 19.173 10.3618 22 10.3618C24.827 10.3618 27.1355 12.6789 27.1355 15.5059C27.1355 18.2986 24.8868 20.6499 22 20.6499Z" />
</g>
<defs>
<clipPath id="clip0_153_65">
<rect width="43.75" height="43.75" fill="white" transform="translate(0.125 0.125)" />
</clipPath>
</defs>
</svg>
</div>
<div class="text">
<h4>Location</h4>
<p>Adekunle Ajasin University, Akungba-Akoko, Ondo State.</p><br>
<p>Gmail::aaualawstudentssociety@gmail.com</p>
</div>
</li>
<li>
<div class="icon">
<svg width="44" height="44" viewBox="0 0 44 44" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_153_52)">
<path d="M34.7007 27.2267C33.805 26.2941 32.7247 25.7955 31.5797 25.7955C30.444 25.7955 29.3544 26.2849 28.4218 27.2175L25.5039 30.1261C25.2638 29.9969 25.0238 29.8768 24.7929 29.7568C24.4605 29.5906 24.1466 29.4336 23.8788 29.2674C21.1456 27.5314 18.6617 25.2692 16.2794 22.3421C15.1252 20.8832 14.3496 19.6551 13.7863 18.4085C14.5435 17.716 15.2452 16.9958 15.9285 16.3032C16.1871 16.0447 16.4456 15.7769 16.7042 15.5184C18.6433 13.5793 18.6433 11.0677 16.7042 9.12861L14.1834 6.6078C13.8971 6.32156 13.6016 6.02608 13.3246 5.7306C12.7706 5.1581 12.1889 4.56714 11.5887 4.01312C10.693 3.12668 9.62189 2.65576 8.49537 2.65576C7.36886 2.65576 6.27928 3.12668 5.3559 4.01312C5.34667 4.02235 5.34667 4.02235 5.33744 4.03159L2.19797 7.19876C1.01605 8.38068 0.341985 9.82114 0.194245 11.4924C-0.0273642 14.1887 0.766737 16.7003 1.37616 18.3439C2.87203 22.379 5.10659 26.1187 8.43997 30.1261C12.4843 34.9554 17.3505 38.7689 22.9092 41.4559C25.033 42.4624 27.8678 43.6535 31.0349 43.8567C31.2288 43.8659 31.432 43.8752 31.6166 43.8752C33.7496 43.8752 35.541 43.1088 36.9445 41.5852C36.9538 41.5667 36.9722 41.5575 36.9815 41.539C37.4616 40.9573 38.0156 40.431 38.5974 39.8677C38.9944 39.4891 39.4007 39.0921 39.7977 38.6766C40.7119 37.7255 41.192 36.6174 41.192 35.4817C41.192 34.3367 40.7026 33.2379 39.77 32.3145L34.7007 27.2267ZM38.0064 36.9499C37.9972 36.9499 37.9972 36.9591 38.0064 36.9499C37.6463 37.3377 37.2769 37.6886 36.8799 38.0764C36.2797 38.6489 35.6703 39.2491 35.0978 39.9231C34.1652 40.9204 33.0663 41.3913 31.6259 41.3913C31.4874 41.3913 31.3396 41.3913 31.2011 41.382C28.4587 41.2066 25.9102 40.1355 23.9988 39.2214C18.7725 36.6913 14.1834 33.0994 10.3698 28.5472C7.22112 24.7521 5.11583 21.2433 3.72153 17.4759C2.8628 15.1767 2.54885 13.3854 2.68735 11.6956C2.77969 10.6152 3.19521 9.71957 3.96161 8.95317L7.11031 5.80447C7.56277 5.37971 8.04292 5.14887 8.51384 5.14887C9.09557 5.14887 9.56649 5.49975 9.86197 5.79523C9.8712 5.80447 9.88043 5.8137 9.88967 5.82293C10.4529 6.34926 10.9885 6.89405 11.5517 7.47577C11.838 7.77125 12.1335 8.06673 12.4289 8.37144L14.9498 10.8923C15.9285 11.871 15.9285 12.7759 14.9498 13.7547C14.682 14.0225 14.4234 14.2903 14.1557 14.5488C13.38 15.3429 12.6413 16.0816 11.838 16.8018C11.8195 16.8203 11.8011 16.8295 11.7918 16.848C10.9977 17.6421 11.1455 18.4177 11.3117 18.9441C11.3209 18.9718 11.3301 18.9995 11.3394 19.0272C11.995 20.6154 12.9183 22.1112 14.3219 23.8934L14.3311 23.9026C16.8796 27.0421 19.5666 29.489 22.5307 31.3634C22.9092 31.6035 23.2971 31.7974 23.6664 31.9821C23.9988 32.1483 24.3128 32.3053 24.5805 32.4715C24.6175 32.49 24.6544 32.5177 24.6913 32.5361C25.0053 32.6931 25.3008 32.767 25.6055 32.767C26.3719 32.767 26.852 32.2868 27.009 32.1298L30.167 28.9719C30.4809 28.658 30.9795 28.2794 31.5612 28.2794C32.1337 28.2794 32.6047 28.6395 32.8909 28.9534C32.9001 28.9627 32.9001 28.9627 32.9094 28.9719L37.9972 34.0597C38.9482 35.0015 38.9482 35.9711 38.0064 36.9499Z" />
<path d="M23.7683 10.5319C26.1875 10.9382 28.3851 12.0832 30.1395 13.8376C31.8939 15.592 33.0297 17.7897 33.4452 20.2089C33.5468 20.8183 34.0731 21.2431 34.6733 21.2431C34.7471 21.2431 34.8118 21.2338 34.8857 21.2246C35.5689 21.1138 36.0214 20.4674 35.9106 19.7842C35.412 16.8571 34.0269 14.1885 31.9124 12.074C29.7979 9.95945 27.1293 8.57439 24.2022 8.07577C23.5189 7.96497 22.8818 8.41742 22.7618 9.09148C22.6417 9.76554 23.085 10.4211 23.7683 10.5319Z" />
<path d="M43.8237 19.424C43.0019 14.604 40.7304 10.218 37.24 6.72766C33.7496 3.23731 29.3636 0.965807 24.5436 0.144004C23.8695 0.0239658 23.2324 0.485653 23.1124 1.15972C23.0016 1.84301 23.454 2.48014 24.1373 2.60018C28.4402 3.32964 32.3646 5.3703 35.4856 8.48207C38.6066 11.6031 40.638 15.5274 41.3675 19.8303C41.4691 20.4398 41.9954 20.8645 42.5956 20.8645C42.6694 20.8645 42.7341 20.8553 42.8079 20.846C43.482 20.7445 43.9437 20.0981 43.8237 19.424Z" />
</g>
<defs>
<clipPath id="clip0_153_52">
<rect width="43.75" height="43.75" fill="white" transform="translate(0.125 0.125)" />
</clipPath>
</defs>
</svg>
</div>
<div class="text">
<h4>Phone</h4>
{{-- <a href="tel:+012-3456-789102">012-3456-789102</a> <br> --}}
<a href="tel:+012-3456-789102">+2347059162814</a>
</div>
</li>
</ul>
<div class="contact-image-area">
{{-- <img src="assets/images/bg/contat.jpg" style="height: 500px; width: 100%" alt="image" class="contact-img wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms"> --}}
</div>
</div>
</div>
</div>
</div>


<!-- FOOTER -->
@include('footer')

</body>

<!-- Mirrored from demo.egenslab.com/html/Equity Law Firm/preview/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2023 16:59:14 GMT -->
</html>