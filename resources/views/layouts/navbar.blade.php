

<nav class="navbar nav-pills nav-stacked">
  <div class="container-fluid">
  
  
    
  

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <a class="navbar-brand" href='{{url("/home")}}'>Home</a>
     <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Manage<span class="caret"></span></a>

                    <ul class="dropdown-menu multi-level">
                        <li><a href='{{url("/sessionCreate")}}'>Session</a></li>
                        <li><a href="#">Semester</a></li>
                      
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses</a>
                            <ul class="dropdown-menu">
                                 <li><a href='{{url("/courseEntry3")}}'>Entry</a></li>
   
                              <!--   <li><a href='{{url("/courseAssign")}}'>Assign</a></li> -->  

                            <!--    <li><a href='{{url("/courseAssign3")}}'>Assign</a></li> -->
                           <!-- <li><a href='{{url("/courseAssign")}}'>Assign</a></li>  -->
                                   <li><a href='{{url("/courseAssign3")}}'>Assign</a></li>
                                   <li><a href='{{url("/courseTracking")}}'>Tracking</a></li>
                        
                            </ul>
                        </li>
                    </ul>
                </li>
                



   <li class="dropdown">
          <a href='{{url("/home")}}' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Exam-sechedule<span class="caret"></span></a>

                    <ul class="dropdown-menu multi-level">
                     <li><a href='{{url("/Rshow")}}'>show-duties</a></li>
                        <li><a href='{{url("/Radding")}}'>exam-plan</a></li>
                       
                 
                    </ul>
                </li>


          <!--        <li><a href='{{url("/roasterduty")}}'>Roaster duty</a></li> -->
         <li><a href="#section3">Casual leave</a></li>
            </ul>


</nav>