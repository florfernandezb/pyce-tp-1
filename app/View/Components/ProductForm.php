<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use \App\Models\Product;
use \App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class ProductForm extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public ?Product $product, public String $action, public Collection $categories)
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-form');
    }
}
