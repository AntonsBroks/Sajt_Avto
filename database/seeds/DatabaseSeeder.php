<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        Schema::disableForeignKeyConstraints();
        User::truncate();
        User::create(array('id'=>1, 'name'=>'Administrator','email'=>'admin@gmail.com', 'password'=>bcrypt('password'),'role'=>true));

        $this->call(CarSeeder::class);
        Schema::enableForeignKeyConstraints();


    }
}
