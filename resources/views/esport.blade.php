@include('partial.header')
<!doctype html>
<html class="no-js" lang="en">

        <!-- Start Breadcrumb Area  -->
        <div class="axil-breadcrumb-area breadcrumb-style-1 bg-color-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner">
                            <h1 class="page-title">E-Sport</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area  -->
        <!-- Start Post List Wrapper  -->
        <div class="axil-post-list-area axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                
                    <div class="col-lg-8 col-xl-8">
                    @foreach($index as $index)
                        <!-- Start Post List  -->
                        <div class="content-block post-list-view mt--30">
                          
                            <div class="post-thumbnail">
                                <a href="{{$index -> source_url}}">
                                    <img src="{{$index -> img_url}}" alt="Post Images">
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="ESPORT NEWS">ESPORT NEWS</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="{{$index->source_url}}">{{$index->title}}</a></h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <ul class="post-meta-list">
                                                <li>{{$index->description}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                         
                        </div>
                        @endforeach
                        <!-- End Post List  -->


                    </div>
                  
                    <div class="col-lg-4 col-xl-4 mt_md--40 mt_sm--40">
                        <!-- Start Sidebar Area  -->
                        <div class="sidebar-inner">

                            <!-- Start Single Widget  -->
                           
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget widget widget_postlist mb--30">
                                <h5 class="widget-title">Popular on InFeed</h5>
                                <!-- Start Post List  -->
                                <div class="post-medium-block">
                               
                                    <!-- Start Single Post  -->
                                    <div class="content-block post-medium mb--20">
                                        <div class="post-thumbnail">
                                            <a href="{{$index -> source_url}}">
                                                <img src="{{$index -> img_url}}" alt="Post Images">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <h6 class="title"><a href="{{$index -> source_url}}">{{$index->title}} </a></h6>
                                            <div class="post-meta">
                                                <ul class="post-meta-list">
                                                    <li>{{$index -> description}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <!-- End Single Post  -->

                                    
                                   



                    </div>
                   
                </div>
            </div>
        </div>
        <!-- End Post List Wrapper  -->
       

        
</html>
@include('partial.footer')