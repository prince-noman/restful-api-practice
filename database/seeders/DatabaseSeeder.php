<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Petition;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // DB::table( 'petitions' )->insert( [
        //     'title'    => Str::random( 10 ),
        //     'category' => Str::random( 30 ),
        //     'description',
        // ] );
        // Petition::factory( 50 )->create();
        Petition::factory( 50 )->create();
    }
}