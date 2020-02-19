<?php

use App\Visitor;
use Illuminate\Database\Seeder;

class VisitorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Visitor::create([
            'page' => 'page-example-1',
            'ip' => '111.111.111.111',
            'date_access'=> now()
        ]);

        Visitor::create([
            'page' => 'page-example-2',
            'ip' => '111.111.111.111',
            'date_access'=> now()
        ]);

        Visitor::create([
            'page' => 'page-example-1',
            'ip' => '222.222.222.222',
            'date_access'=> now()
        ]);

        Visitor::create([
            'page' => 'page-example-2',
            'ip' => '222.222.222.222',
            'date_access'=> now()
        ]);
    }
}
