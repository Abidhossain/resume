@extends('admin.admin-master')
@section('title','E-Shopper | Category List') 
@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Project Add</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form action="{{url('store-projects')}}" method="post" enctype="multipart/form-data">
               @csrf 
                   <div class="form-group">
                  <label for="project_name" class="col-form-label">Project Name</label>
                  <input type="text" class="form-control" name="project_name" id="project_name" placeholder="Project Name">
               </div> 
               <div class="form-group">
                  <label for="technical_skills" class="col-form-label">Service Title</label>
                   <input type="text" class="form-control" name="technical_skills" id="technical_skills" placeholder="technical Skill">
               </div> 

               <div class="form-group">
                  <label for="project_photo" class="col-form-label">Project Photo</label>  
                  <input type="file" class="form-control" name="project_photo" id="project_photo">
               </div> 

         </div>
         <div class="modal-footer">
         <button type="submit" class="btn btn-sm btn-warning" name="submit" id="submit">Submit</button> 
         <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button> 
         
         </div> 
         </form>
      </div>
   </div>
</div>
<!-- /.modal -->
<div class="row">
   <div class="col-md-12">    
   <div class="card">
      <div class="card-body"> 
             <h4>Project List <button type="button" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Project Add</button> </h4>      
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th>Sl</th>
                     <th>Project Name</th>
                     <th>Technical Skills</th>
                     <th>Project Photo</th> 
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody id="project_info"> 
               </tbody>
            </table>
         </div> 
       </div>
     </div>
</div>  
<!-- /.modal -->
@endsection
@section('custom_script')
<script type="text/javascript">
   $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
   });
   
   /*====================Show data by ajax=======================*/
   
    function readData(){ 
   
       $.get("{{url('projects-read')}}", function(data){ 
               $('#project_info').empty().html(data); 
       }); 
    }
   
   window.onload = readData();
    
   
</script>
@if(Session::has('success'))
<script>
  Swal.fire('success',"{{Session::get('success')}}",'success');
</script>
@endif
@if(Session::has('error'))
<script>
  Swal.fire('error',"{{Session::get('error')}}",'error');
</script>
@endif
     
@endsection