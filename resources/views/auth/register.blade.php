@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}



<!--

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

-->


       <div class="form-group{{ $errors->has('Fullname') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Fullname</label>

                            <div class="col-md-6">
                                <input id="Fullname" type="text" class="form-control" name="Fullname" value="{{ old('Fullname') }}" required autofocus>

                                @if ($errors->has('Fullname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Fullname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>










 <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                            <label for="department" class="col-md-4 control-label">department</label>

                            <div class="col-md-6">    
                     
             <select name="" class="form-control">
              <option value="">CSE</option>
              <option value="">ICE</option>
              <option value="">EEE</option>
            
              <option selected value="">choose</option>
          </select>
                                    
                                @if ($errors->has('department'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>








       <div class="form-group{{ $errors->has('Position') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Position</label>

                            <div class="col-md-6">
             <select name="" class="form-control">
              <option value="">Teacher</option>
              <option value="">Staff</option>
            
              <option selected value="">choose</option>
          </select>
                                @if ($errors->has('Position'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>










       <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">gender</label>

                            <div class="col-md-6"><label>
          <input type="radio" name="gender">
             Male
          </label>
       <label>
          <input type="radio" name="gender">
          Female
       </label>
                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




<div class="form-group{{ $errors->has('inputphone') ? ' has-error' : '' }}">
                            <label for="inputphone" class="col-md-4 control-label">mobile no</label>

                            <div class="col-md-6">
                                <input id="inputphone" type="text" class="form-control" name="inputphone" value="{{ old('inputphone') }}" required autofocus>

                                @if ($errors->has('inputphone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('inputphone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


 <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                            <label for="photo" class="col-md-4 control-label">photo</label>

                            <div class="col-md-6">

   
    <input type="file" class="form-control-file" id="photo">

                                @if ($errors->has('photo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


<!--



  <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                            <label for="department" class="col-md-4 control-label">department </label>

                            <div class="col-md-6">
 
                               <select class="myselect" id="department" name="department" style="width:200px;">
                                    <option value="1">CSE</option>
                                    <option value="2">ICE</option>
                                    

                                </select>     
                                @if ($errors->has('department'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<script type="text/javascript">

      //$(".myselect").select2();

</script>



-->

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
