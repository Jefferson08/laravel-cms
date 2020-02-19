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
            'title' => 'Page Example 1',
            'slug' => 'page-example-1',
            'body' => 'Page 1 body text example'
        ]);

        Page::create([
            'title' => 'Page Example 2',
            'slug' => 'page-example-2',
            'body' => 'Page 2 body text example'
        ]);
    }
}
