<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Mails;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use Mail;
use App\User;

class AccessController extends Controller
{
    // signup functions 
    
    public function addnewUser()
    {
        return view('admin.pages.users.addnewUser');
    }
    
    public function postaddnewUser(Request $request)
    {
        $this->validate($request, [
            'firstname'             => 'required',
            'lastname'              => 'required',
            'username'              => 'required',
            'email'                 => 'required|email|unique:users',
            'password'              => 'required|min:4'
          ]);
        
        $user_data              = $request->all();
        
        $user_data['user_image'] = '/public/admin/users/demo.png';
        $user_data['role'] = 'admin';
        
        $user = User::create($user_data);
        
        if($user)
        {
            
            return redirect(route('login'))->withSuccess('Congrates! Signup has been sucessful. Please login.');
                
            
        } else{
            
            return back()->withErrors('Failed to signup. Please check the required data.')->withInput();
            
        }
        
    }
    
    public function signup()
    {
        return view('admin.pages.users.registration');
    }
    
    
    public function postSignup(Request $request){
        $this->validate($request, [
            'user_image_input'      => 'required',
            'firstname'             => 'required',
            'lastname'              => 'required',
            'username'              => 'required',
            'email'                 => 'required|email|unique:users',
            'password'              => 'required|min:4'
          ]);
        
        $user_data              = $request->all();
        
        if($request->hasFile('user_image_input'))
        {
            if($request->file('user_image_input')->isValid())
            {
                
                /**
                 * SimpleImage can't make dir. It returns error if directory does not exist.
                 * Make directory (if it dows not exists) before putting file in it
                 */
                $location   = public_path().'/admin/users/';
                if(!is_dir($location))
                {
                    
                    mkdir($location, 0777, true);
                                    
                }
                
                
                /**
                *
                * Prepare names for file at different sizes
                * 
                */
                $image_lg  = date('Ymdhis').'_lg.'.$request->file('user_image_input')->getClientOriginalExtension();
                
                // Instantiate SimpleImage class
                $image = new \App\Http\Controllers\SimpleImage($request->file('user_image_input'));
                
                
                // Size:lg
                $image->best_fit(1200,600);
                $image->save($location.$image_lg);
                
                $user_data['user_image'] = '/public/admin/users/'.$image_lg;
                
            }
                        
        }
        
        $user_data['role'] = 'user';
        
        $user = User::create($user_data);
        
        if($user)
        {
            
            return redirect(route('login'))->withSuccess('Congrates! Signup has been sucessful. Please login.');
                
            
        } else{
            
            return back()->withErrors('Failed to signup. Please check the required data.')->withInput();
            
        }
        
        
    }
    // end signup functions 
    
        // login functions 
    public function login()
    {
        return view('admin.pages.users.login');
    }
    
    
    public function postLogin(Request $request)
    {
        // return $request->all();
        
        $user   = User::where('email',$request->input('email'))->first();
        
        
        if($user)
        {
            
            if($user->active == 0)
            {
                return back()->withErrors('Your account is de-active. Please contact admin for help.');
            }
            
        }
        
        if($user->role == "admin"){
            if(Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')]))
            {
                return redirect()->route('dashboard');
            } else{
                
                return back()->withErrors('authentication failed')->withInput();
                
            }
            
        }else{
                
                return back()->withErrors('You are not admin');
            
        }

    }
    
    // end login functions 
    
    
    public function forgotPassword()
    {
        return view('admin.pages.users.forgot_password');
    }
        
    
    public function postForgotPassword(Request $request, Mails $mail)
    {
        
        $email  = $request->input('recovery_email');
        
        $user = User::where('email',$email)->first();
        
        if($user)
        {
            
            $new_password = $user->firstname.date('YMD');
            
            $user->password = $new_password;
            
            $user->save();
            
            $mail->forgotPassword($user->id, $new_password);
            
            return back()->withErrors('A new password has been sent to your email address.');
        
        } else{
            
            return back()->withErrors('Sorry! User could not be found in database.');
            
        }
        
        
        
        
    }
    
    public function Changepassword()
    {
        return view('admin.pages.users.changepassword');
    }
    
    public function PostChangepassword(Request $request)
    {
        // return $request->all();
        
        $email = $request->user_email;
        $new_password = $request->new_password;
        $user = \App\User::where('email',$email)->first();
        
        if($user)
        {
            
            $user->password = $new_password;
            
            $user->save();
            
            return redirect()->action('DashboardController@getDashboard')->withSuccess('Your Password is change Successfully.');
        
        } else{
            
            return back()->withErrors('Sorry! User could not be found in database.');
            
        }
    }
    
    
    
    public function logout()
    {
        
        Auth::logout();
        
        return redirect()->route('login');
    }
    
    
    
}
