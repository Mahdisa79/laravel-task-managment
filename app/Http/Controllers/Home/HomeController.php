<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if(auth()->user()){
        $tasks = auth()->user()->tasks;
        return view('welcome',compact('tasks'));
        }
        else
            return view('welcome');
        
    }

    public function addTask(Request $request)
    {
       // dd('hiii');
        $data = $request->validate(['title' => 'required|string|min:2|max:255']);
        $data['user_id'] = auth()->id();
        Task::create($data);
        //return redirect()->route('home')->with('flash_message', 'تسک جدید اضافه شد.');
        return redirect()->route('home')->with('swal-success', 'تسک جدید با موفقیت ساخته شد');


    }

    public function changeTaskStatus($id,$status)
    {
       $task = Task::find($id);
       $task->update(['status' => $status]);
       $tasks = Task::all();
       $html = view('tasks-ajax',compact(['tasks']))->render();

       return response()->json(['html'=>$html]);

    }

    public function deleteTask(Task $task)
    {
        //dd($task);
        $result = $task->delete();
        return redirect()->route('home')->with('swal-success', ' تسک با موفقیت حذف شد');

    }
}
