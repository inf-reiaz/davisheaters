<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PartnerImage;
class PartnerimagesController extends Controller
{
    
    protected $limit = 100;
    protected $uploadPath;
    
    public function __construct()
    {
        $this->uploadPath = public_path(config('cms.image.partner'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serial = 1;
        $partners = PartnerImage::latest()->paginate($this->limit);
        // return $aboutus;
        return view("admin.pages.partner.images", compact('partners','serial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $partner = new PartnerImage();
        return view('admin.pages.partner.add', compact('partner'));
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

        PartnerImage::create($data);

        return redirect()->action('PartnerimagesController@index')->with('success', 'Partner Image successfully Add !');
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
        $partner = PartnerImage::findOrFail($id);
        return view("admin.pages.partner.edit1", compact('partner'));
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
        $partner = PartnerImage::findOrFail($id);
        $oldImage = $partner->partner_image;
        $data     = $this->handleRequest($request);
        $partner->update($data);

        if ($oldImage !== $partner->photo) {
            $this->removeImage($oldImage);
        }
        return redirect()->action('PartnerimagesController@index')->with('success', 'Partner Image successfully Uplode!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $partner = PartnerImage::findOrFail($id);
        $image =  $partner->partner_image;
        $partner->delete();

        $this->removeImage($image);

        return redirect()->back()->with('success', 'You data has been delete from the database!');
    }
    
    

    private function handleRequest($request)
    {
        $data = $request->all();

        if ($request->hasFile('partner_image'))
        {
            $image       = $request->file('partner_image');
            $img    = $image->getClientOriginalName();
            $fileName    = date('Ymdhis').$img;
            $destination = $this->uploadPath;

            $successUploaded = $image->move($destination, $fileName);

            $data['partner_image'] = $fileName;
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
