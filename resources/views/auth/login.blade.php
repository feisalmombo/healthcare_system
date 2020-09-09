<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('temp/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('temp/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('temp/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('temp/vendor/morrisjs/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('temp/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
</head>

<body background="{{ asset('temp/images/hospital.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="margin-top: 10%;">
                <div class="panel panel-default"><!-- 
                    <div class="panel-heading text-center"><strong>Login</strong></div> -->
                    <div class="panel-body">
                       <img class="img-responsive center-block"  src="{{asset('temp/images/logo.jpg')}}" alt="heliscare" style="margin-bottom: 6%; margin-top: 2%;">
                       <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="e.g: fidelis@helis.co.tz">

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                      {{--  --<!--  <div class="form-group">
                           <div class="col-md-6 col-md-offset-4">
                               <div class="checkbox">
                                   <label>
                                       <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                   </label>
                               </div>
                           </div>
                       </div> --> --}}

                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <button type="submit" class="btn btn-primary center-block">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
