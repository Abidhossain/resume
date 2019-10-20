@php $i = 1; @endphp
@foreach($testimonial_infos as $data)
<tr>
   <td>{{$i++}}</td>
   <td>{{$data->testimonial_name}}</td>  
   <td><img src="{{$data->testimonial_photo}}" height="50" width="50"></td>  
   <td>{{$data->testimonial_occopation}}</td> 
   <td>{{$data->testimonial_brief}}</td>   
   
   <td width="12%">  
      <a href="" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#editModal" id="edit" data-id="{{$data->testimonial_id}}">Edit</a>
      <a class="delete btn btn-sm btn-danger text-white" data-id="{{$data->testimonial_id}}" data-token="{{csrf_token()}}" >Delete</a>
   </td>  
</tr> 
@endforeach
