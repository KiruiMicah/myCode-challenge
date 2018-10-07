@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                         
                                <a href="{{url('getinfodata')}}"><i class="fa fa-user"></i>Load Data from WBO</a>
                           
                </div>

                <div class="panel-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('success'))
                    <div class="alert alert-info">
                    <a href="{{url('Company')}}"><i class="fa fa-user"></i>Click To View updated  Data on our Server</a>
                    </div>
                @endif

                    Welcome
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
