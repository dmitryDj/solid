<?php

namespace App\Http\Controllers;

use App\Http\Requests\Task\StoreRequest;
use App\Http\Requests\Task\UpdateRequest;
use App\Models\Task;
use App\Repository\TaskRepository;
use App\Service\TaskService;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    private TaskRepository $taskRepository;
    private TaskService $taskService;

    public function __construct
    (
        TaskRepository $taskRepository,
        TaskService $taskService,
    )
    {
        $this->taskRepository = $taskRepository;
        $this->taskService = $taskService;
    }

    public function export(Request $request)
    {
        $keyword = $request->input('search');

    }

    public function index(Request $request)
    {
        $keyword = $request->input('search');

        if ($keyword) {
            $tasks = $this->taskService->searchByTitleOrDescriptionWithPaginate($keyword);
        } else {
            $tasks = $this->taskRepository->getAllWithPaginate();
        }

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(StoreRequest $request)
    {
        Task::create($request->validated());

        return to_route('tasks.index');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(UpdateRequest $request, Task $task)
    {
        $task->update($request->validated());

        return to_route('tasks.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return to_route('tasks.index');
    }
}
