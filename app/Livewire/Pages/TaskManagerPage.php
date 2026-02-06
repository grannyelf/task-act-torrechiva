<?php

namespace App\Livewire\Pages;

use App\Models\Task;
use Livewire\Component;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.app')]
class TaskManagerPage extends Component
{
    public $title;
    public $description;

    #[Computed()]
    public function mount()
    {
        $this->title = '';
        $this->description = '';
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:30|min:3',
            'description' => 'required|string|max:255|min:3',
        ];
    }

    public function message()
    {
        return [
            'title.required' => 'The task title is required.',
            'title.min' => 'The task title must be at least 3 characters.',
            'title.max' => 'The task title may not be higher than 30 characters.',

            'description.required' => 'The task description is required.',
            'description.min' => 'The task description must be at least 3 characters.',
            'description.max' => 'The task description may not be higher than 255 characters.',
        ];
    }

    public function save()
    {
        $validatedData = $this->validate();
        $validatedData['title'] = htmlspecialchars(strip_tags(trim($validatedData['title'])));
        $validatedData['description'] = htmlspecialchars(strip_tags(trim($validatedData['description'])));

        Task::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
        ]);

        $this->reset('title', 'description');
        session()->flash('success', 'Task created successfully!');
    }

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.pages.task-manager-page');
    }
}
