<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('items')->insert(
            array(
                'name' => 'margherita', 'description' => 'Classic margherita pizza with a sourdough crust. Authentic tomato sauce topped with mozzarella cheese.', 'price' => 10.99, 'image' => 'margherita.jpg',
            )
        );
        DB::table('items')->insert(
            array(
                'name' => 'neapolitan', 'description' => 'Authentic Neapolitan with a sourdough base. Crispy thin crust topped with home made tomato sauce with fresh mozzarella and basil.', 'price' => 10.99, 'image' => 'neapolitan.jpg',
            )
        );
        DB::table('items')->insert(
            array(
                'name' => 'chicken fajita', 'description' => 'Spicy fajita pizza on a sourdough base. Tomato base with mozzarella cheese. Topped with charred onion, bell pepper chicken and fresh chilli spiced with cumin. ', 'price' => 12.99, 'image' => 'fajita.jpg',
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
