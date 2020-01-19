@extends('layout.admin.admin') @section('title','Dashboard') @section('content')
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">Dashboard</h2>
    </div>
</div>
<div class="row">
    @if(Session::has('success'))
    <p class="alert alert-success message">{{ Session::get('success') }}</p>
    @endif @if(Session::has('error'))
    <p class="alert alert-warning message">{{ Session::get('error') }}</p>
    @endif
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{ $pending_claim }}</div>
                        <div>Pending Claims</div>
                    </div>
                </div>
            </div>
            <a href="{{ url('admin/claim/0') }}">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{ $completed_claim }}</div>
                        <div>Completed Claims</div>
                    </div>
                </div>
            </div>
            <a href="{{ url('admin/claim/1') }}">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{ $total_subscriber }}</div>
                        <div>Total Subscriber</div>
                    </div>
                </div>
            </div>
            <a href="{{ route('admin.subscriber.index') }}">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-support fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">13</div>
                        <div>Support Tickets!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>

<table class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline">
    <thead>
        <tr>
            <th>Serial</th>
            <th>Name</th>
            <th>Department</th>
        </tr>

    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Ariful islam</td>
            <td>CSE</td>
        </tr>


        <tr>
            <td>1</td>
            <td>Ariful islam</td>
            <td>CSE</td>
        </tr>


    </tbody>
</table>
</div>

@endsection