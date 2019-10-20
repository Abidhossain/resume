@php $i = 1; @endphp
@foreach($project_infos as $data)
<tr>
   <td>{{$i++}}</td>
   <td>{{$data->project_name}}</td>  
   <td><img src="{{$data->project_photo}}" height="50" width="50"></td>  
   <td>{{$data->technical_skills}}</td>   
   
   <td width="12%">  
      <a href="" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#editModal" id="edit" data-id="{{$data->project_id}}">Edit</a>
      <a class="delete btn btn-sm btn-danger text-white" data-id="{{$data->project_id}}" data-token="{{csrf_token()}}" >Delete</a>
   </td>  
</tr> 
@endforeach
