@extends('mastercompany')


@section('title', 'Lekki Republic Dashboard')

@section('content')

    <div id="outer-wrapper">
        <div id="inner-wrapper">
            @include('pages.includes.sections.adminheader')

            <div class="content-wrapper">
                <div class="content-heading" style="padding-left: 70px;">
                    Dashboard
                    <small data-localize="dashboard.WELCOME">Welcome {{ Auth::user()->full_name }}</small>
                    <span class="pull-right" style="margin-top: -30px;">
                        @if(count(Auth::user()->companies) > 0)
                        @if(Auth::user()->companies->status == 0)
                        <b> Pending Approval</b></span>
                    @endif
                    @endif
                </div>
                <div style="padding : 0px 50px;">
                <!-- START widgets box-->
                <div class="row">

                    @if(count(Auth::user()->companies) > 0)
                        <div class="col-lg-3 col-sm-6">
                            <!-- START widget-->
                            <div class="panel widget bg-green">
                                <div class="row row-table">
                                    <div class="col-xs-4 text-center bg-green-dark pv-lg">
                                        <em class="fa fa-plus fa-3x"></em>
                                    </div>
                                    <div class="col-xs-8 pv-lg">
                                        <div class="h2 mt0">1</div>
                                        <div class="text-uppercase">Business</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- START widget-->
                        <div class="panel widget bg-green">
                            <div class="row row-table">
                                <div class="col-xs-4 text-center bg-green-dark pv-lg">
                                    <em class="fa fa-eye fa-3x"></em>
                                </div>
                                <div class="col-xs-8 pv-lg">
                                    <div class="h2 mt0">1
                                    </div>
                                    <div class="text-uppercase">Total View</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <!-- START widget-->
                        <div class="panel widget bg-green">
                            <div class="row row-table">
                                <div class="col-xs-4 text-center bg-green-dark pv-lg">
                                    <em class="fa fa-pencil fa-3x"></em>
                                </div>
                                <div class="col-xs-8 pv-lg">
                                    <div class="h2 mt0">1</div>
                                    <div class="text-uppercase">Reviews</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <!-- START date widget-->
                        <div class="panel widget">
                            <div class="row row-table">
                                <div class="col-xs-12 text-center bg-green pv-lg">
                                    <div data-now="" data-format="MMMM" class="text-sm">Date</div>
                                    <br>
                                    <div data-now="" data-format="D" class="h2 mt0">{{ \Carbon\Carbon::now()->format('M d') }}</div>
                                </div>

                            </div>
                        </div>
                        <!-- END date widget    -->
                    </div>
                        @else
                        <div class=center-wrapper>
                            <div class=center-content>
                                <div class="row no-margin">
                                    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                                        @include('errors.showerrors')
                                        <div class="text-center mb15"> <img src="{{ url('/assets/img/business2.png') }}"> </div>
                                        <p class=text-left>You can now create your business by clicking the button below.</p>
                                        <div class="text-center">
                                            <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-success">Add Business</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <!-- END widgets box-->
                    @if(count(Auth::user()->companies) != 0)
                <div class="row">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card-box">
                                <h4 class="m-t-0 m-b-20 header-title"><b>Last Reviews</b></h4>

                                <ul class="list-unstyled transaction-list">
                                    <li>
                                        <span class="tran-text">Advertising</span>

                                        <span class="pull-right text-muted">07/09/2015</span>
                                        <span class="clearfix"></span>
                                    </li>

                                    <li>
                                        <span class="tran-text">Support licence</span>
                                        <span class="pull-right text-muted">07/09/2015</span>
                                        <span class="clearfix"></span>
                                    </li>

                                    <li>
                                        <span class="tran-text">Extended licence</span>

                                        <span class="pull-right text-muted">07/09/2015</span>
                                        <span class="clearfix"></span>
                                    </li>

                                    <li>
                                        <span class="tran-text">Advertising</span>

                                        <span class="pull-right text-muted">05/09/2015</span>
                                        <span class="clearfix"></span>
                                    </li>

                                    <li>
                                        <span class="tran-text">New plugins added</span>
                                        <span class="pull-right text-muted">05/09/2015</span>
                                        <span class="clearfix"></span>
                                    </li>

                                    <li>
                                        <span class="tran-text">Google Inc.</span>

                                        <span class="pull-right text-muted">04/09/2015</span>
                                        <span class="clearfix"></span>
                                    </li>

                                    <li>
                                        <span class="tran-text">Facebook Ad</span>
                                        <span class="pull-right text-muted">03/09/2015</span>
                                        <span class="clearfix"></span>
                                    </li>

                                    <li>
                                        <span class="tran-text">New sale</span>

                                        <span class="pull-right text-muted">03/09/2015</span>
                                        <span class="clearfix"></span>
                                    </li>

                                    <li>
                                        <span class="tran-text">Advertising</span>

                                        <span class="pull-right text-muted">29/08/2015</span>
                                        <span class="clearfix"></span>
                                    </li>

                                    <li>
                                        <span class="tran-text">Support licence</span>
                                        <span class="pull-right text-muted">27/08/2015</span>
                                        <span class="clearfix"></span>
                                    </li>


                                </ul>
                            </div>
                        </div> <!-- col-->




                        <div class="col-lg-6">
                            <div class="card-box p-0">
                                <div class="profile-widget text-center">
                                    <div class="bg-custom bg-profile"></div>
                                    <img src="{{ url('/assets/img/avatar.png') }}"  style="height: 150px" class="thumb-lg img-circle img-thumbnail" alt="img">
                                    <h4>{{ ucwords(Auth::user()->full_name) }}</h4>
                                    <a href="#" class="btn btn-sm btn-default m-t-20">Edit Profile</a>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    @endif
                </div>
            </div>
            </div>

            @include('pages.includes.sections.slimfooter')

            <div id="myModal" class="modal fade" role="dialog" style="margin-top: -100px;">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Select Plan</h4>
                        </div>
                        <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-4 col-xs-4  text-center">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item active">
                                                <h4 class="list-group-item-heading">Free Plan</h4>
                                                <h6>Free to get started</h6>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <p class="list-group-item-text">3 images</p>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <p class="list-group-item-text">Review Features</p>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <p class="list-group-item-text"> - </p>
                                            </a><a href="#" class="list-group-item">
                                                <p class="list-group-item-text"> - </p>
                                            </a><a href="#" class="list-group-item">
                                                <p class="list-group-item-text"> - </p>
                                            </a><a href="#" class="list-group-item">
                                                <p class="list-group-item-text"> - </p>
                                            </a>
                                            <a href="{{ url('/selectplan/0') }}" class="list-group-item">
                                                <a href ="{{ url('/selectplan/1') }}" class="btn btn-primary text-center btn-lg btn-block" style="margin: auto">&#x20A6;0 per month</a>
                                            </a>
                                        </div>
                                    </div><!--/left-->

                                    <div class="col-sm-4 col-xs-4">
                                        <div class="list-group text-center">
                                            <a href="#" class="list-group-item active">
                                                <h4 class="list-group-item-heading">Productive</h4>
                                                <h6>Most popular plan</h6>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <p class="list-group-item-text">5 images</p>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <p class="list-group-item-text">Review Features</p>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <p class="list-group-item-text">Support</p>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <p class="list-group-item-text">Advertisement</p>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <p class="list-group-item-text">Featuring</p>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <p class="list-group-item-text"> - </p>
                                            </a>
                                            <a href="{{ url('/selectplan/1') }}" class="list-group-item">
                                                <a href="{{ url('/selectplan/2') }}" class="btn btn-primary text-center btn-lg btn-block" style="margin: auto">&#x20A6;10,000 per month</a>
                                            </a>
                                        </div>
                                    </div><!--/middle-->
                                    <div class="col-sm-4 col-xs-4  text-center">
                                        <div class="list-group ">
                                            <a href="#" class="list-group-item active">
                                                <h4 class="list-group-item-heading">Boss</h4>
                                                <h6>For the giants</h6>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <p class="list-group-item-text">5 images</p>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <p class="list-group-item-text">Review Features</p>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <p class="list-group-item-text">Support</p>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <p class="list-group-item-text">Advertisement</p>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <p class="list-group-item-text">Featuring</p>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <p class="list-group-item-text">Job Listing/Recruitment</p>
                                            </a>

                                            <a href="{{ url('/selectplan/2') }}" class="list-group-item ">
                                                <a href="{{ url('/selectplan/3') }}" class="btn btn-primary text-center btn-lg btn-block" style="margin:auto;">&#x20A6;20,000 per month</a>
                                            </a>
                                        </div>
                                    </div><!--/right-->
                                </div><!--/row-->

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@stop