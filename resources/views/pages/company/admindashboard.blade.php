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
                    <span class="pull-right" style="margin-top: -30px;"> @if(Auth::user()->companies->status == 0)
                            <b> Pending Approval</b></span>
                    @endif
                </div>
                <div style="padding : 0px 50px;">
                    <!-- START widgets box-->
                    <div class="row">

                            <div class="col-lg-3 col-sm-6">
                                <!-- START widget-->
                                <div class="panel widget bg-green">
                                    <div class="row row-table">
                                        <div class="col-xs-4 text-center bg-green-dark pv-lg">
                                            <em class="fa fa-plus fa-3x"></em>
                                        </div>
                                        <div class="col-xs-8 pv-lg">
                                            <div class="h2 mt0">{{ $business }}</div>
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
                                            <div class="h2 mt0">{{ $users }}
                                            </div>
                                            <div class="text-uppercase">Users</div>
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
                                            <div class="h2 mt0">{{ $reviews }}</div>
                                            <div class="text-uppercase">Total Reviews</div>
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

                    </div>
                    <!-- END widgets box-->
                    <div class="row">
                        <div class="row">
                            @include('errors.showerrors')
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title"><b>Pending Businesses</b></h4>
                                    @if(count($pending))

                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Category</th>
                                            <th>Phone No</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($pending as $pend)
                                        <tr>
                                            <td>{{ $pend->name }}</td>
                                            <td>{{ $pend->location }}</td>
                                            <td>{{ $pend->category->name }}</td>
                                            <td>{{ $pend->phone_number }}</td>
                                            <td><a href="{{ url('/business/'.$pend->id.'/view') }}" class="btn btn-default">View</a></td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                        @else
                                        <div class="alert alert-info"> No Business Pending</div>
@endif
                                </div>
                            </div> <!-- col-->
                        </div>
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