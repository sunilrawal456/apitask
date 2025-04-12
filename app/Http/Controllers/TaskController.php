<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    
    public function create()
	  {
      return view('task.create');
    }


    public function store(Request $request)
    {
        $request->validate([
          'title'   =>'required|min:3',
          'description'  =>'required',
          'status' =>'required'
        ]);

        Task::create([
          'title' =>$request->title,
          'description' =>$request->description,
          'status' =>$request->status,
       ]);

       return redirect()->route('task.index');
     }

     public function index(Request $request)
     {
      $status=$request->status;
       if($status)
       {
          $tasks=Task::where('status',$status)->get();
       }
       else
       {
         $tasks = Task::all();
       }
       
        return view('task.index',compact('tasks','status'));
     }


    public function delete($id)
    {
        Task::find($id)->delete();
        return redirect()->route('task.index');
    }


    public function edit($id)
    {
        $task = Task::findOrfail($id);
        return view('task.edit',compact('task'));
    } 

   

    public function update(Request $request,$id)
    {

        $request->validate([
            'title'   =>'required|min:3',
            'description'=>'required',
            'status'=>'required',
         ]);

        Task::findOrfail($id)->update([
          'title' =>$request->title,
          'description' =>$request->description,
          'status' =>$request->status,
        ]);
        return redirect()->route('task.index');

    }


    public function show($id)
    {
        $task = Task::findOrfail($id);
        return view('task.show',compact('task'));
    } 
    
}
