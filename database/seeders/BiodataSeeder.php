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
            'no_pendaftaran' => '1232243',
            'nis' => '123',
            'nisn' => '123',
            'no_ijazah' => '123',
            'nama_depan' => 'yono',
            'nama_belakang' => 'aaas',
            'jenis_kelamin' => 'asdf',
            'tempat_lahir' => 'dfadf',

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
