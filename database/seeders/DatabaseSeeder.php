<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Filter;
use App\Models\Image;
use App\Models\OptionFilter;
use App\Models\Travel;
use Illuminate\Database\Seeder;
use Psy\Input\FilterOptions;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Filter::factory(10)->create();

        Filter::all()->map(function(Filter $filter) {

        });

        Image::factory()->create([
            'name' => 'Placeholder Travel Image',
            'file' => 'images/travel-placeholder.jpg',
            'alt' => 'Placeholder image pour voyage'
        ]);

        Travel::factory(500)->create([
            'image_id' => 1
        ]);
    }
}
