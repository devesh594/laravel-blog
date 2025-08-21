<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\Category;
use Livewire\Attributes\Url;
class ShowBlog extends Component
{

    #[Url]
    public $categorySlug = null;
    public $paginate = 10;
    public function render()
    {
        $categories = Category::all();


        if (!empty($this->categorySlug)) {
            $category = Category::where('slug', $this->categorySlug)->first();


            if (empty($category)) {
                abort(404);
            }

            $articles = Article::orderBy('created_at', 'desc')
                ->where('category_id', $category->id)
                ->where('status', 1)
                ->paginate($this->paginate);
        } else {
            $articles = Article::orderBy('created_at', 'desc')->where('status', 1)->paginate($this->paginate);
        }

        $latestArticles = Article::orderBy('created_at', 'desc')
            ->take($this->paginate)
            ->where('status', 1)
            ->get();



        return view('livewire.show-blog', [
            'articles' => $articles,
            'categories' => $categories,
            'latestArticles' => $latestArticles,
        ]);
    }
}
