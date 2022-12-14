@include('header')
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Image Gallery</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item active">Pages</li>
                        <li class="breadcrumb-item active">Image Gallery</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <p>All pictures taken from <a href="https://pexels.com/" target="_blank">pexels.com</a></p>
                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tem/assets/images/image-gallery/1.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('tem/assets/images/image-gallery/1.jpg')}}" alt=""> </a> </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tem/assets/images/image-gallery/2.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('tem/assets/images/image-gallery/2.jpg')}}" alt=""> </a> </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tem/assets/images/image-gallery/3.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('tem/assets/images/image-gallery/3.jpg')}}" alt=""> </a> </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tem/assets/images/image-gallery/4.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('tem/assets/images/image-gallery/4.jpg')}}" alt=""> </a> </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tem/assets/images/image-gallery/5.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('tem/assets/images/image-gallery/5.jpg')}}" alt=""> </a> </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tem/assets/images/image-gallery/6.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('tem/assets/images/image-gallery/6.jpg')}}" alt=""> </a> </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tem/assets/images/image-gallery/7.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('tem/assets/images/image-gallery/7.jpg')}}" alt=""> </a> </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tem/assets/images/image-gallery/8.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('tem/assets/images/image-gallery/8.jpg')}}" alt=""> </a> </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tem/assets/images/image-gallery/9.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('tem/assets/images/image-gallery/9.jpg')}}" alt=""> </a> </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tem/assets/images/image-gallery/10.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('tem/assets/images/image-gallery/10.jpg')}}" alt=""> </a> </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tem/assets/images/image-gallery/11.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('tem/assets/images/image-gallery/11.jpg')}}" alt=""> </a> </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tem/assets/images/image-gallery/12.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('tem/assets/images/image-gallery/12.jpg')}}" alt=""> </a> </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tem/assets/images/image-gallery/13.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('tem/assets/images/image-gallery/13.jpg')}}" alt=""> </a> </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tem/assets/images/image-gallery/14.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('tem/assets/images/image-gallery/14.jpg')}}" alt=""> </a> </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tem/assets/images/image-gallery/15.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('tem/assets/images/image-gallery/15.jpg')}}" alt=""> </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')