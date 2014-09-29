<?php

class ProductController extends BaseController {
    //index discount products
    public function index()
    {
        if(!Cache::has('indexProducts'))
        {
            $date['products'] = Product::take(20)->where('is_discount','=', 1)->orderBy('id','desc')->get(array('id','category','name','indexphoto','mrg','miniintro','fnt','style'));
            Cache::forever('indexProducts',$date);
        }
        return View::make('index',Cache::get('indexProducts'));
    }

    //prodcut page
    public function dicountPage($product)
    {
        $url = URL::current();
        $date['product'] = $product;
        $date['url'] = $url . '/inquiry';
        return View::make('product_master', $date);
    }

    //All products list
    public function all()
    {
        $date['products'] = Product::orderBy('id','desc')->paginate(20,array('id','category','name','indexphoto','mrg','miniintro','fnt','style'));
        $date['category'] = 'Products';
        return View::make('products',$date);
    }

    //products categoty
    public  function category($category)
    {
        $date['products'] = Product::where('category','=',$category)->orderBy('id','desc')->get(array('id','category','name','indexphoto','mrg','miniintro','fnt','style'));
        $date['category'] = $category;
        return View::make('products',$date);
    }

    //admin products list
    public function listAll()
    {
        $date['products'] = Product::where('id','>', 0)->orderBy('id','desc')->paginate(20);
            return View::make('admin.products', $date);
    }

    //create product
    public function getCreate()
    {
        $product = new Product;
        return View::make('admin.product_create')
            ->with('product', $product);
    }
    public function create()
    {
        $rule = array('name'=>'required');
        $validator = Validator::make(Input::except(array('mainphoto','appphoto','adphoto_1','adphoto_2','adphoto_3','adphoto_4','footerphoto','indexphoto')),$rule);

        if ($validator->passes())
        {
            mkdir('img/product/'.Input::get('name'));
            $product = Product::create(Input::except(array('mainphoto','appphoto','adphoto_1','adphoto_2','adphoto_3','adphoto_4','footerphoto','indexphoto')));
            //需要上传的图片
            if(Input::hasFile('mainphoto'))
            {
                $fileName = Input::file('mainphoto')->getClientOriginalName();
                Input::file('mainphoto')->move('img/product/'.Input::get('name'),$fileName);
                $product->update(array('mainphoto'=> $fileName));
            }
            if(Input::hasFile('appphoto'))
            {
                $fileName = Input::file('appphoto')->getClientOriginalName();
                Input::file('appphoto')->move('img/product/'.Input::get('name'),$fileName);
                $product->update(array('appphoto'=> $fileName));
            }
            if(Input::hasFile('adphoto_1'))
            {
                $fileName = Input::file('adphoto_1')->getClientOriginalName();
                Input::file('adphoto_1')->move('img/product/'.Input::get('name'),$fileName);
                $product->update(array('adphoto_1'=> $fileName));
            }
            if(Input::hasFile('adphoto_2'))
            {
                $fileName = Input::file('adphoto_2')->getClientOriginalName();
                Input::file('adphoto_2')->move('img/product/'.Input::get('name'),$fileName);
                $product->update(array('adphoto_2'=> $fileName));
            }
            if(Input::hasFile('adphoto_3'))
            {
                $fileName = Input::file('adphoto_3')->getClientOriginalName();
                Input::file('adphoto_3')->move('img/product/'.Input::get('name'),$fileName);
                $product->update(array('adphoto_3'=> $fileName));
            }
            if(Input::hasFile('adphoto_4'))
            {
                $fileName = Input::file('adphoto_4')->getClientOriginalName();
                Input::file('adphoto_4')->move('img/product/'.Input::get('name'),$fileName);
                $product->update(array('adphoto_4'=> $fileName));
            }
            if(Input::hasFile('footerphoto'))
            {
                $fileName = Input::file('footerphoto')->getClientOriginalName();
                Input::file('footerphoto')->move('img/product/'.Input::get('name'),$fileName);
                $product->update(array('footerphoto'=> $fileName));
            }
            if(Input::hasFile('indexphoto'))
            {
                $fileName = Input::file('indexphoto')->getClientOriginalName();
                Input::file('indexphoto')->move('img/product/'.Input::get('name'),$fileName);
                $product->update(array('indexphoto'=> $fileName));
            }
            //flush index products cache
            $date['products'] = Product::take(20)->where('is_discount','=', 1)->orderBy('id','desc')->get(array('id','category','name','indexphoto','mrg','miniintro','fnt','style'));
            Cache::forever('indexProducts',$date);

        return Redirect::to('admin/products/'.$product->id.'/edit')
            ->with('message', 'Successfully created product!');
        }
        else
        {
            return Redirect::back()
                ->with('message','产品name必须填写！');
        }
    }

    //edit product
    public function getEdit (Product $product)
    {
        return View::make('admin.product_edit')->with('product',$product);
    }

    public  function putEdit (Product $product) {
        //保存mainphoto图片路径，默认路径为img/product/$product->name，并且在修改了name后也修改相应文件夹名称
        $mainphoto = Input::file('mainphoto');
        $appphoto = Input::file('appphoto');
        $adphoto_1 = Input::file('adphoto_1');
        $adphoto_2 = Input::file('adphoto_2');
        $adphoto_3 = Input::file('adphoto_3');
        $adphoto_4 = Input::file('adphoto_4');
        $footerphoto = Input::file('footerphoto');
        $indexphoto = Input::file('indexphoto');
        $name = Input::get('name');
        if($name or $mainphoto or $appphoto or $adphoto_1 or $adphoto_2 or $adphoto_3 or $adphoto_4 or $footerphoto){
            //if name be edit,then modify img folder.
            if($name)
            {
                rename('img/product/'.$product->name,'img/product/'.$name);
            }

            if($mainphoto)
            {
                $fileName = $mainphoto->getClientOriginalName();
                $mainphoto->move('img/product/'.$name, $fileName) ;
                $product->update(array('mainphoto'=> $fileName));
            }
            if($appphoto)
            {
                $fileName = $appphoto->getClientOriginalName();
                $appphoto->move('img/product/'.$name, $fileName) ;
                $product->update(array('appphoto'=> $fileName));
            }
            if($adphoto_1)
            {
                $fileName = $adphoto_1->getClientOriginalName();
                $adphoto_1->move('img/product/'.$name, $fileName) ;
                $product->update(array('adphoto_1'=> $fileName));
            }
            if($adphoto_2)
            {
                $fileName = $adphoto_2->getClientOriginalName();
                $adphoto_2->move('img/product/'.$name, $fileName) ;
                $product->update(array('adphoto_2'=> $fileName));
            }
            if($adphoto_3)
            {
                $fileName = $adphoto_3->getClientOriginalName();
                $adphoto_3->move('img/product/'.$name, $fileName) ;
                $product->update(array('adphoto_3'=> $fileName));
            }
            if($adphoto_4)
            {
                $fileName = $adphoto_4->getClientOriginalName();
                $adphoto_4->move('img/product/'.$name, $fileName) ;
                $product->update(array('adphoto_4'=> $fileName));
            }
            if($footerphoto)
            {
                $fileName = $footerphoto->getClientOriginalName();
                $footerphoto->move('img/product/'.$name, $fileName) ;
                $product->update(array('footerphoto'=> $fileName));
            }
            if($indexphoto)
            {
                $fileName = $indexphoto->getClientOriginalName();
                $indexphoto->move('img/product/'.$name, $fileName) ;
                $product->update(array('indexphoto'=> $fileName));
            }
        }

        //update all date except image.
        $product->update(Input::except(array('mainphoto','appphoto','adphoto_1','adphoto_2','adphoto_3','adphoto_4','footerphoto','indexphoto')));
        //flush index products cache
        $date['products'] = Product::take(20)->where('is_discount','=', 1)->orderBy('id','desc')->get(array('id','category','name','indexphoto','mrg','miniintro','fnt','style'));
        Cache::forever('indexProducts',$date);
        return Redirect::back()
            ->with('message', 'Successfully updated product!');
    }

    //delete product
    public function getDelete(Product $product)
    {
        return View::make('admin.product_delete')
            ->with('product',$product);
    }

    public function delete(Product $product)
    {
        $product->delete();
        //flush index products cache
        $date['products'] = Product::take(20)->where('is_discount','=', 1)->orderBy('id','desc')->get(array('id','category','name','indexphoto','mrg','miniintro','fnt','style'));
        Cache::forever('indexProducts',$date);
        return Redirect::to('admin/products')
            ->with('message','Successfully deleted product!');
    }

}