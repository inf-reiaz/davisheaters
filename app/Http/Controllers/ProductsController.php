<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Auth;
class ProductsController extends Controller
{
    
    
    protected $limit = 5;
    protected $uploadPath;
    
    public function __construct()
    {
        $this->uploadPath = public_path(config('cms.image.products'));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serial = 1;
        $products = Product::orderBy('id', 'desc')->paginate($this->limit);
        return view("admin.pages.products.index", compact('products','serial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        return view('admin.pages.products.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        
        $data = $this->handleRequest($request);
// return $data;
        $slider = Product::create($data);

        return redirect()->action('ProductsController@index')->with('success', 'Your product was created successfully!');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view("admin.pages.products.edit", compact('product'));
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
        $product = Product::findOrFail($id);
        $oldImage1 = $product->photo1;
        $oldImage2 = $product->photo2;
        $oldImage3 = $product->photo3;
        $data     = $this->handleRequest($request);
        $product->update($data);

        if ($oldImage1 !== $product->photo1) {
            $this->removeImage($oldImage1);
        }
        if ($oldImage2 !== $product->photo2) {
            $this->removeImage($oldImage2);
        }
        if ($oldImage3 !== $product->photo3) {
            $this->removeImage($oldImage3);
        }
        return redirect()->action('ProductsController@index')->with('success', 'Your Product was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $product = Product::findOrFail($id);
        $image1 =  $product->photo1;
        $image2 =  $product->photo2;
        $image3 =  $product->photo3;
        $product->delete();

        $this->removeImage($image1);
        $this->removeImage($image2);
        $this->removeImage($image3);

        return redirect()->back()->with('success', 'You product has been delete from the database!');
    }
    
        

    private function handleRequest($request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

        if ($request->hasFile('photo1'))
        {
            $image       = $request->file('photo1');
            $img    = $image->getClientOriginalName();
            $fileName    = date('Ymdhis').$img;
            $destination = $this->uploadPath;

            $successUploaded = $image->move($destination, $fileName);

            $data['photo1'] = $fileName;
        }

        if ($request->hasFile('photo2'))
        {
            $image       = $request->file('photo2');
            $img    = $image->getClientOriginalName();
            $fileName    = date('Ymdhis').$img;
            $destination = $this->uploadPath;

            $successUploaded = $image->move($destination, $fileName);

            $data['photo2'] = $fileName;
        }
        
        if ($request->hasFile('photo3'))
        {
            $image       = $request->file('photo3');
            $img    = $image->getClientOriginalName();
            $fileName    = date('Ymdhis').$img;
            $destination = $this->uploadPath;

            $successUploaded = $image->move($destination, $fileName);

            $data['photo3'] = $fileName;
        }

        return $data;
    }
    
    private function removeImage($image)
    {
        if ( ! empty($image) )
        {
            $imagePath     = $this->uploadPath . '/' . $image;
            $ext           = substr(strrchr($image, '.'), 1);
            $thumbnail     = str_replace(".{$ext}", "_thumb.{$ext}", $image);
            $thumbnailPath = $this->uploadPath . '/' . $thumbnail;

            if ( file_exists($imagePath) ) unlink($imagePath);
            if ( file_exists($thumbnailPath) ) unlink($thumbnailPath);
        }
    }
    
}
