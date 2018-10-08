<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Powergen Renewable Energy</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link href="{{ asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
   <link href="{{ asset("/bower_components/AdminLTE/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  
   <link href="{{ asset("/bower_components/AdminLTE/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />
-->
  
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  @include('layouts.header')
  <!-- Sidebar -->
  @include('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>

      <ol class="breadcrumb">
        <!-- li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li-->
        <li class="active">Welcome <div class="pull-right"> ::  {{  Auth::user()->firstname}} </div></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="form-group">

      <div class="panel-body">
        <table class="table table-bordered" id="mytable">

            <thead>
    
                <tr>
                    <th> id</th>
                    <th> name</th>
                    <th> acronym </th>
                    <th> description </th>
                    <th> url </th>
                    <th> type</th>
                    <th> languagesupported</th>
                    <th> periodicity </th>
                    <th> economycoverage </th>
                    <th> granularity </th>
                    <th> numberofeconomies</th>
                    <th> topics</th>
                    <th> updatefrequency </th>
                    <th> lastrevisiondate </th>
                    <th> contactdetails </th>
                    <th> accessoption</th>
                    <th> bulkdownload</th>
                    <th> cite </th>
                    <th> detailpageurl </th>
                    <th> popularity </th>
                    <th> coverage</th>
                    <th> api </th>
                    <th> apiaccessurl </th>
                    <th> apisourceid </th>
                    
    
                </tr>
    
            </thead>
    
        </table>
    
    </div>
    
    <script src="//code.jquery.com/jquery.js"></script>
    
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <script>
    
    $(function() {
    
        $('#mytable').DataTable({
    
            processing: true,
    
            serverSide: true,
    
            ajax: '{{ route('loadmyinfodata') }}',
    
            columns: [
    
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'acronym', name: 'acronym'},
                {data: 'description', name: 'description'},
                {data: 'url', name: 'url'},
                {data: 'type', name: 'type'},
                {data: 'languagesupported', name: 'languagesupported'},
                {data: 'periodicity', name: 'periodicity'},
                {data: 'economycoverage', name: 'economycoverage'},
                {data: 'granularity', name: 'granularity'},
                {data: 'numberofeconomies', name: 'numberofeconomies'},
                {data: 'topics', name: 'topics'},
                {data: 'updatefrequency', name: 'updatefrequency'},
                {data: 'lastrevisiondate', name: 'lastrevisiondate'},
                {data: 'contactdetails', name: 'contactdetails'},
                {data: 'accessoption', name: 'accessoption'},
                {data: 'bulkdownload', name: 'bulkdownload'},
                {data: 'cite', name: 'cite'},
                {data: 'detailpageurl', name: 'detailpageurl'},
                {data: 'popularity', name: 'popularity'},
                {data: 'coverage', name: 'coverage'},
                {data: 'api', name: 'api'},
                {data: 'apiaccessurl', name: 'apiaccessurl'},
                {data: 'apisourceid', name: 'apisourceid'}
    
            ]
    
        });
    
    });
    
    </script>
    
    @stack('scripts')
    
    </div>
    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  @include('layouts.footer')
  
<!-- ./wrapper -->


</body>
</html>
