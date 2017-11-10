@include('layouts.link')
@extends('layouts.app3')

@section('content')


<form class="form-horizontal" method="POST" action="{{url('/insert4')}}" >

   {{csrf_field() }}
      

<div class="col-md-12 col-md-offset-0">

    <div class="table-responsive" >
        <table class="table table-bordered table-striped table-highlight">
            <thead>
              
                <th >CourseCode</th>
                <th >CourseTitle</th>
              
                <th>credit</th>
                <th>  <a href="" class="add"><i class="glyphicon glyphicon-plus"></i></th>

            </thead>
            <tbody class="resultbody">
                <tr>
                   
                     <td ><input type="text" class="form-control" name="courseCode[]"><br></td>
           
                     <td ><input type="text" class="form-control" name="courseTitle[]"><br></td>
                     <td ><input type="text" class="form-control" name="credit[]"><br></td>
                      <td ><a href="" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></td>
                   </tr>

            </tbody>
        </table>
    </div>

              <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                         <center><input type="button" class="btn btn-lg btn-primary add" value="Add New Item">   
                        <input type="submit" class="btn btn-lg btn-default" value="Submit"></center>
          </div>
          </div>
          </div>

</form>
 








@endsection


<!--rest of body-->

