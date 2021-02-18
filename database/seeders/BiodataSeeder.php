<?php

namespace Database\Seeders;

use App\Models\BiodataSantri;
use Illuminate\Database\Seeder;


class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $User = BiodataSantri::create([
            'user_id' => '1',
            'no_pendaftaran' => 'ws2021020001',
            'nis' => '',
            'nisn' => '61050023422',
            'no_ijazah' => 'IJZ-12530000',
            'nama_depan' => 'Daniel',
            'nama_belakang' => 'Ariesta',
            'jenis_kelamin' => 'Laki - Laki',
            'tempat_lahir' => 'Dumai',

        ]);

        $User = BiodataSantri::create([
            'user_id' => '2',
            'no_pendaftaran' => '123',
            'nis' => '123',
            'nisn' => '123',
            'no_ijazah' => '123',
            'nama_depan' => 'sutori',
            'nama_belakang' => 'aaas',
            'jenis_kelamin' => 'asdf',
            'tempat_lahir' => 'dfadf',

        ]);
       
    }
}
