<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoriesController extends Controller
{
    
    
    protected $uploadPath;
    
    public function __construct()
    {
        $this->uploadPath = public_path(config('cms.image.ctg'));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serial = 1;
        $categories = Category::orderBy('id', 'desc')->get();
        return view("admin.pages.categories.index", compact('categories','serial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = new Category();
        return view('admin.pages.categories.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $this->handleRequest($request);

        $categor = Category::create($data);

        return redirect()->action('CategoriesController@index')->with('success', 'Your Category was created successfully!');
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
        $category = Category::findOrFail($id);
        return view("admin.pages.categories.edit", compact('category'));
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
        
        
        $category = Category::findOrFail($id);
        $oldImage = $category->photo;
        $data     = $this->handleRequest($request);
        
        $category->update($data);

        if ($oldImage !== $category->photo) {
            $this->removeImage($oldImage);
        }
        
        return redirect()->action('CategoriesController@index')->with('success', 'Your Category was Udpated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        
        $category->delete();


        return redirect()->back()->with('success', 'You Category has been delete from the database!');
    }
    
    
    
    private function handleRequest($request)
    {
        $data = $request->all();
// return $date;
        if ($request->hasFile('photo'))
        {
            $image       = $request->file('photo');
            $img    = $image->getClientOriginalName();
            $fileName    = date('Ymdhis').$img;
            $destination = $this->uploadPath;

            $successUploaded = $image->move($destination, $fileName);

            $data['photo'] = $fileName;
        }

        return $data;
    }
    
    
        
    private function removeImage($image)
    {
        if ( ! empty($image) )
        {
            $imagePath     = $this->uploadPath . '/' . $image;

            if ( file_exists($imagePath) ) unlink($imagePath);
        }
    }
    
    
}
