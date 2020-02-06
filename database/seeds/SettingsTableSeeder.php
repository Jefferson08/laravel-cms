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
                'name' => 'email',
                'content' => 'example@example.com'
            ],
            [
                'name' => 'bg_color',
                'content' => '#20ff0f'
            ],
            [
                'name' => 'text_color',
                'content' => '#006bf3'
            ]
        ]);
    }
}
