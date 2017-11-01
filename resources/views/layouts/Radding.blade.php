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
 <div class="row">
        <div class="col-md-6 col-md-offset-3">



               <form class="form-horizontal" method="POST" action="{{url('/insert')}}" >
                              {{csrf_field() }}

                            <fieldset>
                              <legend></legend>
                              @if(count($errors)>0)
                              @foreach($errors->all() as $error)
                                  <div class="alert alert-danger">
                                  {{$error}}
                                  </div>
                              @endforeach
                              @endif
                          <!--    <div class="form-group">
                                <label for="inputEmail" class="col-lg-2 control-label">Session</label>
                                <div class="col-lg-10">
                                  <input class="form-control" id="inputEmail" placeholder="session" type="text" name="session">
                                </div>
                              </div>

                              -->




<div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">Session</label>

             <div class="col-lg-10">  
                     
             <select name="session" class="form-control">
              <option value="2012-13">2012-13</option>
              <option value="2013-14">2013-14</option>
              <option value="2014-15">2014-15</option>
              <option value="2015-16">2015-16</option>
              <option value="2016-17">2016-17</option>
              <option value="2017-18">2017-18</option>
             
              <option selected value="1">choose</option>
              </select>
                                    
                        
                </div>
 </div>



 <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">Semester</label>

             <div class="col-lg-10">  
                     
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
                                    
                        
                </div>
 </div>



                              <div class="form-group">
                                <label for="inputPassword" class="col-lg-2 control-label">File-upload</label>
                                <div class="col-lg-10">
                               <input class="form-control" id="inputEmail" placeholder="semester" type="file" name="">
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputPassword" class="col-lg-2 control-label">Start-date</label>
                                <div class="col-lg-10">
                               <input class="form-control" id="inputEmail" placeholder="start" type="text" name="start">
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputPassword" class="col-lg-2 control-label">End-date</label>
                                <div class="col-lg-10">
                               <input class="form-control" id="inputEmail" placeholder="end" type="text" name="end">
                                </div>
                              </div>
                              
                              
                            
                              <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                 <button type="submit" class="btn btn-primary">Submit</button>
                                  
                                 <a href="{{url('/home')}}"  class="btn btn-primary">Back</a>
                                </div>
                              </div>
                            </fieldset>
                  </form>



</div>
</div>








@endsection


<!--rest of body-->



                  
