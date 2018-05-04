<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksContoroller extends Controller
{
    public function index(){
        $tasks=Task::all();
        //return view('welcome');
        return view('tasks.index',['tasks'=>$tasks,]);
        
    }
    public function show($id){
        $task=Task::find($id);
        return view('tasks.show',['tasks'=>$task,]);
    }
    public function create(){
        $task=new Task;
        return view('tasks.create',['tasks'=>$task,]);
    }
    public function edit($id){
        $task= Task::find($id);
        return view('tasks.edit',['tasks'=>$task,]);
    }
        public function store(Request $request)
    {
        $task = new Task;
        $task->content = $request->content;
        $task->save();

        return redirect('/');
    }
    public function update(Request $request, $id)
    {
        $task= Task::find($id);
        $task->content = $request->content;
        $task->save();

        return redirect('/');
    }
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect('/');
    }
}
