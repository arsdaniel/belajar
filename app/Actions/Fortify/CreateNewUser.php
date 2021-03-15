<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;


class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;
    
    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'nisn' => 'required',
            'no_ijazah' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required|date_format:Y-m-d|before:2015-01-01|after:1995-01-01',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
           
        ])->validate();
           
        $user = User::create([
            'name' => $input['name'],
            'nama_tengah' => $input['nama_tengah'],
            'nama_belakang' => $input['nama_belakang'],
            'no_pendaftaran' => getnoPendaftaran(),
            'email' => $input['email'],
            'tempat_lahir' => $input['tempat_lahir'],
            'tgl_lahir' => $input['tgl_lahir'],
            'password' => Hash::make($input['tgl_lahir']),
            'jenis_kelamin' => $input['jenis_kelamin'],
            'sekolah_asal' => $input['sekolah_asal'],
            'sekolah_sekarang' => $input['sekolah_sekarang'],
        ]);

        

        $user -> assignRole('santri');
        $user->givePermissionTo('santri-baru');

        return $user;
    }
}
