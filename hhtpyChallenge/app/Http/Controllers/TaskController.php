<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
        
        public function index()
        {
            $task = Task::orderBy('created_at','desc')->get();
            return view('task.index')->with('task', $task);
        }
    
    
        public function store(Request $request)
        {
                    //validation
                    $this->validate($request, [
                        'taskTitle' => 'required',
                        'taskDescription' => 'required'
                    ]);
            
                    // Create Task
                    $task = new Task;
                    $task->taskTitle = $request->input('taskTitle');
                    $task->taskDescription = $request->input('taskDescription');
                    $task->save();
                    
                    //redirecting
                    return redirect('/task');
        }
    

       
        public function show($id)
        {
                    //find single task by id
                    $task = Task::find($id);
                    return view('task.show')->with('task', $task);
        }
    
         
        public function update(Request $request, $id)
        {
                    //validation
                    $this->validate($request, [
                        'taskTitle' => 'required',
                        'taskDescription' => 'required'
                    ]);

                    $task = Task::find($id);
            
                    // updating Task
                    $task->taskTitle = $request->input('taskTitle');
                    $task->taskDescription = $request->input('taskDescription');
                    $task->save();
                    
                    //redirecting
                    return redirect('/task');
        }
    
        
        public function destroy($id)
        {
                    //find task by id
                    $task = Task::find($id);
                    
                    $task->delete();
                    return redirect('/task');
        }


}
