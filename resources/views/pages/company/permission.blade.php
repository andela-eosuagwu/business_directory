@extends('mastercompany')


@section('title', 'Lekki Republic Dashboard')

@section('content')

    <div id="outer-wrapper">
        <div id="inner-wrapper">
            @include('pages.includes.sections.adminheader')

            <div class="content-wrapper">
                <div class="content-heading" style="padding-left: 70px;">
                    Approved
                    <small data-localize="dashboard.WELCOME">Welcome {{ Auth::user()->full_name }}</small>

                </div>
                <div style="padding : 0px 50px;">
                    <!-- START widgets box-->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">{{ $company->name }}</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3 " align="center">
                                            <img alt="User Pic" src="/{{ $company->images[0] }}" class=" img-responsive">

                                        </div>


                                        <div class=" col-md-9 col-lg-9 ">
                                            <table class="table table-user-information">
                                                <tbody>
                                                <tr>
                                                    <td>Email:</td>
                                                    <td>{{ $company->email }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Description:</td>
                                                    <td>{{ $company->description }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Location</td>
                                                    <td>{{ $company->location }}</td>
                                                </tr>

                                                <tr>
                                                <tr>
                                                    <td>Category</td>
                                                    <td>{{ $company->category->name }}</td>
                                                </tr>
                                                @if(isset($company->gps_lat))
                                                <tr>
                                                    <td>Latitude</td>

                                                    <td>{{ $company->gps_lat }}</td>

                                                </tr>
                                                @endif
                                                @if(isset($company->gps_lon))
                                                <tr>
                                                    <td>Longitude</td>
                                                    <td>{{ $company->gps_lon }}</td>
                                                </tr>
                                                @endif

                                                </tbody>
                                            </table>

                                            <a href="{{ url('/permission/'.$company->id.'/approve') }}" class="btn btn-primary pull-right">Approve</a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        </div>
                    <!-- END widgets box-->
                </div>
            </div>



                </div>
        @include('pages.includes.sections.slimfooter')
            </div>



                            </div>
                        </div>


                    @stop