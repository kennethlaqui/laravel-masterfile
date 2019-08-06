<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'empl_cde' => 1,
            'bio_code' => 1,
            'lastname' => Str::random(10),
            'firstnme' => Str::random(10),
            'midl_nme' => Str::random(10),
            'midl_ini' => Str::random(1),
            'nickname' => Str::random(10),
            'birthday' => '08-26-1995',
            'sex_____' => 'F',
            'delete__' => false
        ]);
    }
}
