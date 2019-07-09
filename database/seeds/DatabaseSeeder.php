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
        
        // Loop for all seeds - ToDo

        // $this->call(UsersTableSeeder::class);
        $path = base_path().'/database/seeds/sql/countries.sql';
        $sql = file_get_contents($path);
        DB::unprepared($sql);

        // $this->call(UsersTableSeeder::class);
        $path = base_path().'/database/seeds/sql/subsidiaries.sql';
        $sql = file_get_contents($path);
        DB::unprepared($sql);




    }

}
