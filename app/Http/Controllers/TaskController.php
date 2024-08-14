<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Task;
class TaskController extends Controller
{
    public function store(Request $request, Project $project) {
        // Validate the input
        $data = $request->validate([
            'body' => 'required'
        ]);
     $data['project_id']=$project->id;
     Task::create($data);
     return back();
    }
    public function update(Project $project , Task $task,Request $request){
        $task->update([
            'done'=>$request->has('done')
        ]);
        return back();
    }
    public function destroy(Project $project,Task $task)
    {
        $task->delete();
        return redirect('/projects/' . $project->id);
    }
}
