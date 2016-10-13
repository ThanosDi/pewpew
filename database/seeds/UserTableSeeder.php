<?php
use Illuminate\Database\Seeder;

// use App\Http\User;
class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    \App\User::create(array(
        'name'     => 'Thanosdi',
        'username' => 'xvipes',
        'email'    => 'thanosdi@live.com',
        'password' => Hash::make('qwaszx12'),
    ));
}

}