@php $i = 1; @endphp
@foreach($service_infos as $data)
<tr>
   <td>{{$i++}}</td>
   <td>{{$data->service_name}}</td>  
   <td><img src="{{$data->service_photo}}" height="50" width="50"></td>  
   <td>{{$data->service_title}}</td> 
   <td>{{$data->service_description}}</td>   
   
   <td width="12%">  
      <a href="" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#editModal" id="edit" data-id="{{$data->service_id}}">Edit</a>
      <a class="delete btn btn-sm btn-danger text-white" data-id="{{$data->service_id}}" data-token="{{csrf_token()}}" >Delete</a>
   </td>  
</tr> 
@endforeach
