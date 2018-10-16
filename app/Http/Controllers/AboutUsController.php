<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aboutus;
use Auth;
class AboutUsController extends Controller
{
    
    protected $uploadPath;
    
    public function __construct()
    {
        $this->uploadPath = public_path(config('cms.image.aboutus'));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutus = Aboutus::findOrFail(1);
        // return $aboutus;
        return view("admin.pages.aboutus.index", compact('aboutus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $aboutus = Aboutus::findOrFail(1);
        return view("admin.pages.aboutus.edit", compact('aboutus'));
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
        $aboutus = Aboutus::findOrFail($id);
        $oldImage = $aboutus->photo;
        $data     = $this->handleRequest($request);
        $aboutus->update($data);

        if ($oldImage !== $aboutus->photo) {
            $this->removeImage($oldImage);
        }
        return redirect()->action('AboutUsController@index')->with('success', 'About Us Content is updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    
    
    private function handleRequest($request)
    {
        $data = $request->all();

        if ($request->hasFile('photo'))
        {
            $image       = $request->file('photo');
            $img    = $image->getClientOriginalName();
            $fileName    = date('Ymdhis').$img;
            $destination = $this->uploadPath;

            $successUploaded = $image->move($destination, $fileName);

            $data['photo'] = $fileName;
            $data['user_id'] = Auth::user()->id;
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
