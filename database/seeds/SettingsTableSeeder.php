<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::truncate();

        Setting::insert([
            [
                'name' => 'title',
                'content' => 'Page title example',
            ],
            [
                'name' => 'subtitle',
                'content' => 'Page subtitle example'
            ],
            [
                'name' => 'description',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
            ],
            [
                'name' => 'address',
                'content' => 'California United States'
            ],
            [
                'name' => 'phone',
                'content' => '(11)9 9999-9999'
            ],
            [
                'name' => 'email',
                'content' => 'example@example.com'
            ],
            [
                'name' => 'bg_color',
                'content' => '#20ff0f'
            ],
            [
                'name' => 'header_color',
                'content' => '#006bf3'
            ]
        ]);
    }
}
