




@include('layouts')
<body class="">




<!-- HEADER -->
@include('nav')



<div class="casestudy-details pt-120 pb-120">
    <div class="container">
    <div class="row gy-5">
    <div class="col-lg-8">
    <div class="case-details-single">
    <img src="{{asset('images/' . $post->picture)}}" alt="image" class="img-fluid">
    <h2>{{$post->title}}</h2>
    <p>{{$post->description}}</p>
    
    <p class="para mb-30">{{$post->content}}</p>
    
    </div>
    </div>
    </div>
    </div>
</div>

    @include('footer')

</body>

<!-- Mirrored from demo.egenslab.com/html/Equity Law Firm/preview/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2023 16:59:14 GMT -->
</html>