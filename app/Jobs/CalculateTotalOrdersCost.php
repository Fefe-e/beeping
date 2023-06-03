<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Order;


class CalculateTotalOrdersCost implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle()
    {
        $totalCost = Order::with('orderLines.product')
            ->get()
            ->flatMap(function ($order) {
                return $order->orderLines->map(function ($orderLine) {
                    return $orderLine->qty * $orderLine->product->cost;
                });
            })
            ->sum();

        echo "El costo total de todas las órdenes es: $totalCost";
    }
}
