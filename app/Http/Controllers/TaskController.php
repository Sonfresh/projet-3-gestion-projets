<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    use AuthorizesRequests;

    /**
     * Display a listing of the tasks for a specific project.
     */
    public function index(Project $project)
    {
        $this->authorize('view', $project);

        $tasks = $project->tasks()->orderBy('created_at', 'desc')->get();

        return Inertia::render('Tasks/Index', [
            'project' => $project,
            'tasks' => $tasks,
        ]);
    }

    /**
     * Show the form for creating a new task.
     */
    public function create(Project $project)
    {
        $this->authorize('create', [Task::class, $project]);

        return Inertia::render('Tasks/Create', [
            'project' => $project,
        ]);
    }

    /**
     * Store a newly created task in storage.
     */
    public function store(Request $request, Project $project)
    {
        $this->authorize('create', [Task::class, $project]);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $project->tasks()->create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'is_completed' => false,
        ]);

        return redirect()->route('projects.tasks.index', $project)->with('success', 'Tâche créée avec succès.');
    }

    /**
     * Show the form for editing the specified task.
     */
    public function edit(Project $project, Task $task)
    {
        $this->authorize('update', [Task::class, $project]);

        return Inertia::render('Tasks/Edit', [
            'project' => $project,
            'task' => $task,
        ]);
    }

    /**
     * Update the specified task in storage.
     */
    public function update(Request $request, Project $project, Task $task)
    {
        $this->authorize('update', [Task::class, $project]);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_completed' => 'required|boolean',
        ]);

        $task->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'is_completed' => $request->input('is_completed'),
        ]);

        return redirect()->route('projects.tasks.index', $project)->with('success', 'Tâche mise à jour avec succès.');
    }

    /**
     * Remove the specified task from storage.
     */
    public function destroy(Project $project, Task $task)
    {
        $this->authorize('delete', [Task::class, $project]);

        $task->delete();

        return redirect()->route('projects.tasks.index', $project)->with('success', 'Tâche supprimée avec succès.');
    }
}
