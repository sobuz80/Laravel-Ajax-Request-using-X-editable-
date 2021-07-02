<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel X-editable Example Tutorial - MyWebTuts.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    <style type="text/css" media="screen">
        body{
            background: #000;
        }
        .wrapper{
            background: #fff;
            margin-top: 70px;
            width: 700px;
        }
    </style>
</head>
<body>
    <div class="container wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Laravel X-editable Example Tutorial</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-condensed">
                            <tr>
                                <td>Name</td>
                                <td>Email</td>
                            </tr>
                            @foreach($data as $row)
                            <tr>
                                <td>
                                    <a href="#" class="xedit" data-pk="{{$row->id}}" data-type="text" data-title="Enter name" data-name="name"> {{$row->name}}</a>
                                </td>
                                <td>
                                    <a href="#" class="xedit" data-pk="{{$row->id}}" data-type="email" data-title="Enter Email" data-name="email"> {{$row->email}}</a>
                                </td>
								
                            </tr>
                              @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.xedit').editable({
            url: '{{route('editable.updates')}}',
            title: 'Update',
            type: 'text',
            pk: 1,
            name: 'name',
            success: function (response, newValue) {
                  console.log('Updated', response)
            }
        });
      })
  </script>
</body>
</html>