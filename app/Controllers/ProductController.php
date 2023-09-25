<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductController extends BaseController
{
    private $product;
    public function __construct(){
        $this->product = new \App\Models\ProductModel();
    }

    public function index()
    {
        $data['product'] = $this->product->findAll();
        return view('product/index', $data);
    }

    public function createProduct(){
        return view('product/create');
    }

    public function storeProduct(){
        $data = [
            'ProductName' => $this->request->getPost('ProductName'),
            'ProductDescription' => $this->request->getPost('ProductDescription'),
            'ProductCategory' => $this->request->getPost('ProductCategory'),
            'ProductQuantity' => $this->request->getPost('ProductQuantity'),
            'ProductPrice' => $this->request->getPost('ProductPrice'),
        ];
        $this->product->save($data);
        return redirect()->to(base_url('product'))->with('status', 'Product Added Successfully!');
    }
    
    public function editProduct($id){
        $data['product'] = $this->product->find($id);
        return view('product/edit', $data);
    }

    public function updateProduct($id){
        $data = [
            'ProductName' => $this->request->getPost('ProductName'),
            'ProductDescription' => $this->request->getPost('ProductDescription'),
            'ProductCategory' => $this->request->getPost('ProductCategory'),
            'ProductQuantity' => $this->request->getPost('ProductQuantity'),
            'ProductPrice' => $this->request->getPost('ProductPrice'),
        ];
        $this->product->update($id, $data);
        return redirect()->to(base_url('product'))->with('status', 'Product Updated Successfully!');
    }

    public function deleteProduct($id){
        $this->product->delete($id);
        return redirect()->to(base_url('product'))->with('status', 'Product Deleted Successfully!');
    }

    //Hakdog lng
    public function dropdown(){
        return view('product/dropdown');
    }
}
