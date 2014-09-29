<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        User::create(array('password' => Hash::make('camellia520'), 'username' => 'camellia', 'is_admin' => 'true'));
    }

}