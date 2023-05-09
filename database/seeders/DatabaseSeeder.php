<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmai.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Bostonn, MA',
        //     'email' => 'email1@gmail.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Nisi aute nisi irure aliqua sit qui esse esse elit minim quis. Fugiat magna est qui tempor deserunt. Nostrud sint minim veniam mollit aliqua. Et amet cillum nulla id cillum ad consequat laboris deserunt aute anim sunt eiusmod veniam. Aliqua nostrud irure aute duis aute amet. Qui veniam sit cillum proident aute voluptate quis amet ad aliqua minim mollit qui. Nostrud incididunt exercitation nisi qui enim magna ex ipsum ad id nulla.'
        // ]);


        // Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'laravel, backend, api',
        //     'company' => 'Stark Industries',
        //     'location' => 'New York, NY',
        //     'email' => 'email2@gmail.com',
        //     'website' => 'https://www.starkindustries.com',
        //     'description' => 'Nisi quis proident adipisicing commodo. Laboris amet anim ex do dolor fugiat consequat et aliquip. Officia deserunt mollit magna anim enim excepteur.'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
