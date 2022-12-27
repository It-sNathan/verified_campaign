<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    // Select Query
    public function services(){
        $result = Service::all();
        $data = compact('result');
        return view('backend.services')->with($data);
    }

    public function manage_services(Request $request){
        $services = new Service;
        $url = url('/admin/services/manage-services/insert');
        $title = 'Add Service';
        $result['category'] = DB::table('categories')->where(['status'=>1])->get(); 
        $data = compact('services', 'url', 'title');
        return view('backend.manage_services', $result)->with($data);
    }

    // Insert Query
    public function insert(Request $request){
        $request->validate(
            [
                'category_id' => 'required',
                'service' => 'required',
                'slug' => 'required|unique:services',
                'rate_per1000' => 'required',
                'min_order' => 'required',
                'max_order' => 'required',
                'desc' => 'required',
                'keywords' => 'required',
            ]
        );
        $status = 1;
        $services = new Service;
        $services->category_id = $request->post('category_id');
        $services->service = $request['service'];
        $services->slug = $request['slug'];
        $services->rate_per1000 = $request['rate_per1000'];
        $services->min_order = $request['min_order'];
        $services->max_order = $request['max_order'];
        $services->desc = $request['desc'];
        $services->status = $status;
        $services->keywords = $request['keywords'];
        $services->save();
        $request->session()->flash('message', 'Service has been added successfully!');
        return redirect('/admin/services');
    }

    public function edit($id){
        $services = Service::find($id);
        if(is_null($services)){
            return redirect('/admin/services');
        }
        else{
            $url = url('/admin/services/manage-services/update'.'/'.$id);
            $title = 'Update Service';
            $result['category'] = DB::table('categories')->where(['status'=>1])->get(); 
            $services->category_id;
            $services->service;
            $services->slug;
            $services->rate_per1000;
            $services->min_order;
            $services->max_order;
            $services->desc;
            $services->status;
            $services->keywords;
        }
        $data = compact('services','url', 'title');
        return view('backend.manage_services', $result)->with($data);
    }

    // Update Query
    public function update($id, Request $request){
        $services = Service::find($id);
        $services->category_id = $request['category_id'];
        $services->service = $request['service'];
        $services->slug = $request['slug'];
        $services->rate_per1000 = $request['rate_per1000'];
        $services->min_order = $request['min_order'];
        $services->max_order = $request['max_order'];
        $services->desc = $request['desc'];
        $services->keywords = $request['keywords'];
        $services->save();
        $request->session()->flash('message', 'Service has been updated successfully!');
        return redirect('/admin/services');
    }

    // Delete Query
    public function delete(Request $request, $id){
        $services = Service::find($id);
        if(!is_null($services)){
            $services->delete();
        }
        $request->session()->flash('message', 'Service has been deleted successfully!');
        return redirect('/admin/services');
    }

    public function status(Request $request, $status, $id){
        $services = Service::find($id);
        $services->status = $status;
        $services->save();
        $request->session()->flash('message', 'Service status has been updated successfully!');
        return redirect('/admin/services');
    }   

    // FrontEnd Services Page Routes
    public function view(){
        $services = Service::all();
        $result['category'] = DB::table('categories')->where(['status'=>1])->get();
        $data = compact('services');
        return view('frontend.services', $result)->with($data);
    }
    
    public function search(Request $request){
        $search = $request['search'] ?? "";
        if($search != ""){
            $services = Service::where('service','LIKE', "%$search%")->get();
        }
            $data = compact('services', 'search');
            return view('frontend.services')->with($data);
    }
}
