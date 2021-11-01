<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Inventory;

class InventoryFactory extends Factory
{

    protected $inventory = Inventory::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quantity' => $this->faker->randomNumber(3),
            'product_id' => Product::inRandomOrder()->value('id') ?: factory(Product::class)
        ];
    }
}
