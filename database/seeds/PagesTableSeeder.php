<?php

use App\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'title' => 'Title Example',
            'slug' => 'title-slug-example',
            'body' => 'Page body text example'
        ]);
    }
}
