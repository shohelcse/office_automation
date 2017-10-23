@include('layouts.link')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

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

<form class="form-horizontal">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-highlight">
            <thead>
                <th >CourseCode</th>
                <th style="width:200px;">CourseTitle</th>
                <th>Internal Teacher</th>
                <th>External Teacher</th>
                <th style="width:50px;">IQS</th>
                 <th style="width:50px;">EQS</th>
                 <th style="width:50px;">IQA</th>
                 <th style="width:50px;">EQA</th>
            </thead>
            <tbody>
                <tr>
                    <td>CSE-3203</td>
                    <td>Computer Graphics</td>
                  
                 
                  <td>Md.Mahmudul Hasan</td>
                  <td>Md.Mahmudul Hasan</td>

  
             


<script>
$(document).ready(function(){
    $(":checkbox").wrap("<span style='background-color:red'>");
});
</script>

                    </td>
                   
                    <td style="width:50px;"><input type="checkbox" class="form-control" value=""><br></td>
                    <td style="width:50px;"><input type="checkbox" class="form-control" value=""><br></td>
                    <td style="width:50px;"><input type="checkbox" class="form-control" value=""><br></td>
                    <td style="width:50px;"><input type="checkbox" class="form-control" value=""><br></td>
                   
           
                 
                </tr>   

        
        
        
                <tr>
                    <td>CSE-3203</td>
                    <td>Computer Graphics</td>
                     <td>Md.Mahmudul Hasan</td>
                  <td>Md.Mahmudul Hasan</td>

<script>
$(document).ready(function(){
    $(":checkbox").wrap("<span style='background-color:red'>");
});
</script>

                    </td>
                    <td style="width:50px;"><input type="checkbox" class="form-control" value=""><br></td>
                    <td style="width:50px;"><input type="checkbox" class="form-control" value=""><br></td>
                    <td style="width:50px;"><input type="checkbox" class="form-control" value=""><br></td>
                    <td style="width:50px;"><input type="checkbox" class="form-control" value=""><br></td>
                   
           
                 
                </tr>   






        <tr>
                    <td>CSE-3203</td>
                    <td>Numerical analysis</td>   <td>Md.Mahmudul Hasan</td>
                  <td>Md.Mahmudul Hasan</td>


<script>
$(document).ready(function(){
    $(":checkbox").wrap("<span style='background-color:red'>");
});
</script>

                    </td>
                  
                    <td style="width:50px;"><input type="checkbox" class="form-control" value=""><br></td>
                    <td style="width:50px;"><input type="checkbox" class="form-control" value=""><br></td>
                    <td style="width:50px;"><input type="checkbox" class="form-control" value=""><br></td>
                    <td style="width:50px;"><input type="checkbox" class="form-control" value=""><br></td>
                   
                 
                </tr>
            </tbody>
        </table>
    </div>
</form>

@endsection


<!--rest of body-->



                  
