<?php

class InquiryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $date['inquiries'] = Inquiry::where('id','>', 0)->orderBy('id','desc')->paginate(30);
        return View::make('admin.inquiries', $date);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($product)
	{
        $date = Input::all();
        $inquiry = new Inquiry;
        $inquiry->email = $date['email'];
        $inquiry->subject = $date['subject'];
        $inquiry->message = $date['message'];
        $inquiry->product = $product->name;
        $inquiry->save();
        return Redirect::back()->with('message', 'Message Send Successfully! We will contact you as soon as possible.');
	}

    public function indexStore()
    {
        $date = Input::all();
        $inquiry = new Inquiry;
        $inquiry->email = $date['email'];
        $inquiry->subject = $date['subject'];
        $inquiry->message = $date['message'];
        $inquiry->product = 'index';
        $inquiry->save();
        return Redirect::back()->with('message', 'Message Send Successfully! We will contact you as soon as possible.');
    }

    public function faqStore()
    {
        $date = Input::all();
        $inquiry = new Inquiry;
        $inquiry->email = $date['email'];
        $inquiry->subject = $date['subject'];
        $inquiry->message = $date['message'];
        $inquiry->product = 'faq';
        $inquiry->save();
        return Redirect::back()->with('message', 'Message Send Successfully! We will contact you as soon as possible.');
    }


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
