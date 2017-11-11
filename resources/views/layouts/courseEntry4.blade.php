@include('layouts.header')
@include('layouts.app2')
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
               
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

       <ul class="nav navbar-nav navbar-left">



<li>@include('layouts.navbar')</li>

</ul>
       
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('.add').click(function () {
            var n = ($('.resultbody tr').length - 0) + 1;
            var tr = '<tr><td class="no"><input type="text" class="name form-control" name="courseCode[]" value="{{ old('courseCode') }}">' + '</td>' +
                   
                    '<td><input type="text" class="fname form-control" name="courseTitle[]" value="{{ old('courseTitle') }}"></td>'+
                    '<td><label><input type="radio" name="TheoryLab[0]" value="Theory">Theory</label><label><input type="radio" name="TheoryLab[1]" value="Theory">Theory</label></td>'+
                    '<td><input type="text" class="obtainedmarks form-control" name="credit[]" value="{{ old('credit') }}"></td>'+
 
                    '<td><input type="button" class="btn btn-danger delete" value="x"></td></tr>';
            $('.resultbody').append(tr);
        });
        $('.resultbody').delegate('.delete', 'click', function () {
            $(this).parent().parent().remove();
        });
    });
</script>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Manage</div>

                <div class="panel-body">
                   <form class="form-horizontal" role="form" method="POST" action="{{url('/insert2')}}">
                        {!! csrf_field() !!}


<div class="col-md-6 col-md-offset-2">

  <div class="table-responsive">
        <table class="table table-bordered table-striped table-highlight">
            <thead>
                <th style="width:50px;" >session</th>
                <th  style="width:50px;">semester</th>
               
         
            </thead>
            <tbody>
                <tr>
                <td style="width:10px;">
        <select name="session" class="form-control">
              <option value="2012-13">2012-13</option>
              <option value="2013-14">2013-14</option>
              <option value="2014-15">2014-15</option>
              <option value="2015-16">2015-16</option>
              <option value="2016-17">2016-17</option>
              <option value="2017-18">2017-18</option>
             
              <option selected value="1">choose</option>
              </select>
                      
    </td>
           
                    
                     <td style="width:10px;">
        
    
 <select name="semester" class="form-control">
              <option value="1-1">1-1</option>
              <option value="1-2">1-2</option>
              <option value="2-1">2-1</option>
              <option value="2-2">2-2</option>
              <option value="3-1">3-1</option>
              <option value="3-2">3-2</option>
              <option value="4-1">4-1</option>
              <option value="4-2">4-2</option>
              <option selected value="1">choose</option>
              </select>
                         
 </td>
                    
            

                   </tr>
            </tbody>
        </table>
    </div>



</div>



                    <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>coureCode</th>
                                    <th>courseTitle</th>
                                    <th>TheoryLab</th>
                                    <th>credit</th>
                                
                                </tr>
                            </thead>
                            <tbody class="resultbody">
                                <tr>
                                  
                                    <td class="no">
                                        <input type="text" class="name form-control" name="courseCode[]" value="{{ old('courseCode') }}">
                                    </td>
                                    <td>
                                        <input type="text" class="fname form-control" name="courseTitle[]" value="{{ old('courseTitle') }}">
                                    </td>
                                    <td>
                                   <label><input type="radio" name="TheoryLab[0]" value="Theory">Theory</label>
                                    <label><input type="radio" name="TheoryLab[1]" value="Lab">Lab</label>                                    </td>
                                    <td>
                                        <input type="text" class="obtainedmarks form-control" name="credit[]" value="{{ old('credit') }}">
                                    </td>
                                   
                                </tr>

                            </tbody>
                        </table>    
                        <center><input type="button" class="btn btn-lg btn-primary add" value="Add">   
                        <input type="submit" class="btn btn-lg btn-default" value="Submit"></center>
                        </form>
                </div>
            </div>
        </div>

    </div><!-- First Row End -->
</div> <!-- Container End -->

