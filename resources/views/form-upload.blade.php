﻿@include('header')
<section class="content">
     <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>File Upload</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">File Upload</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-12">
                    <div class="alert alert-warning" role="alert">
                        <strong>dropify</strong> Taken from: <a target="_blank" href="https://github.com/JeremyFagis/dropify">View More</a>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Default</h2>
                        </div>
                        <div class="body">
                            <input type="file" class="dropify">
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>With <strong>event</strong> and default file</h2>
                        </div>
                        <div class="body">
                            <p>try to remove the image</p>
                            <input type="file" id="dropify-event" data-default-file="{{asset('tem/assets/images/image-gallery/1.jpg')}}">
                        </div>
                    </div>                    
                    <div class="card">
                        <div class="header">
                            <h2><strong>Disabled</strong> file upload</h2>
                        </div>
                        <div class="body">
                            <input type="file" class="dropify" disabled="disabled">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Limit</strong> file type</h2>
                        </div>
                        <div class="body">
                            <p>try to upload png or pdf only</p>
                            <input type="file" class="dropify" data-allowed-file-extensions="pdf png">
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>Limit</strong> file size</h2>
                        </div>
                        <div class="body">
                            <p>try to upload file larger than 100 KB</p>
                            <input type="file" class="dropify" data-max-file-size="100K">
                        </div>
                    </div>                    
                    <div class="card">
                        <div class="header">
                            <h2>Custom <strong>messages</strong> for default</h2>
                        </div>
                        <div class="body">
                            <p>replace, remove and error</p>
                            <input type="file" class="dropify-fr">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('footer')