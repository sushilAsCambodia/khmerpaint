<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Product extends Component
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
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $products = \App\Models\Product::active()->get()->toArray();
        $categories = \App\Models\Category::active()->get()->toArray();
        return view('components.product',compact('products', 'categories'));
    }
}
