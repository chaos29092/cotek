<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        User::create(array('password' => Hash::make('cotek520'), 'username' => 'cotek', 'is_admin' => 'true'));
    }

}