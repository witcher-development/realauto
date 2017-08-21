@if($articles)
    <!-- Blog body start-->
    <div class="blog-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">

                @foreach($articles as $article)
                    <!-- blog box start-->
                        <div class="thumbnail blog-box clearfix">
                            <img src="{{asset($article->img)}}" alt="full-blog-01">
                            <!-- detail -->
                            <div class="caption detail">
                                <!-- Title -->
                                <h1 class="title">
                                    <a href="{{route('blog.show',['alias'=>$article->alias])}}">{{$article->title}}</a>
                                </h1>
                                <!-- Post Materials-->
                                <div class="post-materials">
                                    <div class="header">
                                        <i class="fa fa-clock-o"></i> 8 MAY 2016
                                    </div>
                                    <!-- paragraph -->
                                    <p>{{$article->review}}</p>
                                    <!-- Btn -->
                                    <a href="{{route('blog.show',['alias'=>$article->alias])}}" class="btn btn-read-more">Читать</a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog box end-->
                    @endforeach
                    {{$articles->links()}}
                </div>
            </div>
        </div>
    </div>
    <!-- Blog-body end-->

@endif