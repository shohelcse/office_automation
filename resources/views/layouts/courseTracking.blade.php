@include('layouts.link')
@extends('layouts.app3')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Manage</div>

                <div class="panel-body">


<!--header of page-->






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

  
             




                    </td>
                   
                    <td style="width:50px;"><input type="checkbox" class="form-control" value="" checked><br></td>
                    <td style="width:50px;"><input type="checkbox" class="form-control" value=""><br></td>
                    <td style="width:50px;"><input type="checkbox" class="form-control" value=""><br></td>
                    <td style="width:50px;"><input type="checkbox" class="form-control" value=""><br></td>
                   
           
                 
                </tr>   

        
        
        
                <tr>
                    <td>CSE-3203</td>
                    <td>Computer Graphics</td>
                     <td>Md.Mahmudul Hasan</td>
                  <td>Md.Mahmudul Hasan</td>



                    </td>
                    <td style="width:50px;"><input type="checkbox" class="form-control" value=""><br></td>
                    <td style="width:50px;"><input type="checkbox" class="form-control" value=""><br></td>
                    <td style="width:50px;"><input type="checkbox" class="form-control" value="" checked><br></td>
                    <td style="width:50px;"><input type="checkbox" class="form-control" value=""><br></td>
                   
           
                 
                </tr>   






        <tr>
                    <td>CSE-3203</td>
                    <td>Numerical analysis</td>   <td>Md.Mahmudul Hasan</td>
                  <td>Md.Mahmudul Hasan</td>




                    </td>
                  
                    <td style="width:50px;"><input type="checkbox" class="form-control" value="" checked><br></td>
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



                  
