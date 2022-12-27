<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{

    // Select Query
    public function coupon(){
        $result = Coupon::all();
        $data = compact('result');
        return view('backend.coupon')->with($data);
    }

    public function manage_coupon(Request $request){
        $coupon = new Coupon;
        $url = url('/admin/coupon/manage-coupon/insert');
        $title = 'Add Coupon';
        $data = compact('coupon', 'url', 'title');
        return view('backend.manage_coupon')->with($data);
    }

    // Insert Query
    public function insert(Request $request){
        $request->validate(
            [
                'title' => 'required',
                'code' => 'required|unique:coupons',
                'value' => 'required'
            ]
        );
        $status = 1;
        $coupon = new Coupon;
        $coupon->title = $request['title'];
        $coupon->code = $request['code'];
        $coupon->value = $request['value'];
        $coupon->status = $status;
        $coupon->save();
        $request->session()->flash('message', 'Coupon has been added successfully!');
        return redirect('/admin/coupon');
    }

    public function edit($id){
        $coupon = Coupon::find($id);
        if(is_null($coupon)){
            return redirect('/admin/coupon');
        }
        else{
            $url = url('/admin/coupon/manage-coupon/update'.'/'.$id);
            $title = 'Update Coupon';
            $coupon->title;
            $coupon->code;
            $coupon->value;
        }
        $data = compact('coupon','url', 'title');
        return view('backend.manage_coupon')->with($data);
    }

    // Update Query
    public function update($id, Request $request){
        $coupon = Coupon::find($id);
        $coupon->title = $request['title'];
        $coupon->code = $request['code'];
        $coupon->value = $request['value'];
        $coupon->save();
        $request->session()->flash('message', 'Coupon has been updated successfully!');
        return redirect('/admin/coupon');
    }

    // Delete Query
    public function delete(Request $request, $id){
        $coupon = Coupon::find($id);
        if(!is_null($coupon)){
            $coupon->delete();
        }
        $request->session()->flash('message', 'Coupon has been deleted successfully!');
        return redirect('/admin/coupon');
    }
    
    public function status(Request $request, $status, $id){
        $coupon = Coupon::find($id);
        $coupon->status = $status;
        $coupon->save();
        $request->session()->flash('message', 'Category status has been updated successfully!');
        return redirect('/admin/coupon');
    }
}
