<?php

use Illuminate\Database\Seeder;

class ConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Config::insert([
            ['name' => 'site_name', 'value' => 'Realtor'],
            ['name' => 'site_title', 'value' => 'Realtor'],
            ['name' => 'copyright_owner', 'value' => 'Realtor'],
            ['name' => 'admin_email', 'value' => 'ochui.princewill@gmail.com'],
        ]);
    }
}
