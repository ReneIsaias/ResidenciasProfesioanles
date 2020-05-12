<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CareersSeeder::class);

         $this->call(DegreestudiesSeeder::class);

         $this->call(PermissionsSeeder::class);

         $this->call(PostsSeeder::class);

         $this->call(TypeFileSeeder::class);

         $this->call(ReportsSeeder::class);
    }
}
