@include('layouts.link')
@extends('layouts.app3')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('.add').click(function () {
            var n = ($('.resultbody tr').length - 0) + 1;
            var tr = '<tr><td class="no">' + n + '</td>' +
                    '<td><input type="text" class="form-control" name="courseCode[]"></td>'+
                    '<td><input type="text" class="form-control" name="courseTitle[]"></td>'+
                    '<td><input type="text" class="form-control" name="credit[]"></td>'+

                    '<td><input type="button" class="btn btn-danger delete" value="x"></td></tr>';
            $('.resultbody').append(tr);
        });
        $('.resultbody').delegate('.delete', 'click', function () {
            $(this).parent().parent().remove();
        });
    });
</script>




<form class="form-horizontal" method="POST" action="{{url('/insert4')}}" >

   {{csrf_field() }}
      

<div class="col-md-12 col-md-offset-0">

    <div class="table-responsive" >
        <table class="table table-bordered table-striped table-highlight">
            <thead>
                 <th style="width:50px;">ID</th>
                <th style="width:50px;">CourseCode</th>
                <th style="width:50px;">CourseTitle</th>
              
                <th style="width:50px;">credit</th>
               
         
            </thead>
            <tbody class="resultbody">
                <tr>
                    <td style="width:50px;" class="no">1</td>
                     <td style="width:50px;"><input type="text" class="form-control" name="courseCode[]"><br></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" name="courseTitle[]"><br></td>
                     <td style="width:50px;"><input type="text" class="form-control" name="credit[]"><br></td>
            
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

