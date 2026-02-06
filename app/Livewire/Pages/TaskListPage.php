<?php

namespace App\Livewire\Pages;

use App\Models\Task;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;

#[Layout('components.layouts.app')]
class TaskListPage extends Component
{
    public $task;

    #[Computed()]
    public function tasks()
    {
        return Task::query()
            ->select('id', 'title', 'description', 'created_at')
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function deleteTask($taskId)
    {
        $task = Task::find($taskId);

        if ($task) {
            $task->delete();

            return redirect()->route('tl-page')->with('success',"Task '{$task->title}' deleted successfully!");
        } else {
            session()->flash('error', 'Task not found.');
        }
    }

    #[Layout('components.layouts.app')]
    public function render()
    {
        
        return view('livewire.pages.task-list-page');
    }
}
