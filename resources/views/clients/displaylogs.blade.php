@extends('layouts.app')

@section('content')

    <div class="container">
              
    
          <div class="row">

        <div class="col-lg-12 margin-tb">

            <span class="float-left">

                <h2>Logs</h2>

            </span>

            <span class="float-right">

                
            </span>

        </div>

    </div>
   <br>
  

 
  
  <div class="accordion" id="accordion">
 

    <div id="collapseOne" class="collapse show" aria-labelledby="project_id" data-parent="#accordion">
      <div class="card-body">
          <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>TYPE</th>
        <th>URL</th>
        <th>PROJECT ID</th>
        <th>INPUT</th>
        <th>RESPONSE</th>
        <th>TIME</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($logs as $log)
      <tr>
        <td>{{$log->id}}</td>
        <td>{{$log->type}}</td>
        <td>{{$log->url}}</td>
        <td>{{$log->project_id}}</td>
        <td>{{$log->input}}</td>
        <td>{{$log->response}}</td>
        <td>{{$log->created_at}}</td>
        
      </tr>
      @endforeach
 
    </tbody>
  </table>
      </div>
    </div>
  </div>
</div>
</div>
@endsection