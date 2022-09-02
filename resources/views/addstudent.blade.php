@include('header')

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Student</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Student Form</a></li>
                        <li class="breadcrumb-item active">Student Form</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <form action="stdinsert" method="post">
                                @csrf
                                @foreach($data as $dat)
                                <label for="email_address">student name</label>
                                <div class="form-group">
                                    <input type="text" name="stdname" id="stdid" class="form-control" value="{{>dat->student-id}}" placeholder="Enter your name">
                                </div>

                                <label for="password">roll number</label>
                                <div class="form-group">
                                    <input type="text" name="stdroll" id="password" class="form-control" value="{{>dat->student-roll}}"  new="prime" placeholder="Enter your roll number">
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
                                @endforeach

                            </form>

            <!-- Striped Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2> <strong>Striped</strong> Rows</h2>
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
                            <p>Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code></p>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>FIRST NAME</th>
                                            <th>LAST NAME</th>
                                            <th>USERNAME</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Larry</td>
                                            <td>Jellybean</td>
                                            <td>@lajelly</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Larry</td>
                                            <td>Kikat</td>
                                            <td>@lakitkat</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Hover Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Hover</strong> Rows</h2>
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
                            <p>Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>FIRST NAME</th>
                                            <th>LAST NAME</th>
                                            <th>USERNAME</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                       @foreach($getdata as $data)
                                       <tr>
                                       <td> {{$data->std_id}} </td>

                                       <td> <a href="student/{{$data->id}}">Edit</a> </td>
                                       <td> {{$data->std_name}}</td>
                                       <td> {{$data->std_roll}} </td>
                                       </tr>
                                       @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Rows -->
        </div>
    </div>
</section>

@include('footer')
