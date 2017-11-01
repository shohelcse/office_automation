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

<div>


<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Manage</div>

                <div class="panel-body">


<!--header of page-->

<nav class="navbar nav-pills nav-stacked">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Home</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">
    
    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">course-management<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
          
             <li><a href='{{url("/courseEntry")}}'>course-entry</a></li>
   
        <li><a href='{{url("/courseAssign")}}'>assign-course</a></li>
        <li><a href='{{url("/courseTracking")}}'>Course-tracking</a></li>
          <li><a href='{{url("/viewCourseStatus")}}'>Course-Status</a></li>
          </ul>
        </li>
         <li><a href='{{url("/roasterduty")}}'>Roaster duty</a></li>
         <li><a href="#section3">casual leave</a></li>
            
      </ul>
     
   
    </div>
  </div>
</nav>

</div>
</div>


</div>

</div>
</div>






 <div class="container">

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

   <option>Md.Mahmudul Hasan </option>
                            <option>S.M.Hasan Sazzad Iqbal</option>
                            <option>Md.Shafiul Azam</option>
                            <option>Md.Mursalin</option>

  </select>





<script type="text/javascript">

      $("#myselect1").select2();

</script>



                    </td>
                  <td>
          
                   <select class="myselect" style="width:200px;">
              <option>Md.Mahmudul Hasan </option>
                            <option>S.M.Hasan Sazzad Iqbal</option>
                            <option>Md.Shafiul Azam</option>
                            <option>Md.Mursalin</option>

                            </select>



<script type="text/javascript">

      $(".myselect").select2();

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



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
