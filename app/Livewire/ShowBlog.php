<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\Category;
class ShowBlog extends Component
{
    public function render()
    {
        $categories = Category::all();
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('livewire.show-blog', [
            'articles' => $articles,
            'categories' => $categories,
        ]);
    }
}
