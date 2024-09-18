<?php

use Illuminate\Database\Seeder;

class seed_create extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jabatans')->insert([
            'Jabatan'=>'CEO'
        ]);
        DB::table('jabatans')->insert([
            'Jabatan'=>'CTO'
        ]);
        DB::table('jabatans')->insert([
            'Jabatan'=>'Front End'
        ]);
        DB::table('jabatans')->insert([
            'Jabatan'=>'Developer'
        ]);
        DB::table('jabatans')->insert([
            'Jabatan'=>'Bendahara'
        ]);
    }
}
