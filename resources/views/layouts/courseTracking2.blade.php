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


@include('layouts.navbar')


 <div class="row">
        <div class="col-md-6 col-md-offset-3">
<form class="form-horizontal">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-highlight">
            <thead>
                <th style="width:10px;" >session</th>
                <th >semester</th>
               
         
            </thead>
            <tbody>
                <tr>
                     <td style="width:10px;"><input type="text" class="form-control" value=""><br></td>
           
                    
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



            <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   Submit
                                </button>
          </div>

    </form>
    </div>
    </div>




@endsection


<!--rest of body-->



                  
