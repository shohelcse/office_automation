

@extends('layouts.app')





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


















@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">


<!--header of page-->



<form class="form-horizontal">



    <div class="table-responsive">
        <table class="table table-bordered table-striped table-highlight">
            <thead>
                <th >CourseCode</th>
                <th style="width:50px;">CourseTitle</th>
                <th>theory-lab</th>
                <th>credit</th>
               
         
            </thead>
            <tbody>
                <tr>
                     <td style="width:50px;"><input type="text" class="form-control" value=""><br></td>
					 
                     <td style="width:50px;"><input type="text" class="form-control" value=""><br></td>
                     <td style="width:50px;">
				
    
   


<label >
          <input type="radio" name="theoryLab">
            Theory
          </label>
       <label>
          <input type="radio" name="theoryLab">
          Lab
       </label>


 </td>
                     <td style="width:50px;"><input type="text" class="form-control" value=""><br></td>
            
                   </tr>







                   <tr>
                     <td style="width:50px;"><input type="text" class="form-control" value=""><br></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" value=""><br></td>
                     <td style="width:50px;">
        
    
   


<label >
          <input type="radio" name="theoryLab">
            Theory
          </label>
       <label>
          <input type="radio" name="theoryLab">
          Lab
       </label>


 </td>
                     <td style="width:50px;"><input type="text" class="form-control" value=""><br></td>
            
                   </tr>


                   <tr>
                     <td style="width:50px;"><input type="text" class="form-control" value=""><br></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" value=""><br></td>
                     <td style="width:50px;">
        
    
   


<label >
          <input type="radio" name="theoryLab">
            Theory
          </label>
       <label>
          <input type="radio" name="theoryLab">
          Lab
       </label>


 </td>
                     <td style="width:50px;"><input type="text" class="form-control" value=""><br></td>
            
                   </tr>



                   <tr>
                     <td style="width:50px;"><input type="text" class="form-control" value=""><br></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" value=""><br></td>
                     <td style="width:50px;">
        
    
   


<label >
          <input type="radio" name="theoryLab">
            Theory
          </label>
       <label>
          <input type="radio" name="theoryLab">
          Lab
       </label>


 </td>
                     <td style="width:50px;"><input type="text" class="form-control" value=""><br></td>
            
                   </tr>

                   <tr>
                     <td style="width:50px;"><input type="text" class="form-control" value=""><br></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" value=""><br></td>
                     <td style="width:50px;">
        
    
   


<label >
          <input type="radio" name="theoryLab">
            Theory
          </label>
       <label>
          <input type="radio" name="theoryLab">
          Lab
       </label>


 </td>
                     <td style="width:50px;"><input type="text" class="form-control" value=""><br></td>
            
                   </tr>

                   <tr>
                     <td style="width:50px;"><input type="text" class="form-control" value=""><br></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" value=""><br></td>
                     <td style="width:50px;">
        
    
   


<label >
          <input type="radio" name="theoryLab">
            Theory
          </label>
       <label>
          <input type="radio" name="theoryLab">
          Lab
       </label>


 </td>
                     <td style="width:50px;"><input type="text" class="form-control" value=""><br></td>
            
                   </tr>

                   <tr>
                     <td style="width:50px;"><input type="text" class="form-control" value=""><br></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" value=""><br></td>
                     <td style="width:50px;">
        
    
   


<label >
          <input type="radio" name="theoryLab">
            Theory
          </label>
       <label>
          <input type="radio" name="theoryLab">
          Lab
       </label>


 </td>
                     <td style="width:50px;"><input type="text" class="form-control" value=""><br></td>
            
                   </tr>

                   <tr>
                     <td style="width:50px;"><input type="text" class="form-control" value=""><br></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" value=""><br></td>
                     <td style="width:50px;">
        
    
   


<label >
          <input type="radio" name="theoryLab">
            Theory
          </label>
       <label>
          <input type="radio" name="theoryLab">
          Lab
       </label>


 </td>
                     <td style="width:50px;"><input type="text" class="form-control" value=""><br></td>
            
                   </tr>
            </tbody>
        </table>
    </div>

              <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                 Submit
                                </button>
          </div>
          </div>

</form>
 

@endsection


<!--rest of body-->



                  
