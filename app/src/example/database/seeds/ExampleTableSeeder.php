<?php

use Illuminate\Database\Seeder;

class ExampleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('example')->insert([
                'name' => str_random(10),
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ]);
        }
    }
}
