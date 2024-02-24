




@include('layouts')
<body class="">




<!-- HEADER -->
@include('nav')



<form action="/blog/{{$post->id}}" method="post">
    @csrf
    @method('delete')
    <div class="form-column mx-auto col-8 col-md-8 col-lg-8" >
        <h3 >Are you sure you want to delete post {{$post->title}}?</h3> 
        <button type="submit">Delete</button>
        <a href="/blog">Cancel</a>
    </div>
    {{-- --}}
 
</form>


    @include('footer')

</body>

<!-- Mirrored from demo.egenslab.com/html/Equity Law Firm/preview/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2023 16:59:14 GMT -->
</html>