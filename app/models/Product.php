<?php

class Product extends Eloquent
{
    //使table中以下列可被修改
    protected $fillable = array('name','is_discount','category','mainphoto','introduction','appphoto',
        'app', 'advantage', 'adphoto_1', 'adphoto_2', 'adphoto_3', 'adphoto_4', 'tocustomer', 'footerphoto',
    'indexphoto', 'mrg', 'miniintro', 'fnt', 'style');
}