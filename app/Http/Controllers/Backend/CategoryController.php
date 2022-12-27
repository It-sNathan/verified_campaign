<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Select Query
    public function category(){
        $result = Category::all();
        $data = compact('result');
        return view('backend.category')->with($data);
    }

    public function manage_category(Request $request){
        $category = new Category;
        $url = url('/admin/category/manage-category/insert');
        $title = 'Add Category';
        $data = compact('category', 'url', 'title');
        return view('backend.manage_category')->with($data);
    }

    // Insert Query
    public function insert(Request $request){
        $request->validate(
            [
                'category_name' => 'required',
                'category_slug' => 'required|unique:categories'
            ]
        );
        $status = 1;
        $category = new Category;
        $category->category_name = $request['category_name'];
        $category->category_slug = $request['category_slug'];
        $category->status = $status;
        $category->save();
        $request->session()->flash('message', 'Category has been added successfully!');
        return redirect('/admin/category');
    }

    public function edit($id){
        $category = Category::find($id);
        if(is_null($category)){
            return redirect('/admin/category');
        }
        else{
            $url = url('/admin/category/manage-category/update'.'/'.$id);
            $title = 'Update Category';
            $category->category_name;
            $category->category_slug;
        }
        $data = compact('category','url', 'title');
        return view('backend.manage_category')->with($data);
    }

    // Update Query
    public function update($id, Request $request){
        $category = Category::find($id);
        $category->category_name = $request['category_name'];
        $category->category_slug = $request['category_slug'];
        $category->save();
        $request->session()->flash('message', 'Category has been updated successfully!');
        return redirect('/admin/category');
    }

    // Delete Query
    public function delete(Request $request, $id){
        $category = Category::find($id);
        if(!is_null($category)){
            $category->delete();
        }
        $request->session()->flash('message', 'Category has been deleted successfully!');
        return redirect('/admin/category');
    }

    public function status(Request $request, $status, $id){
        $category = Category::find($id);
        $category->status = $status;
        $category->save();
        $request->session()->flash('message', 'Category status has been updated successfully!');
        return redirect('/admin/category');
    }
}
