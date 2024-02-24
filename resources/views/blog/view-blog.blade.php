@include('layouts')
<body class="">
 @include('nav')
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
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
       
        
 
       {{-- // $result is empty --}}

   
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
 {{-- {{ $posts->links() }} --}}
 <div style="col-lg-8">{{ $posts->links() }}
</div>



 @include('footer')
</body>

<!-- Mirrored from demo.egenslab.com/html/Equity Law Firm/preview/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2023 16:59:14 GMT -->
</html>