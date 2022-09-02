@include('header')
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Inbox</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item active">Inbox</li>
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
                <div class="col-md-12">
                    <div class="d-flex">
                        <div class="mobile-left">
                            <a class="btn btn-info btn-icon toggle-email-nav collapsed" data-toggle="collapse" href="#email-nav" role="button" aria-expanded="false" aria-controls="email-nav">
                                <span class="btn-label"><i class="zmdi zmdi-more"></i></span>
                            </a>
                        </div>
                        <div class="inbox left" id="email-nav">
                            <div class="mail-compose mb-4">
                                <a href="mail-compose.html" class="btn btn-danger btn-block">Compose</a>
                            </div>
                            <div class="mail-side">
                                <ul class="nav">
                                    <li class="active"><a href="mail-inbox.html"><i class="zmdi zmdi-inbox"></i>Inbox<span class="badge badge-primary">6</span></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-mail-send"></i>Sent</a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-badge-check"></i>Important </a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-file"></i>Draft<span class="badge badge-info">3</span></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-email"></i>All Mail</a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-alert-circle"></i>Spam<span class="badge badge-warning">6</span></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-delete"></i>Trash<span class="badge badge-danger">9</span></a></li>
                                </ul>
                                <h3 class="label">Labels</h3>
                                <ul class="nav">
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-label text-danger"></i>UI Project<span class="badge badge-primary">5</span></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-label text-info"></i>Marketing</a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-label text-dark"></i>Payout</a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-label text-primary"></i>Meeting</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="inbox right">
                            <div class="i_action d-flex justify-content-between align-items-center">
                                <div class="">
                                    <div class="checkbox simple d-inline-block mr-3">
                                        <input id="mc0" type="checkbox">
                                        <label for="mc0"></label>
                                    </div>
                                    <div class="btn-group">
                                        <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm"><i class="zmdi zmdi-refresh"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm"><i class="zmdi zmdi-archive"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm"><i class="zmdi zmdi-delete"></i></a>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Labels</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">UI Project</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Marketing</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Payout</a>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Mark as read</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Mark as unread</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Spam</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pagination-email">
                                    <span>1-50/295</span>
                                    <div class="btn-group ml-3">
                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="zmdi zmdi-chevron-left"></i></button>
                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="zmdi zmdi-chevron-right"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table c_table inbox_table">
                                    <tr>
                                        <td class="chb">
                                            <div class="checkbox simple">
                                                <input id="mc1" type="checkbox">
                                                <label for="mc1"></label>
                                            </div>
                                        </td>
                                        <td class="starred active"><a href="javascript:void(0);"><i class="zmdi zmdi-star"></i></a></td>
                                        <td class="u_image"><img src="{{asset('tem/assets/images/xs/avatar1.jpg')}}" alt="user" class="rounded" width="30"></td>
                                        <td class="u_name"><h5 class="font-15 mt-0 mb-0">Maryam Amiri</h6></td>
                                        <td class="max_ellipsis">
                                            <a class="link" href="mail-single.html">
                                                <span class="badge badge-primary mr-2">Work</span>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            </a>
                                        </td>
                                        <td class="clip"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="time">9:30 AM</td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="chb">
                                            <div class="checkbox simple">
                                                <input id="mc2" type="checkbox">
                                                <label for="mc2"></label>
                                            </div>
                                        </td>
                                        <td class="starred"><a href="javascript:void(0);"><i class="zmdi zmdi-star"></i></a></td>
                                        <td class="u_image"><img src="{{asset('tem/assets/images/xs/avatar2.jpg')}}" alt="user" class="rounded" width="30"></td>
                                        <td class="u_name"><h5 class="font-15 mt-0 mb-0">Hossein Shams</h6></td>
                                        <td class="max_ellipsis">
                                            <a class="link" href="mail-single.html">
                                                <span class="badge badge-info mr-2">Marketing</span>
                                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
                                            </a>
                                        </td>
                                        <td class="clip"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="time">9:30 AM</td>
                                    </tr>
                                    <tr>
                                        <td class="chb">
                                            <div class="checkbox simple">
                                                <input id="mc3" type="checkbox">
                                                <label for="mc3"></label>
                                            </div>
                                        </td>
                                        <td class="starred"><a href="javascript:void(0);"><i class="zmdi zmdi-star"></i></a></td>
                                        <td class="u_image"><img src="{{asset('tem/assets/images/xs/avatar3.jpg')}}" alt="user" class="rounded" width="30"></td>
                                        <td class="u_name"><h5 class="font-15 mt-0 mb-0">Frank Camly</h6></td>
                                        <td class="max_ellipsis">
                                            <a class="link" href="mail-single.html">
                                                <span class="badge badge-danger mr-2">Ui Project</span>
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                                            </a>
                                        </td>
                                        <td class="clip"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="time">9:30 AM</td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="chb">
                                            <div class="checkbox simple">
                                                <input id="mc4" type="checkbox">
                                                <label for="mc4"></label>
                                            </div>
                                        </td>
                                        <td class="starred"><a href="javascript:void(0);"><i class="zmdi zmdi-star"></i></a></td>
                                        <td class="u_image"><img src="{{asset('tem/assets/images/xs/avatar4.jpg')}}" alt="user" class="rounded" width="30"></td>
                                        <td class="u_name"><h5 class="font-15 mt-0 mb-0">Tim Hank</h6></td>
                                        <td class="max_ellipsis">
                                            <a class="link" href="mail-single.html">
                                                <span class="badge badge-default mr-2">Payout</span>
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC
                                            </a>
                                        </td>
                                        <td class="clip"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="time">9:30 AM</td>
                                    </tr>
                                    <tr>
                                        <td class="chb">
                                            <div class="checkbox simple">
                                                <input id="mc5" type="checkbox">
                                                <label for="mc5"></label>
                                            </div>
                                        </td>
                                        <td class="starred"><a href="javascript:void(0);"><i class="zmdi zmdi-star"></i></a></td>
                                        <td class="u_image"><img src="{{asset('tem/assets/images/xs/avatar5.jpg')}}" alt="user" class="rounded" width="30"></td>
                                        <td class="u_name"><h5 class="font-15 mt-0 mb-0">Maryam Amiri</h6></td>
                                        <td class="max_ellipsis">
                                            <a class="link" href="mail-single.html">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            </a>
                                        </td>
                                        <td class="clip"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="time">9:30 AM</td>
                                    </tr>
                                    <tr>
                                        <td class="chb">
                                            <div class="checkbox simple">
                                                <input id="mc6" type="checkbox">
                                                <label for="mc6"></label>
                                            </div>
                                        </td>
                                        <td class="starred"><a href="javascript:void(0);"><i class="zmdi zmdi-star"></i></a></td>
                                        <td class="u_image"><img src="{{asset('tem/assets/images/xs/avatar6.jpg')}}" alt="user" class="rounded" width="30"></td>
                                        <td class="u_name"><h5 class="font-15 mt-0 mb-0">Brielle Williamson</h6></td>
                                        <td class="max_ellipsis">
                                            <a class="link" href="mail-single.html">
                                                <span class="badge badge-info mr-2">Marketing</span>
                                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
                                            </a>
                                        </td>
                                        <td class="clip"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="time">9:30 AM</td>
                                    </tr>
                                    <tr>
                                        <td class="chb">
                                            <div class="checkbox simple">
                                                <input id="mc7" type="checkbox">
                                                <label for="mc7"></label>
                                            </div>
                                        </td>
                                        <td class="starred"><a href="javascript:void(0);"><i class="zmdi zmdi-star"></i></a></td>
                                        <td class="u_image"><img src="{{asset('tem/assets/images/xs/avatar7.jpg')}}" alt="user" class="rounded" width="30"></td>
                                        <td class="u_name"><h5 class="font-15 mt-0 mb-0">Brenden Wagner</h6></td>
                                        <td class="max_ellipsis">
                                            <a class="link" href="mail-single.html">
                                                <span class="badge badge-danger mr-2">Ui Project</span>
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                                            </a>
                                        </td>
                                        <td class="clip"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="time">9:30 AM</td>
                                    </tr>
                                    <tr>
                                        <td class="chb">
                                            <div class="checkbox simple">
                                                <input id="mc8" type="checkbox">
                                                <label for="mc8"></label>
                                            </div>
                                        </td>
                                        <td class="starred"><a href="javascript:void(0);"><i class="zmdi zmdi-star"></i></a></td>
                                        <td class="u_image"><img src="{{asset('tem/assets/images/xs/avatar4.jpg')}}" alt="user" class="rounded" width="30"></td>
                                        <td class="u_name"><h5 class="font-15 mt-0 mb-0">Angelica Ramos</h6></td>
                                        <td class="max_ellipsis">
                                            <a class="link" href="mail-single.html">
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC
                                            </a>
                                        </td>
                                        <td class="clip"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="time">9:30 AM</td>
                                    </tr>
                                    <tr>
                                        <td class="chb">
                                            <div class="checkbox simple">
                                                <input id="mc9" type="checkbox">
                                                <label for="mc9"></label>
                                            </div>
                                        </td>
                                        <td class="starred"><a href="javascript:void(0);"><i class="zmdi zmdi-star"></i></a></td>
                                        <td class="u_image"><img src="{{asset('tem/assets/images/xs/avatar1.jpg')}}" alt="user" class="rounded" width="30"></td>
                                        <td class="u_name"><h5 class="font-15 mt-0 mb-0">Ashton Cox</h6></td>
                                        <td class="max_ellipsis">
                                            <a class="link" href="mail-single.html">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            </a>
                                        </td>
                                        <td class="clip"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="time">10:30 AM</td>
                                    </tr>
                                    <tr>
                                        <td class="chb">
                                            <div class="checkbox simple">
                                                <input id="mc10" type="checkbox">
                                                <label for="mc10"></label>
                                            </div>
                                        </td>
                                        <td class="starred"><a href="javascript:void(0);"><i class="zmdi zmdi-star"></i></a></td>
                                        <td class="u_image"><img src="{{asset('tem/assets/images/xs/avatar5.jpg')}}" alt="user" class="rounded" width="30"></td>
                                        <td class="u_name"><h5 class="font-15 mt-0 mb-0">Maryam Amiri</h6></td>
                                        <td class="max_ellipsis">
                                            <a class="link" href="mail-single.html">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            </a>
                                        </td>
                                        <td class="clip"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="time">9:30 AM</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('footer')