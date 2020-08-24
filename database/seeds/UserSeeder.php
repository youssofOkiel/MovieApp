<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'youssof okiel',
            'email' => 'youssofokiel3@gmail.com',
            'password' => Hash::make('1234qwer'),
        ]);
    }
}
