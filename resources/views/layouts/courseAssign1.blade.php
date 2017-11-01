@include('layouts.header')
@extends('layouts.app')
@section('formcontent')
<form class="form-horizontal">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-highlight">
            <thead>
                <th >CourseCode</th>
                <th style="width:200px;">CourseTitle</th>
                <th>Internal Teacher</th>
                <th>External Teacher</th>
              
            </thead>
            <tbody>
                <tr>
                    <td>CSE-3203</td>
                    <td>Computer Graphics</td>
                  
                    <td>
                 

  <select id="myselect1" style="width:200px;">

   <option>Md.Mahmudul Hasan </option>
                            <option>S.M.Hasan Sazzad Iqbal</option>
                            <option>Md.Shafiul Azam</option>
                            <option>Md.Mursalin</option>

  </select>





<script type="text/javascript">

      $("#myselect1").select2();

</script>



                    </td>
                  <td>
          
                   <select class="myselect" style="width:200px;">
              <option>Md.Mahmudul Hasan </option>
                            <option>S.M.Hasan Sazzad Iqbal</option>
                            <option>Md.Shafiul Azam</option>
                            <option>Md.Mursalin</option>

                            </select>



<script type="text/javascript">

      $(".myselect").select2();

</script>



             
                 
                </tr>   

        
        
        
            </tbody>
        </table>
    </div>
         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   add new
                                </button>
          </div>
          </div>
</form>

@endsection
