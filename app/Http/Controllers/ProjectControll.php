<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use Auth;

class ProjectControll extends Controller
{
    
    
    protected $limit = 5;
    protected $uploadPath;
    
    public function __construct()
    {
        $this->uploadPath = public_path(config('cms.image.project'));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serial = 1;
        $projects = Project::orderBy('id', 'desc')->paginate($this->limit);
        return view("admin.pages.project.index", compact('projects','serial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = new Project();
        return view('admin.pages.project.create', compact('project'));
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

        $project = Project::create($data);

        return redirect()->action('ProjectControll@index')->with('success', 'Your Project was created successfully!');
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
        $project = Project::findOrFail($id);
        return view("admin.pages.project.edit", compact('project'));
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
        $project = Project::findOrFail($id);
        $oldImage = $project->photo;
        $data     = $this->handleRequest($request);
        $project->update($data);

        if ($oldImage !== $project->photo) {
            $this->removeImage($oldImage);
        }
        return redirect()->action('ProjectControll@index')->with('success', 'Your Project was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $project = Project::findOrFail($id);
        $image =  $project->photo;
        $project->delete();

        $this->removeImage($image);

        return redirect()->back()->with('success', 'You Project has been delete from the database!');
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
