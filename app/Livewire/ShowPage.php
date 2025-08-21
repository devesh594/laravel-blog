<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Page;
use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Title('View Page')]
class ShowPage extends Component
{
    public ?string $slug = null;
    /**
     * Mount the component
     */
    public function mount(string $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * Render the component
     */
    public function render(): View
    {
        $page = Page::where('slug', $this->slug)
            ->firstOrFail();

        return view('livewire.show-page', [
            'page' => $page,
        ]);
    }
}
