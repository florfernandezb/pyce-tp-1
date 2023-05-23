<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function productsList() {
        $products = Product::all();
        return view('products\products-list', ['products' => $products]);
        
    }

    public function newProductForm() {
        return view('products.new-product-form');
    }

    public function processCreateProduct(Request $request) {
        $product = $request->except('_token');
        
        $request->validate(Product::validationRules(), Product::validationMessages());

        if($request->hasFile('image')) {
            $product['image'] = $this->uploadImage($request);
        }
        
        Product::create($product);

        return redirect()->route('productsList')->with('feedback.message', 'El producto ' . e($product['name']) . ' se creó con éxito');
    }

    public function product(int $id) {
        $product = Product::findOrFail($id);
        return view('products.product', ['product' => $product]);
    }

    public function updateProductForm(int $id) {

        return view('products.update-product-form', ['product' => Product::findOrFail($id)]);
    }

    public function processUpdate(int $id, Request $request) {
        $product = Product::findOrFail($id);
        
        $request->validate(Product::validationRules(), Product::validationMessages());
        
        $newData = $request->except('_token');
        $oldImage = null;

        if($request->hasFile('image')) {
            $newData['image'] = $this->uploadImage($request);
            $oldImage = $product->image;
        }

        $product->update($newData);
        
        $this->deleteImage($oldImage);
        
        return redirect()->route('productsList')->with('feedback.message', 'El producto ' . e($product->name) . ' se modificó       con éxito');
    }

    public function confirmDelete(int $id) {

        return view('products.confirm-delete-product', ['product' => Product::findOrFail($id)]);
    }

    public function processDelete(int $id) {
        $product = Product::findOrFail($id);
        $name = $product['name'];
        $product->delete();
        $this->deleteImage($product->image); 
        return redirect()->route('productsList')->with('feedback.message', 'El producto ' . e($name) . ' se eliminó       con éxito');
    }

    /**
     * @param Request $request
     * @return string Product image name.
     */
    protected function uploadImage(Request $request): string
    {
        $image = $request->file('image');

        $imageName = date('YmdHis_') . Str::slug($request->input('title')) . "." . $image->guessExtension();

        $image->storeAs('imgs', $imageName);

        return $imageName;
    }
    
    /**
     * Borra la portada de la película.
     *
     * @param string|null $file
     * @return void
     */
    protected function deleteImage(?string $file): void
    {
        if($file !== null && Storage::has('imgs/' . $file)) {
            Storage::delete('imgs/' . $file);
        }
    }
 }
       