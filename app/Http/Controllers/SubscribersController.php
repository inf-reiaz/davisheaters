<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Newsletter;

class SubscribersController extends Controller
{
    public function subscribers()
    {
        
        Newsletter::subscribe('rincewind@discworld.com');
        
    }
    
    public function getNewslatter()
    {
        
        $newslatters = Newsletter::latest()->paginate(20);
        return view('admin.pages.newslatter.newslatter',compact('newslatters'));
    }
    

    public function edit($id)
    {
        $newslatter = Newsletter::findOrFail($id);
        return view('admin.pages.newslatter.edit',compact('newslatter'));
    }
    
    public function update(Request $request, $id)
    {
        $newslatter = Newsletter::findOrFail($id);
        $data = $request->all();
        $newslatter->update($data);

        return redirect()->action('SubscribersController@getNewslatter')->with('success', 'Your data was updated successfully!');
    }
    
    public function destroy($id)
    {
        $newslatter = Newsletter::findOrFail($id);
        $newslatter->delete();
        return redirect()->back()->with('success', 'You data is been delete from the database!');
    }
    
}
