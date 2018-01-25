@extends("layouts.app")

@section('content')

<div class="container">

    <h3>T-Management Application</h3>

        <div class="mx-auto">
      
                <div class="card">
                    <div class="card-header text-center">
                          {{ $task->taskTitle }}
                    </div>
                    <div class="card-body">
                          <p class="card-text text-center">{{ $task->taskDescription }}</p>
                          <span class="text-muted">Create On {{ $task->created_at->toDateString() }}</span>                      
                    </div>
                    <div class="card-footer text-muted">
                                <button type="button" class="btn btn-primary mr-3" data-toggle="modal" data-target="#editorTask">
                                    Edit
                                </button>      
                            <a href="/task">
                                <button type="button" class="btn btn-info">
                                    Close Task
                                </button>      
                            </a>
                            {!!Form::open(['action' => ['TaskController@destroy', $task->id], 'method' => 'POST', 'class' => "float-left mr-2"])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}             
                    </div>
                </div>
        </div>
    </div>

@endsection




<!-- Modal -->
<div class="modal fade" id="editorTask" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-info">
              <h5 class="modal-title text-light" id="exampleModalLabel">EDIT TASK</h5>
              <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            {!! Form::open(['action' => ['TaskController@update', $task->id], 'method' => 'POST' ]) !!}
              <div class="modal-body">
                  <div class="form-group">
                      {{Form::label('title', 'Task Title')}}
                      {{Form::text('taskTitle', $task->taskTitle, ['class' => 'form-control', 'placeholder' => 'Task Title'])}}
                  </div>
                  <div class="form-group">
                      {{Form::label('taskDescription', 'Task Description')}}
                      {{Form::textarea('taskDescription', $task->taskDescription, ['class' => 'form-control', 'placeholder' => 'Task Description'])}}
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Save Change', ['class'=>'btn btn-primary'])}}
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>



