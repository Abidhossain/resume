@extends('admin.admin-master')
@section('title','E-Shopper | Category List') 
@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Testimonial Add</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form action="{{url('store-services')}}" method="post" enctype="multipart/form-data">
               @csrf
              <div class="row">
                <div class="col-6">
                   <div class="form-group">
                  <label for="service_name" class="col-form-label">Service Name</label>
                  <input type="text" class="form-control" name="service_name" id="service_name" placeholder="Testimonial Name">
               </div>

                   <div class="form-group">
                  <label for="service_description" class="col-form-label">Service Occupatin</label>  
                  <textarea class="form-control" rows="8" name="service_description" id="service_description" placeholder="Service Description"></textarea>
               </div>
                </div>
                <div class="col-6">

               <div class="form-group">
                  <label for="service_title" class="col-form-label">Service Title</label>
                   <input type="text" class="form-control" name="service_title" id="service_title" placeholder="Service Title">
               </div>
              
               <div class="form-group">
                  <label for="service_photo" class="col-form-label">Service Photo</label>  
                  <input type="file" class="form-control" name="service_photo" id="service_photo">
               </div>
                </div>
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
             <h4>Service List <button type="button" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Service Add</button> </h4>      
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th>Sl</th>
                     <th>Service Name</th>
                     <th>Photo</th>
                     <th>Service Title</th>
                     <th>Service ServiceDescription</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody id="service_info"> 
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
   
       $.get("{{url('service-read')}}", function(data){ 
               $('#service_info').empty().html(data); 
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