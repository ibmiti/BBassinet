<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\GuideArticles;
use App\Models\HealthArticles;
use App\Models\KidsArticles;
use App\Models\BabyArticles;

class MostPopular extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
         // - get most popular article out of all-time popular articles
         // - this feature may be fully implemented when more users are active
         // - get with founder to plan out how to implement features
         $mostPopular = [];
         // - push articles to articles array
         $mostPopular[] = BabyArticles::take(2)->latest()->get();
         $mostPopular[] = KidsArticles::take(2)->latest()->get();
         $mostPopular[] = GuideArticles::take(2)->latest()->get();
         $mostPopular[] = HealthArticles::take(2)->latest()->get();

        return view('components.most-popular', [
            'mostPopular'   => $mostPopular,
        ]);
    }
}