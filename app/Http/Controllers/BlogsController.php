<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Auth;

class BlogsController extends Controller
{
    
    
    protected $limit = 5;
    protected $uploadPath;
    
    public function __construct()
    {
        $this->uploadPath = public_path(config('cms.image.blogs'));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serial = 1;
        $blogs = Blog::orderBy('id', 'desc')->paginate($this->limit);
        return view("admin.pages.blogs.index", compact('blogs','serial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = new Blog();
        return view('admin.pages.blogs.create', compact('blog'));
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

        $blog = Blog::create($data);

        return redirect()->action('BlogsController@index')->with('success', 'Your Blog was created successfully!');
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
        $blog = Blog::findOrFail($id);
        return view("admin.pages.blogs.edit", compact('blog'));
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
        $product = Blog::findOrFail($id);
        $oldImage = $product->photo;
        $data     = $this->handleRequest($request);
        $product->update($data);

        if ($oldImage !== $product->photo) {
            $this->removeImage($oldImage);
        }
        return redirect()->action('BlogsController@index')->with('success', 'Your Blog was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $product = Blog::findOrFail($id);
        $image =  $product->photo;
        $product->delete();

        $this->removeImage($image);

        return redirect()->back()->with('success', 'You Blog has been delete from the database!');
    }
    
        

    private function handleRequest($request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

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
