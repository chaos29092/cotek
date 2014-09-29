<?php

class InquiryTableSeeder extends Seeder
{

    public function run()
    {
        for ($x=0; $x<=50; $x++){
            Inquiry::create(array(
                'email' => 'example_'.$x.'@a.com',
                'subject' => 'sub ni mei ',
                'message' => 'wo le ge qu hai yao message',
                'product' => 'IPL',));
        }
    }

}