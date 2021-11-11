<html>
    <head>
        <title>importing excel file</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h3 align="center">Import Excel File in Laravel</h3>
             <br />
            {{-- @if(count($errors) > 0)
             <div class="alert alert-danger">
              Upload Validation Error<br><br>
              <ul>
               @foreach($errors->all() as $error)
               <li>{{ $error }}</li>
               @endforeach
              </ul>
             </div>
            @endif
          --}}
            {{-- @if($message = Session::get('success'))
            <div class="alert alert-success alert-block">
             <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
            </div>
            @endif --}}
        <form method="post" enctype="multipart/form-data" action={{route('employee.import')}} >
            @csrf
            <input type="file" name="file">
            <button>submit</button>
        </form>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>emails</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $count=0;
                @endphp
                @if(isset($emails))
                    @foreach($emails as $key => $value)
                        @if(filter_var($value, FILTER_VALIDATE_EMAIL))
                        <tr>
                            <td>{{ $value }}</td>
                            @php
                                $count++;
                            @endphp
                        </tr>
                        @endif
                    @endforeach
                @endif
            </tbody>
        </table>
        <h4>Total number of emails fetched from excel file: @if(isset($emails)) {{$count}} @endif</h4>

    </body>
</html>