@include('layouts.link')
@extends('layouts.app')

@section('content')
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
      <a class="navbar-brand" href='{{url("/home")}}'>Home</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
    
    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Manage<span class="caret"></span></a>

                    <ul class="dropdown-menu multi-level">
                        <li><a href='{{url("/sessionCreate")}}'>Session</a></li>
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
<form class="form-horizontal">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-highlight">
            <thead>
                <th style="width:50px;" >session</th>
                <th  style="width:50px;">semester</th>
               
         
            </thead>
            <tbody>
                <tr>
                <td style="width:10px;">
                    <select class="form-control" id="exampleFormControlSelect1">
      <option>2013-14</option>
      <option>2014-15</option>
      <option>2015-16</option>
      <option>2017-18</option>
      <option>2018-19</option>
      
   

  
    </select>
    </td>
           
                    
                     <td style="width:10px;">
        
    
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1-1</option>
      <option>1-2</option>
      <option>2-1</option>
      <option>2-2</option>
      <option>3-1</option>
      <option>3-2</option>
      <option>4-1</option>
      <option>4-2</option>
   

  
    </select>
 </td>
                    
            

                   </tr>
            </tbody>
        </table>
    </div>



   </form>


</div>
</div>


   <div ng-app="myApp" ng-controller="personCtrl">
<div class="form-group" >
  <div class="col-md-6 col-md-offset-5">
               

 <a  class="btn btn-info" role="button" ng-click="toggle()">Add-courses</a>  

    </div>
    </div>

   

<div class="form-group" >
  <div class="col-md-12 ">
    

<form class="form-horizontal" ng-show="myVar">





    <div class="table-responsive">
        <table class="table table-bordered table-striped table-highlight">
            <thead>
                <th style="width:20px;">CourseCode</th>
                <th style="width:200px;">CourseTitle</th>
                <th >Theory-lab</th>
                <th>Credit</th>
               
         
            </thead>
            <tbody>
                <tr>
                     <td style="width:20px;"><input type="text" class="form-control" value=""><br></td>
           
                     <td style="width:100px;"><input type="text" class="form-control" value=""><br></td>
                     <td style="width:20px;">
        
    
   


<label >
          <input type="radio" name="theoryLab">
            Theory
          </label>
       <label>
          <input type="radio" name="theoryLab">
          Lab
       </label>


 </td>
                     <td style="width:20px;"><input type="text" class="form-control" value=""><br></td>
            
                   </tr>    



  <tr>
                     <td style="width:20px;"><input type="text" class="form-control" value=""><br></td>
           
                     <td style="width:100px;"><input type="text" class="form-control" value=""><br></td>
                     <td style="width:20px;">
        
    
   


<label >
          <input type="radio" name="theoryLab">
            Theory
          </label>
       <label>
          <input type="radio" name="theoryLab">
          Lab
       </label>


 </td>
                     <td style="width:20px;"><input type="text" class="form-control" value=""><br></td>
            
                   </tr> 
                     <tr>
                     <td style="width:20px;"><input type="text" class="form-control" value=""><br></td>
           
                     <td style="width:100px;"><input type="text" class="form-control" value=""><br></td>
                     <td style="width:20px;">
        
    
   


<label >
          <input type="radio" name="theoryLab">
            Theory
          </label>
       <label>
          <input type="radio" name="theoryLab">
          Lab
       </label>


 </td>
                     <td style="width:20px;"><input type="text" class="form-control" value=""><br></td>
            
                   </tr> 
                     <tr>
                     <td style="width:20px;"><input type="text" class="form-control" value=""><br></td>
           
                     <td style="width:100px;"><input type="text" class="form-control" value=""><br></td>
                     <td style="width:20px;">
        
    
   


<label >
          <input type="radio" name="theoryLab">
            Theory
          </label>
       <label>
          <input type="radio" name="theoryLab">
          Lab
       </label>


 </td>
                     <td style="width:20px;"><input type="text" class="form-control" value=""><br></td>
            
                   </tr> 
                     <tr>
                     <td style="width:20px;"><input type="text" class="form-control" value=""><br></td>
           
                     <td style="width:100px;"><input type="text" class="form-control" value=""><br></td>
                     <td style="width:20px;">
        
    
   


<label >
          <input type="radio" name="theoryLab">
            Theory
          </label>
       <label>
          <input type="radio" name="theoryLab">
          Lab
       </label>


 </td>
                     <td style="width:20px;"><input type="text" class="form-control" value=""><br></td>
            
                   </tr> 
                     <tr>
                     <td style="width:20px;"><input type="text" class="form-control" value=""><br></td>
           
                     <td style="width:100px;"><input type="text" class="form-control" value=""><br></td>
                     <td style="width:20px;">
        
    
   


<label >
          <input type="radio" name="theoryLab">
            Theory
          </label>
       <label>
          <input type="radio" name="theoryLab">
          Lab
       </label>


 </td>
                     <td style="width:20px;"><input type="text" class="form-control" value=""><br></td>
            
                   </tr> 
                     <tr>
                     <td style="width:20px;"><input type="text" class="form-control" value=""><br></td>
           
                     <td style="width:100px;"><input type="text" class="form-control" value=""><br></td>
                     <td style="width:20px;">
        
    
   


<label >
          <input type="radio" name="theoryLab">
            Theory
          </label>
       <label>
          <input type="radio" name="theoryLab">
          Lab
       </label>


 </td>
                     <td style="width:20px;"><input type="text" class="form-control" value=""><br></td>
            
                   </tr> 
                     <tr>
                     <td style="width:20px;"><input type="text" class="form-control" value=""><br></td>
           
                     <td style="width:100px;"><input type="text" class="form-control" value=""><br></td>
                     <td style="width:20px;">
        
    
   


<label >
          <input type="radio" name="theoryLab">
            Theory
          </label>
       <label>
          <input type="radio" name="theoryLab">
          Lab
       </label>


 </td>
                     <td style="width:20px;"><input type="text" class="form-control" value=""><br></td>
            
                   </tr> 


            </tbody>
        </table>
    </div>

              <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                 <button type="submit" class="btn btn-primary btn-lg" >
                          Submit
            </button>
          </div>
          </div>

</form>
 

</div>
</div>
</div>

<script>
var app = angular.module('myApp', []);
app.controller('personCtrl', function($scope) {

    $scope.myVar = false;
    $scope.toggle = function() {
        $scope.myVar = !$scope.myVar;
    };
});
</script> 

@endsection


<!--rest of body-->



                  
