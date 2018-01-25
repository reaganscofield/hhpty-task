@extends("layouts.app")

@section('content')

<div class="container">
    <div class="container mx-auto">
      <div class="w-75 p-3 mx-auto">
        <h3 class="mb-4 text-center">T-Management Application</h3>
          <div class="text-center mb-4">
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addTask">
                Click to Add Task
            </button>
          </div>
       
            @foreach($task as $refTask)
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="">
                        
                            <h1> {{ $refTask->taskTitle }}</h1>
                            <a href="/task/{{$refTask->id}}">
                                <button type="button" class="btn btn-primary btn-sm">
                                  Open Task
                                </button>
                            </a>
                         </div>
                    </li>
                </ul>
            @endforeach
      </div>    
  </div>

  <div class="modal fade" id="addTask" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-info">
            <h5 class="modal-title text-light" id="exampleModalLabel">ADD NEW TASK</h5>
            <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          {!! Form::open(['action' => 'TaskController@store', 'method' => 'POST' ]) !!}
            <div class="modal-body">
                <div class="form-group">
                    {{Form::label('title', 'Task Title')}}
                    {{Form::text('taskTitle', '', ['class' => 'form-control', 'placeholder' => 'Task Title'])}}
                </div>
                <div class="form-group">
                    {{Form::label('taskDescription', 'Task Description')}}
                    {{Form::textarea('taskDescription', '', ['class' => 'form-control', 'placeholder' => 'Task Description'])}}
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>

@endsection



