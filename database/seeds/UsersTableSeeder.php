<?php

use App\Admin;
use App\Roles;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();
        $adminRoles = Roles::where('name', 'Admin')->first();
        $editorRoles = Roles::where('name', 'Editor')->first();
        $memberRoles = Roles::where('name', 'Member')->first();

        $admin = Admin::create([
            'admin_name' => 'admin',
            'admin_email' => 'admin@gmail.com',
            'admin_phone' => '0906240410',
            'admin_password' => md5('123456'),
        ]);
        $editor = Admin::create([
            'admin_name' => 'editor',
            'admin_email' => 'editor@gmail.com',
            'admin_phone' => '0906240410',
            'admin_password' => md5('123456'),
        ]);

        $users = Admin::create([
            'admin_name' => 'users',
            'admin_email' => 'users@gmail.com',
            'admin_phone' => '0906240410',
            'admin_password' => md5('123456'),
        ]);

        $admin->roles()->attach($adminRoles);
        $editor->roles()->attach($editorRoles);
        $users->roles()->attach($memberRoles);
    }
}
