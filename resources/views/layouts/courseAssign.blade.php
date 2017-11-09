@include('layouts.header')
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





<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Manage</div>

                <div class="panel-body">


<form class="form-horizontal">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-highlight">
            <thead>
                <th >CourseCode</th>
                <th style="width:200px;">CourseTitle</th>
                <th>Internal Teacher</th>
                <th>External Teacher</th>
              
            </thead>
            <tbody>
                <tr>
                    <td>CSE-3203</td>
                    <td>Computer Graphics</td>
                  
                    <td>
                 

  <select id="myselect1" style="width:200px;">

   <option></option>
                    @foreach($data as $d)
                      <option>{{$d->name}}</option>
                            
                   @endforeach
  </select>





<script type="text/javascript">

      $("#myselect1").select2(
        {
            placeholder:"select a name",
            allowClear:true
        });

</script>



                    </td>
                  <td>
          
                   <select class="myselect" style="width:200px;">
                   <option></option>
                    @foreach($data as $d)
                      <option>{{$d->name}}</option>
                            
                   @endforeach
                            </select>



<script type="text/javascript">

      $(".myselect").select2({
         placeholder:"select a name",
            allowClear:true
      });

</script>



             
                 
                </tr>   

        
        
        
            </tbody>
        </table>
    </div>
         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   add new
                                </button>
          </div>
          </div>
</form>



</div>
</div>
</div>
</div>
</div>














    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
    