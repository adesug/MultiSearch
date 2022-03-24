<?php

use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawais')->insert([
        	'name' => 'Joni',
        	'jenis_pekerjaan' => 'Web Designer',
        	'umur' => 25,
        	
        ]);
        DB::table('pegawais')->insert([
        	'name' => 'Dodo',
        	'jenis_pekerjaan' => 'Web Designer',
        	'umur' => 25,
        	
        ]);
        DB::table('pegawais')->insert([
        	'name' => 'Bagas',
        	'jenis_pekerjaan' => 'Web Designer',
        	'umur' => 25,
        	
        ]);
        DB::table('pegawais')->insert([
        	'name' => 'Oman',
        	'jenis_pekerjaan' => 'Enginer',
        	'umur' => 20,
        	
        ]);
        DB::table('pegawais')->insert([
        	'name' => 'Andi',
        	'jenis_pekerjaan' => 'Enginer',
        	'umur' => 30,
        	
        ]);
        DB::table('pegawais')->insert([
        	'name' => 'Pandu',
        	'jenis_pekerjaan' => 'Enginer',
        	'umur' => 25,
        	
        ]);

       
    }
}
