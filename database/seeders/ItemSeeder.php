<?php

namespace Database\Seeders;

use App\Models\Item;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::factory()->create([
            'name' => 'margherita', 'description' => 'Classic margherita pizza with a sourdough crust. Authentic tomato sauce topped with mozzarella cheese.', 'price' => 10.99, 'image' => 'margherita.jpg',
        ]);
        Item::factory()->create([
            'name' => 'neapolitan', 'description' => 'Authentic Neapolitan with a sourdough base. Crispy thin crust topped with home made tomato sauce with fresh mozzarella and basil.', 'price' => 10.99, 'image' => 'neapolitan.jpg',
        ]);
        Item::factory()->create([
            'name' => 'chicken fajita', 'description' => 'Spicy fajita pizza on a sourdough base. Tomato base with mozzarella cheese. Topped with charred onion, bell pepper chicken and fresh chilli spiced with cumin. ', 'price' => 12.99, 'image' => 'fajita.jpg',
        ]);
    }
}
