<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{

    public function mount($ProductData)
    {
        return $this->ProductData = $ProductData;
    }

    public function render()
    {
        return view("livewire.product")->with("product", $this->ProductData);
    }
}
