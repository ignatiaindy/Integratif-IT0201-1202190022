@include('partial.header')
<!doctype html>
<html class="no-js" lang="en">



        <!-- Start Banner Area -->
        <h1 class="d-none">Home Default Blog</h1>
        <div class="slider-area bg-color-grey">
            <div class="axil-slide slider-style-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider-activation axil-slick-arrow">
                                <!-- Start Single Slide  -->
                                <div class="content-block">
                                    <!-- Start Post Thumbnail  -->
                                    @if ($index->count())
                                    <div class="post-thumbnail">
                                        <a href="post-details.html">
                                            <img src="{{$index[0]->img_url}}" alt="Post Images">
                                        </a>
                                    </div>
                                    <!-- End Post Thumbnail  -->

                                    <!-- Start Post Content  -->
                                    <div class="post-content">
                                        <div class="post-cat">
                                            <div class="post-cat-list">
                                                <a class="hover-flip-item-wrapper" href="#">
                                                    <span class="hover-flip-item">
                                                        <span data-text="NEWS">NEWS</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <h2 class="title"><a href="{{$index[0]->source_url}}">{{$index[0]->title}}</a></h2>
                                        
                                        <!-- Post Meta  -->
                                        <div class="post-meta-wrapper with-button">
                                            <div class="post-meta">
                                                <!-- <div class="post-author-avatar border-rounded">
                                                    <img src="assets/images/post-images/author/author-image-3.png" alt="Author Images">
                                                </div>
                                                <div class="content">
                                                    <h6 class="post-author-name">
                                                        <a class="hover-flip-item-wrapper" href="author.html">
                                                            <span class="hover-flip-item">
                                                                <span data-text="Rahabi Khan">Rahabi Khan</span>
                                                            </span>
                                                        </a>
                                                    </h6> -->
                                                    <ul class="post-meta-list">
                                                        <li>{{$index[0]->description}}</li>
                                                    </ul>
                                                <!-- </div> -->
                                            </div>
                                            <div class="read-more-button cerchio">
                                                <a class="axil-button button-rounded hover-flip-item-wrapper" href="{{$index[0]->source_url}}">
                                                    <span class="hover-flip-item">
                                                        <span data-text="Read Post">Read Post</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- End Post Content  -->
                                </div>
                                <!-- End Single Slide  -->

                                <!-- Start Single Slide  -->
                                <div class="content-block">
                                    <!-- Start Post Thumbnail  -->
                                    <div class="post-thumbnail">
                                        <a href="post-details.html">
                                            <img src="{{$index[91]->img_url}}" alt="Post Images">
                                        </a>
                                    </div>
                                    <!-- End Post Thumbnail  -->
                                    <!-- Start Post Content  -->
                                    <div class="post-content">
                                        <div class="post-cat">
                                            <div class="post-cat-list">
                                                <a class="hover-flip-item-wrapper" href="#">
                                                    <span class="hover-flip-item">
                                                        <span data-text="NEWS">NEWS</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <h2 class="title"><a href="{{$index[91]->source_url}}">{{$index[91]->title}}</a></h2>

                                        <!-- Post Meta  -->
                                        <div class="post-meta-wrapper with-button">
                                            <div class="post-meta">
                                                <!-- <div class="post-author-avatar border-rounded">
                                                    <img src="assets/images/post-images/author/author-image-1.png" alt="Author Images">
                                                </div>
                                                <div class="content">
                                                    <h6 class="post-author-name">
                                                        <a class="hover-flip-item-wrapper" href="author.html">
                                                            <span class="hover-flip-item">
                                                                <span data-text="Syed Tahmim">Syed Tahmim</span>
                                                            </span>
                                                        </a>

                                                    </h6> -->
                                                    <ul class="post-meta-list">
                                                        <li>{{$index[91]->description}}</li>
                                                    </ul>
                                                <!-- </div> -->
                                            </div>
                                            <div class="read-more-button cerchio">
                                                <a class="axil-button button-rounded hover-flip-item-wrapper" href="{{$index[91]->source_url}}">
                                                    <span class="hover-flip-item">
                                                        <span data-text="Read Post">Read Post</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- End Post Content  -->
                                </div>
                                <!-- End Single Slide  -->

                                <!-- Start Single Slide  -->
                                <div class="content-block">
                                    <!-- Start Post Thumbnail  -->
                                    <div class="post-thumbnail">
                                        <a href="post-details.html">
                                            <img src="{{$index[125]->img_url}}" alt="Post Images">
                                        </a>
                                    </div>
                                    <!-- End Post Thumbnail  -->
                                    <!-- Start Post Content  -->
                                    <div class="post-content">
                                        <div class="post-cat">
                                            <div class="post-cat-list">
                                                <a class="hover-flip-item-wrapper" href="#">
                                                    <span class="hover-flip-item">
                                                        <span data-text="NEWS">NEWS</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <h2 class="title"><a href="{{$index[125]->source_url}}">{{$index[125]->title}}</a></h2>

                                        <!-- Post Meta  -->
                                        <div class="post-meta-wrapper with-button">
                                            <div class="post-meta">
                                                <!-- <div class="post-author-avatar border-rounded">
                                                    <img src="assets/images/post-images/author/author-image-2.png" alt="Author Images">
                                                </div>
                                                <div class="content">
                                                    <h6 class="post-author-name">
                                                        <a class="hover-flip-item-wrapper" href="author.html">
                                                            <span class="hover-flip-item">
                                                                <span data-text="Ismat Jahan">Ismat Jahan</span>
                                                            </span>
                                                        </a>

                                                    </h6> -->
                                                    <ul class="post-meta-list">
                                                        <li>{{$index[125]->description}}</li>
                                                    </ul>
                                                <!-- </div> -->
                                            </div>
                                            <div class="read-more-button cerchio">
                                                <a class="axil-button button-rounded hover-flip-item-wrapper" href="{{$index[125]->source_url}}">
                                                    <span class="hover-flip-item">
                                                        <span data-text="Read Post">Read Post</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <!-- End Post Content  -->
                                </div>
                                <!-- End Single Slide  -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Area -->

        <!-- Start Featured Area  -->
        @if ($index->count())
        <div class="axil-featured-post axil-section-gap bg-color-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="title">More Featured Posts.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Single Post  -->
                    <div class="col-lg-6 col-xl-6 col-md-12 col-12 mt--30">
                        <div class="content-block content-direction-column axil-control is-active post-horizontal thumb-border-rounded">
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="NEWS">NEWS</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="{{$index[1]->source_url}}">{{$index[1]->title}}</a></h4>
                                <div class="post-meta">
                                    
                                    <div class="content">
                                        <h6 class="post-author-name">
                                            <a class="hover-flip-item-wrapper" href="author.html">
                                                
                                            </a>
                                        </h6>
                                        <ul class="post-meta-list">
                                            <li>{{$index[1]->description}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="post-thumbnail">
                                <a href="{{$index[1]->source_url}}">
                                    <img src="{{$index[1]->img_url}}" alt="Post Images">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Post  -->

                    <!-- Start Single Post  -->
                    <div class="col-lg-6 col-xl-6 col-md-12 col-12 mt--30">
                        <div class="content-block content-direction-column axil-control post-horizontal  thumb-border-rounded">
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="NEWS">NEWS</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="{{$index[92]->source_url}}">{{$index[92]->title}}</a></h4>
                                <div class="post-meta">
                                    <div class="content">
                                        <h6 class="post-author-name">
                                            <a class="hover-flip-item-wrapper" href="author.html">
                                            </a>
                                        </h6>
                                        <ul class="post-meta-list">
                                            <li>{{$index[92]->description}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="post-thumbnail">
                                <a href="{{$index[92]->source_url}}">
                                    <img src="{{$index[92]->img_url}}" alt="Post Images">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Post  -->
                </div>
            </div>
        </div>
        @endif
        <!-- End Featured Area  -->


                            

        <!-- Start Post List Wrapper  -->
        <div class="axil-post-list-area post-listview-visible-color axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-8">
                        
                        <!-- Start Post List  -->
                        @foreach ($index->slice(3,5) as $index)
                        <div class="content-block post-list-view axil-control is-active mt--30">
                            <div class="post-thumbnail">
                                <a href="{$index->source_url}}">
                                    <img src="{{$index->img_url}}" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="NEWS">NEWS</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="{$index->source_url}}">{{$index->title}}</a></h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <ul class="post-meta-list">
                                                <li>{{$index->description}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- End Post List  -->

                     




        
</html>
@include('partial.footer')