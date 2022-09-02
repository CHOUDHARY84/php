@include('header')
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Editors</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Editors</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>

        <div class="container-fluid">
        <form action="stdinsert" method="post"> 
                                @csrf
                                <label for="email_address">student name</label>
                                <div class="form-group">                                
                                    <input type="text" name="stdname" id="std" class="form-control" placeholder="Enter your name">
                                </div>
                                <label for="fname">Father Name</label>
                                <div class="form-group">                                
                                    <input type="text" name="stdfname" id="password" class="form-control" placeholder="Enter your father name">
                                </div>

                                <label for="rollno">roll number</label>
                                <div class="form-group">                                
                                    <input type="text" name="stdroll" id="stdroll" class="form-control" placeholder="Enter your roll number">
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
            <!-- CKEditor -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2> <strong>CKEditor</strong></h2>
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
                            <p>CKEditor is a ready-for-use HTML text editor designed to simplify web content creation. Taken from <a href="http://ckeditor.com/" target="_blank">ckeditor.com</a></p>
                            <textarea id="ckeditor">
                                <h2>WYSIWYG Editor</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit, porta eget mattis ac, imperdiet quis nisi. Donec non dui et tortor vulputate luctus. Praesent consequat rhoncus velit, ut molestie arcu venenatis sodales.</p>
                                <h3>Lacinia</h3>
                                <ul>
                                    <li>Suspendisse tincidunt urna ut velit ullamcorper fermentum.</li>
                                    <li>Nullam mattis sodales lacus, in gravida sem auctor at.</li>
                                    <li>Praesent non lacinia mi.</li>
                                    <li>Mauris a ante neque.</li>
                                    <li>Aenean ut magna lobortis nunc feugiat sagittis.</li>
                                </ul>
                                <h3>Pellentesque adipiscing</h3>
                                <p>Maecenas quis ante ante. Nunc adipiscing rhoncus rutrum. Pellentesque adipiscing urna mi, ut tempus lacus ultrices ac. Pellentesque sodales, libero et mollis interdum, dui odio vestibulum dolor, eu pellentesque nisl nibh quis nunc. Sed porttitor leo adipiscing venenatis vehicula. Aenean quis viverra enim. Praesent porttitor ut ipsum id ornare.</p>
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CKEditor -->
        </div>
    </div>
</section>
@include('footer')