@include('layouts.link')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Roaster duty</div>

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
      <a class="navbar-brand" href='{{url("/home")}}'>Home</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
    
    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Manage<span class="caret"></span></a>

                    <ul class="dropdown-menu multi-level">
                        <li><a href="#">Session</a></li>
                        <li><a href="#">Semester</a></li>
                      
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses</a>
                            <ul class="dropdown-menu">
                                 <li><a href='{{url("/courseEntry2")}}'>Course-entry</a></li>
   
                                 <li><a href='{{url("/courseAssign")}}'>Assign-course</a></li>
                                   <li><a href='{{url("/courseTracking")}}'>Course-tracking</a></li>
                        
                            </ul>
                        </li>
                    </ul>
                </li>
                



   <li class="dropdown">
          <a href='{{url("/roasterduty")}}' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Roaster duty<span class="caret"></span></a>

                    <ul class="dropdown-menu multi-level">
                        <li><a href='{{url("/Radding")}}'>add-duty</a></li>
                        <li><a href='{{url("/Rshow")}}'>show-duty</a></li>
                 
                    </ul>
                </li>


          <!--        <li><a href='{{url("/roasterduty")}}'>Roaster duty</a></li> -->
         <li><a href="#section3">Casual leave</a></li>
            </ul>


</nav>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
           
              

                <div class="panel-body">


<table class="table table-striped table-hover ">
  <thead>
    <tr>

      <th>session</th>
      <th>semester</th>
      <th>download</th>
        <th>start</th>
        <th>end</th>
 
    </tr>
  </thead>
  <tbody>
  @if(count($roasters)>0)
  @foreach($roasters->all() as $roaster)
    <tr>
    
      <td>{{$roaster->session}}</td>
      <td>{{$roaster->semester}}</td>
      <td>.doc </td>
      <td>{{$roaster->start}}</td>
      <td>{{$roaster->end}}</td>
 
    </tr>
  

@endforeach
@endif
    
  </tbody>
</table> 
</div>
</div>

</div>
</div>


@endsection