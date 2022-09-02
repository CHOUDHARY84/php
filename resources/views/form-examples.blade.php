@include('header')
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>student form</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Form Examples</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="alert alert-warning" role="alert">
                        <strong>Bootstrap</strong> Better check yourself, <a target="_blank" href="https://getbootstrap.com/docs/4.2/components/forms/">View More</a>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
                        </button>
                    </div>
                    <div class="card">
                        <div class="header">
                            
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        <form action="stdinsert" method="post"> 
                                @csrf
                                <label for="email_address">student name</label>
                                <div class="form-group">                                
                                    <input type="text" name="stdname" id="std" class="form-control" placeholder="Enter your name">
                                </div>
                            
                                <label for="password">roll number</label>
                                <div class="form-group">                                
                                    <input type="text" name="stdroll" id="password" class="form-control" placeholder="Enter your roll number">
                                </div>
                                <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <label for="password">Father Name</label>                                    
                                        <input type="text" class="form-control" placeholder="col-sm-6" />                                   
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">   
                                    <label for="password">Father Name</label>                                
                                        <input type="text" class="form-control" placeholder="col-sm-6" />                                    
                                    </div>
                                </div>
                            </div>
                                <div class="checkbox">
                                    <input id="remember_me" type="checkbox">
                                    <label for="remember_me">
                                            Remember Me
                                    </label>
                                </div>
                                <input type="submit" value="submit" name="click">
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>

          

          

        </div>
    </div>
</section>
@include('footer')