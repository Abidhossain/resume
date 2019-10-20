 <!DOCTYPE html>
 <html>
 <head>
   <title>Resume PDF</title>  
    <link rel="stylesheet" href="{{asset('public/front/assets/')}}/css/bootstrap.css">
 </head>

 <body> 
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h3 class="text-center">Resume Download</h3>
      </div>
      <div class="col-md-12">
        <table class="table table-responsive table-bordered table-striped">
            <thead>
              <tr> 
                <th>Sl</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
              </tr>
            </thead>
            <?php $i=1 ;?>
            <tbody>
              @foreach($viewer_data as $viewer)
              <tr>
                <td>{{$i++}}</td>
                <td>{{$viewer->name}}</td>
                <td>{{$viewer->email}}</td>
                <td>{{$viewer->message}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
    </div>
  </div>

    <script src="{{asset('public/front/assets/')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('public/front/assets/')}}/js/jquery-2.1.3.min.js"></script>
 </body>
 </html>
       