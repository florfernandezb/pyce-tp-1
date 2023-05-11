<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use \App\Models\Product;

class ProductData extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Product $product) {   }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-data');
    }
}
