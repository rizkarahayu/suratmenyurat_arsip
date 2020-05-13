<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Kadep',
               'email'=>'kadep@mail.com',
                'is_admin'=>'kadep',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Sekretaris',
               'email'=>'sekretaris@mail.com',
                'is_admin'=>'sekretaris',
               'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Pengadaan',
                'email'=>'tim_pengadaan@mail.com',
                 'is_admin'=>'pengadaan',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Kontraktor',
                'email'=>'sub_kontraktor@mail.com',
                 'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
