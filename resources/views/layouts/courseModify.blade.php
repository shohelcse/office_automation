@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Course Management</div>

                <div class="panel-body">


                   
    <div class="col-sm-3 sidenav">
      
      <ul class="nav nav-pills nav-stacked">
      <!--  <li class="active"><a href="#section1">Home</a></li> -->
        <li><a href="#section2">course-entry</a></li>
   
        <li><a href='{{url("/courseAssign")}}'>assign-course</a></li>
        <li><a href="#section3">Course tracking</a></li>
       

      </ul><br>
    </div>

                </div>
            </div>
        </div>
    </div>
</div>



                  


@endsection
