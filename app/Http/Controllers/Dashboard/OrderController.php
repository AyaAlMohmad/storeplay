<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Mail\SentEmail;
use App\Models\Order;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class OrderController extends DashboardController
{
    public function __construct(Order $model)
    {
        parent::__construct();
        $this->model = $model;
        $this->module_actions = ['index', 'show'];
        view()->share([
            'module_actions' => $this->module_actions,
        ]);
    }
  
    public function viewemail($id)
    {
        $item = Order::find($id);
    
  
        return view('emails.createEmail',compact('item'));
    }
    public function sentemail(Request $request)
    {
        $data = [
            'subject' => $request->subject,
            'body' =>$request->body
        ];


      if(  Mail::to($request->email)->send(new SentEmail($data))){
        return redirect()->route('orders.index')->with('success','The message has been sent to your email');
    }
    else{
        return redirect()->route('orders.index')->with('erroe','The message was not sent to the email');

    }
}
}
