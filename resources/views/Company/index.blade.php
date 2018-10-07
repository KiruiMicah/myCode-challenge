<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Powergen</title>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

    </head>

    <body>

        <div class="container">

                <div class="panel-heading">
                         
                        <a href="{{url('home')}}"><i class="fa fa-user"></i>Home</a>
                   
        </div>

            <h3 class="text-center">Powergen  Data Statistics</h3>
        

            <br/>

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

    </body>

</html>