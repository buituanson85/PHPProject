<?php

use Illuminate\Database\Seeder;
use App\Roles;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::truncate();

        Roles::create([ 'name' => 'Admin']);
        Roles::create([ 'name' => 'Editor']);
        Roles::create([ 'name' => 'Member']);
    }
}
