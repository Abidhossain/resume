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
            <form action="{{url('store-testimonials')}}" method="post" enctype="multipart/form-data">
               @csrf
              <div class="row">
                <div class="col-6">
                   <div class="form-group">
                  <label for="testimonial_name" class="col-form-label">Testimonial Name</label>
                  <input type="text" class="form-control" name="testimonial_name" id="testimonial_name" placeholder="Testimonial Name">
               </div>
               <div class="form-group">
                  <label for="testimonial_brief" class="col-form-label">Testimonial Brief</label>
                   <textarea class="form-control" rows="8" name="testimonial_brief"></textarea>
               </div>
              
                </div>
                <div class="col-6">
                   <div class="form-group">
                  <label for="testimonial_occopation" class="col-form-label">Testimonial Occupatin</label>  
                  <input type="text" class="form-control" name="testimonial_occopation" id="testimonial_occopation" placeholder="Testimonial Occupation">
               </div>
               <div class="form-group">
                  <label for="testimonial_photo" class="col-form-label">Testimonial Photo</label>  
                  <input type="file" class="form-control" name="testimonial_photo" id="testimonial_photo">
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
             <h4>Testimonial List <button type="button" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Testimonial Add</button> </h4>      
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th>Sl</th>
                     <th>Name</th>
                     <th>Brief</th>
                     <th>Occupation</th>
                     <th>Photo</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody id="testomonial_info"> 
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
   
       $.get("{{url('testomonials-read')}}", function(data){ 
               $('#testomonial_info').empty().html(data); 
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