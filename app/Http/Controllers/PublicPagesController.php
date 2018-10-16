<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Slider;
use App\Visitor;
use App\Product;
use App\Category;
use App\Project;
use App\AskQuestion;
use Mail;
class PublicPagesController extends Controller
{
    
    public function getSearch(Request $request)
    {
        $term = $request->term;
        // return $term;
        $blogs = Blog::where("title","LIKE","%{$term}%")->orWhere("body","LIKE","%{$term}%")->get()->toArray();
        $products = Product::where("title","LIKE","%{$term}%")->orWhere("body","LIKE","%{$term}%")->get();
        $projects = Project::where("project_name","LIKE","%{$term}%")->orWhere("owner_name","LIKE","%{$term}%")->get()->toArray();
        // $results = array_merge($blogs,$products,$projects);
        // return $results;
        return view('front.pages.serarch',compact('products'));
    }
    
    public function getIndex()
    {
        $visitor = Visitor::find(1);
        $visitor->increment('count');
        
        $sliders = Slider::latest()->take(3)->get();
        // return $sliders;
        $blogs = Blog::latest()->where('homepage','=','Yes')->take(4)->get();
        
        $categories = Category::latest()->get();
        
        // return $categories;
        return view('front.pages.home',compact('blogs','sliders','categories'));
    }
    
    
    
    public function getProjectsid($id)
    {
        
        $sliders = Slider::latest()->take(3)->get();
        $project = Project::latest()->paginate(20);
        $id = $id;
        return view('front.pages.project_id',compact('project','sliders','id'));
    }


    
    public function getProjects()
    {
        
        $project = Project::latest()->paginate(20);
        // return $id;
        return view('front.pages.project',compact('project'));
    }
    
        
    public function getSingleProject($id)
    {
        $blogsOld = Project::latest()->take(4)->get();
        $projecgt = Project::find($id);
        // return $projecgt;
        return view('front.pages.single_project',compact('projecgt','blogsOld'));
    }
    
    
    public function getBlog()
    {
        $blogs = Blog::latest()->paginate(12);
        return view('front.pages.blog.blog',compact('blogs'));
    }
    
        
    public function getSingleBlog($id)
    {
        $blogs = Blog::latest()->popular()->take(3)->get();
        $blogsOld = Blog::latest()->old()->take(4)->get();
        $blog = Blog::find($id);
        $blog->increment('view_count');
        return view('front.pages.blog.single',compact('blog','blogs','blogsOld'));
    }
    
    public function getAbout()
    {
        return view('front.pages.about');
    }
    
    public function getProduct()
    {
        $products = Product::latest()->paginate(20);
        
        return view('front.pages.product',compact('products'));
    }
    
    public function getCtgProduct($id)
    {
        $ctg = Category::find($id);
        
        $products = Product::latest()->where('category_id','=',$ctg->id)->paginate(20);
        
        return view('front.pages.product',compact('products','ctg'));
    }

    public function getSingleProduct($id)
    {
        $p = Product::find($id);
        $products = Product::inRandomOrder()->take(4)->get();
        return view('front.pages.product_single',compact('p','products'));
    }


    
    public function getRequest()
    {
        return view('front.pages.request');
    }
    
    public function getQuote()
    {
        return view('front.pages.quote');
    }
    
    public function getAskQuestion()
    {
        return view('front.pages.ask_question');
    }
    
    
    
    // public function postAskQuestion(Request $request, MailSedingController $mail)
    // {
    //     // return $request->all();
        
    //     $data = [
    //         'name'      => $request->input('name'),
    //         'email'     => $request->input('email'),
    //         'phone'     => $request->input('phone'),
    //         'question'   => $request->input('question'),
    //     ];
        
        
    //     $mails = new \App\Http\Controllers\MailSedingController;
        
    //     // return $data;
        
    //     $mails->postAskQuestion($data);
        
    //     return back()->withErrors(['success'=> 'Message has been received successfully.']);
        
        
        
    // }
    
    
    

    
    public function postAskQuestion(Request $request)
    {
        $data = $request->all();

        $user = AskQuestion::create($data);
        
        // return $user;
        
        $this->sendEmail($user);
        
        return back()->withErrors(['success'=> 'Message has been received successfully.']);
    }
    
    
    
    private function sendEmail($user){
        Mail::send('mails.ask_question',['user'=>$user],function($m) use ($user){
            $m->to($user->email);
            $m->cc( env('EMAIL_INFO') , 'To whom it may concern');
            $m->subject('Active your account');
        });
    }
    
    
}
