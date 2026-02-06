<?php

namespace App\Livewire\Pages\Subcomponent\TaskPages;

use Livewire\Component;

class TaskListSubcomponent extends Component
{
    public $task;
    public function render()
    {
        return view('livewire.pages.subcomponent.task-pages.task-list-subcomponent');
    }
}
