@include('header')
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Dialogs</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Components</a></li>
                        <li class="breadcrumb-item active">Dialogs</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix js-sweetalert">
                <div class="col-md-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0 c_table">
                                <tr>
                                    <td><button class="btn btn-raised btn-primary waves-effect" data-type="basic">CLICK ME</button></td>
                                    <td><span>A basic message</span></td>
                                </tr>
                                <tr>
                                    <td><button class="btn btn-raised btn-primary waves-effect" data-type="with-title">CLICK ME</button></td>
                                    <td><span>A title with a text under</span></td>
                                </tr>
                                <tr>
                                    <td><button class="btn btn-raised btn-primary waves-effect" data-type="success">CLICK ME</button></td>
                                    <td><span>A success message!</span></td>
                                </tr>
                                <tr>
                                    <td><button class="btn btn-raised btn-primary waves-effect" data-type="confirm">CLICK ME</button></td>
                                    <td><span>A warning message, with a function attached to the <b>Confirm</b> button...</span></td>
                                </tr>
                                <tr>
                                    <td><button class="btn btn-raised btn-primary waves-effect" data-type="html-message">CLICK ME</button></td>
                                    <td><span>An HTML message</span></td>
                                </tr>
                                <tr>
                                    <td><button class="btn btn-raised btn-primary waves-effect" data-type="autoclose-timer">CLICK ME</button></td>
                                    <td><span>A message with auto close timer</span></td>
                                </tr>
                                <tr>
                                    <td><button class="btn btn-raised btn-primary waves-effect" data-type="we-set-buttons">CLICK ME</button></td>
                                    <td><span>In the example below, we set 3 buttons</span></td>
                                </tr>
                                <tr>
                                    <td><button class="btn btn-raised btn-primary waves-effect" data-type="AJAX-requests">CLICK ME</button></td>
                                    <td><span>AJAX requests</span></td>
                                </tr>
                                <tr>
                                    <td><button class="btn btn-raised btn-primary waves-effect" data-type="DOM-content">CLICK ME</button></td>
                                    <td><span>Using DOM nodes as content</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('footer')