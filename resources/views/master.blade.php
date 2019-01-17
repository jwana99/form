<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
</head>
<body>

<div class="container">
    {{--<div class="row">--}}

        {{--<div class="col-md-12">--}}

            {{--<h3 align="center">add data--}}
            {{--</h3>--}}
            {{--<br>--}}
            {{--<form method="post" action="{{url('student')}}">--}}
                {{--<div class="form-group">--}}
                    {{--<input type="text" name="first_name" class="form-control" placeholder="enter first name">--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<input type="text" name="last_name" class="form-control" placeholder="enter last name">--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<input type="submit" class="btn btn-primary">--}}

                {{--</div>--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}
    @yield('content')

</div>

</body>
</html>
