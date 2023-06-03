<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;

class OrderComponent extends Component
{

    public $orders;

    public function mount()
    {
        $this->orders = Order::with('orderLines.product')->get();
    }

    public function render()
    {
        return view('livewire.order-component');
    }
}
