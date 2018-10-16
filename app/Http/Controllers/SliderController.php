<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Intervention\Image\Facades\Image;
use Auth;
class SliderController extends Controller
{
    
    
    protected $limit = 5;
    protected $uploadPath;
    
    public function __construct()
    {
        $this->uploadPath = public_path(config('cms.image.directory'));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serial = 1;
        $sliders = Slider::orderBy('id', 'desc')->paginate(10);
        return view("admin.pages.slider.index", compact('sliders','serial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $slider = new Slider();
        return view('admin.pages.slider.create', compact('slider'));
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

        $slider = Slider::create($data);

        return redirect()->action('SliderController@index')->with('success', 'Your post was created successfully!');
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

            if ($successUploaded)
            {
                $width     = config('cms.image.thumbnail.width');
                $height    = config('cms.image.thumbnail.height');
                $extension = $image->getClientOriginalExtension();
                $thumbnail = str_replace(".{$extension}", "_thumb.{$extension}", $fileName);

                Image::make($destination . '/' . $fileName)
                    ->resize($width, $height)
                    ->save($destination . '/' . $thumbnail);
                    
            }

            $data['photo'] = $fileName;
            $data['user_id'] = Auth::user()->id;
        }

        return $data;
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
        $slider = Slider::findOrFail($id);
        return view("admin.pages.slider.edit", compact('slider'));
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
        $slider = Slider::findOrFail($id);
        $oldImage = $slider->photo;
        $data     = $this->handleRequest($request);
        $slider->update($data);

        if ($oldImage !== $slider->photo) {
            $this->removeImage($oldImage);
        }
        return redirect()->action('SliderController@index')->with('success', 'Your post was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $slider = Slider::findOrFail($id);
        $image =  $slider->photo;
        $slider->delete();

        $this->removeImage($image);

        return redirect()->back()->with('success', 'You slider has been delete from the database!');
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
