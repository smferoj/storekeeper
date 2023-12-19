<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function createProduct(){
        return view('createproduct');
    }

    public function storeProduct(Request $request){
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'price' => 'required|string|max:255',
            'amount' => 'required|string|max:255',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif|max:2048',
        ]);

        // Image Processing

        if($request ->hasFile('image')){
            $image = $request->file('image');
            $fileNameToStore = 'image_'.md5(uniqid()).time().'.'.
            $image ->getClientOriginalExtension();
            $image->move(public_path('assets/gallery/products'), $fileNameToStore);
        }

        // Save Data to Product Table

        DB::table('products')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'amount' => $request->amount,
            'image' => 'assets/gallery/products/'.$fileNameToStore,
        ]);

        return redirect()->back()->with('success', 'Product created successfully!');
    }

    public function destroy($id){
        $product = DB::table('products')->where('id', $id)->first();
        $removedFile = unlink(public_path($product->image));
        if($removedFile){
            DB::table('products')->where('id', $id)->delete();
            return redirect()->back()->with('success', 'Product Deleted Successfully!');
        }

        return redirect()->back();
    }

}
