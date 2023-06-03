<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderLine;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //ORDERS 
        $orders = array(
            array('id' => 1, 'order_ref' => 'Order 1', 'customer_name' => 'Riquelme, Federico', 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 2, 'order_ref' => 'Order 2', 'customer_name' => 'Riquelme, Federico', 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 3, 'order_ref' => 'Order 3', 'customer_name' => 'Riquelme, Federico', 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 4, 'order_ref' => 'Order 4', 'customer_name' => 'Riquelme, Federico', 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 5, 'order_ref' => 'Order 5', 'customer_name' => 'Riquelme, Federico', 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 6, 'order_ref' => 'Order 6', 'customer_name' => 'Riquelme, Federico', 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 7, 'order_ref' => 'Order 7', 'customer_name' => 'Riquelme, Federico', 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 8, 'order_ref' => 'Order 8', 'customer_name' => 'Riquelme, Federico', 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 9, 'order_ref' => 'Order 9', 'customer_name' => 'Riquelme, Federico', 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 10, 'order_ref' => 'Order 10', 'customer_name' => 'Riquelme, Federico', 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 11, 'order_ref' => 'Order 11', 'customer_name' => 'Riquelme, Federico', 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 12, 'order_ref' => 'Order 12', 'customer_name' => 'Riquelme, Federico', 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 13, 'order_ref' => 'Order 13', 'customer_name' => 'Riquelme, Federico', 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 14, 'order_ref' => 'Order 14', 'customer_name' => 'Riquelme, Federico', 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 15, 'order_ref' => 'Order 15', 'customer_name' => 'Riquelme, Federico', 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 16, 'order_ref' => 'Order 16', 'customer_name' => 'Riquelme, Federico', 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 17, 'order_ref' => 'Order 17', 'customer_name' => 'Riquelme, Federico', 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 18, 'order_ref' => 'Order 18', 'customer_name' => 'Riquelme, Federico', 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 19, 'order_ref' => 'Order 19', 'customer_name' => 'Riquelme, Federico', 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 20, 'order_ref' => 'Order 20', 'customer_name' => 'Riquelme, Federico', 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59')
        );

        foreach ($orders as $order) {
            Order::create([
                "id" => $order['id'],
                "order_ref" => $order['order_ref'],
                "customer_name" => $order['customer_name'],
                "created_at" => $order['created_at'],
                "updated_at" => $order['updated_at'],
            ]);
        }

        //PRODUCTS 
        $products = array(
            array('id' => 1, 'name' => 'Product 1', 'cost' => 100.00, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 2, 'name' => 'Product 2', 'cost' => 200.00, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 3, 'name' => 'Product 3', 'cost' => 300.00, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 4, 'name' => 'Product 4', 'cost' => 400.00, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 5, 'name' => 'Product 5', 'cost' => 500.00, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 6, 'name' => 'Product 6', 'cost' => 600.00, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 7, 'name' => 'Product 7', 'cost' => 700.00, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 8, 'name' => 'Product 8', 'cost' => 800.00, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 9, 'name' => 'Product 9', 'cost' => 900.00, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 10, 'name' => 'Product 10', 'cost' => 1000.00, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59')
        );

        foreach ($products as $product) {
            Product::create([
                "id" => $product['id'],
                "name" => $product['name'],
                "cost" => $product['cost'],
                "created_at" => $product['created_at'],
                "updated_at" => $product['updated_at'],
            ]);
        }

        //ORDERS LINES 
        $orderlines = array(
            array('id' => 1, 'order_id' => 1, 'qty' => 1, 'product_id' => 1, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 2, 'order_id' => 2, 'qty' => 2, 'product_id' => 2, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 3, 'order_id' => 3, 'qty' => 3, 'product_id' => 3, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 4, 'order_id' => 4, 'qty' => 4, 'product_id' => 4, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 5, 'order_id' => 5, 'qty' => 5, 'product_id' => 5, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 6, 'order_id' => 6, 'qty' => 1, 'product_id' => 6, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 7, 'order_id' => 7, 'qty' => 2, 'product_id' => 7, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 8, 'order_id' => 8, 'qty' => 3, 'product_id' => 8, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 9, 'order_id' => 9, 'qty' => 4, 'product_id' => 9, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 10, 'order_id' => 10, 'qty' => 5, 'product_id' => 10, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 11, 'order_id' => 11, 'qty' => 1, 'product_id' => 1, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 12, 'order_id' => 12, 'qty' => 2, 'product_id' => 2, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 13, 'order_id' => 13, 'qty' => 3, 'product_id' => 3, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 14, 'order_id' => 14, 'qty' => 4, 'product_id' => 4, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 15, 'order_id' => 15, 'qty' => 5, 'product_id' => 5, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 16, 'order_id' => 16, 'qty' => 1, 'product_id' => 6, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 17, 'order_id' => 17, 'qty' => 2, 'product_id' => 7, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 18, 'order_id' => 18, 'qty' => 3, 'product_id' => 8, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 19, 'order_id' => 19, 'qty' => 4, 'product_id' => 9, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59'),
            array('id' => 20, 'order_id' => 20, 'qty' => 5, 'product_id' => 10, 'created_at' => '2023-01-27 17:11:59', 'updated_at' => '2023-01-27 17:11:59')
        );

        foreach ($orderlines as $orderline) {
            OrderLine::create([
                "id" => $orderline['id'],
                "order_id" => $orderline['order_id'],
                "qty" => $orderline['qty'],
                "product_id" => $orderline['product_id'],
                "created_at" => $orderline['created_at'],
                "updated_at" => $orderline['updated_at'],
            ]);
        }
    }
}
