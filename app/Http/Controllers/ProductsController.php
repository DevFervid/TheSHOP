<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Category;
use App\Supplier;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index')->with('products', Product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $suppliers = Supplier::get();
        return view('products.create', compact('categories','suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required'
        ]);

        if($request->hasFile('image')) {

            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('/images/', $fileNameToStore);
        }else {
            $fileNameToStore = 'default.png';
        }

        $product= new \App\Product;

        $product->name=$request->get('name');
        $product->description=$request->get('description');
        $product->price=$request->get('price');
        $product->supplier_id=$request->get('supplier_id');
        $product->category_id=$request->get('category_id');
        $product->image=$fileNameToStore;
        $product->save();

        return redirect('products')->with('success', 'Product created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = \App\Product::find($id);
        return view('products.show',compact('product','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = \App\Product::find($id);
        return view('products.edit',compact('product','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product= \App\Product::find($id);
        $product->name=$request->get('name');
        $product->description=$request->get('description');
        $product->price=$request->get('price');
        $product->save();
        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = \App\Product::find($id);
        $product->delete();
        return redirect('products')->with('success','Information has been  deleted');
    }
}
