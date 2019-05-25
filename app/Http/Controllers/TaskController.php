<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Task;

class TaskController extends Controller
{
    public function index(){
        $data = Task::all();
        return view('pages.home')->with('data', $data);
    }
    public function add(){
        return view('pages.add-task');
    }
    public function delete($id){
        Task::where('id',$id)->delete();
        return redirect('/');
    }
    public function done($id){
        $update = Task::find($id);
        if($update->isComplete == false){
            $update->isComplete = true;
        }else{
            $update->isComplete = false;
        }

        $update->save();
        return redirect('/');
    }
    public function description($id){
        $description = Task::find($id)->description;
        $title = Task::find($id)->title;
        $data = [
          'title' => $title,
          'description' => $description
        ];
        return view('pages.description')->with('data', $data);
    }
    public function update($id){
        $data = Task::find($id);
        return view('pages.update')->with('data', $data);
    }
    public function update_task(Request $request){
        $task = Task::find($request['id']);
        $task->title = $request['title'];
        $task->description = $request['description'];
        $task->save();
        return redirect('/');
    }
    public function store(Request $request){
        $task = Task::create(
            [
                'title' => $request['title'],
                'description' => $request['description'],
                'isComplete' => false
            ]
        );
        return redirect('/');
    }
}
