<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Quotation;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */




    public function view_slides()
    {

            if(!Auth::check()) return view('welcome');
            else{
                $slides = DB::table('slide')->get();
                return view('home', compact('slides'));
            };
    }





    public function services()
    {
        if(!Auth::check())return view('welcome');
        else return view('services');
    }




    public function view_social_links()
    {
        if(!Auth::check())return view('welcome');
        else{
            $soc_links = DB::table('soc_links')->find(1);
            return view('soc_links', compact('soc_links'));
        }
    }





    public function edit_social_links()
    {
        if(!Auth::check())return view('welcome');
        else{
            if(isset($_POST['edit'])){
                DB::table('soc_links')
                    ->where('id', 1)
                    ->update(['fb' => $_POST['fb'], 'google' => $_POST['google'], 'twitter' => $_POST['twitter']]);     
            }
            $soc_links = DB::table('soc_links')->find(1);
            return view('soc_links', compact('soc_links'));
        }
    }




    public function view_new_slide()
    {
        if(!Auth::check())return view('welcome');
        else return view('new');
    }




    public function add_new_slide()
    {
        if(!Auth::check())return view('welcome');
        else{
            if(isset($_POST['add'])){
                 DB::table('slide')
                     ->insert(
                     ['img_link' => $_POST['img_link'], 'title' => $_POST['title'], 'created_at' => $_POST['created_at']]);
            }
            return view('new');
        };
    }





    public function view_edit_slide($id)
    {
        if(!Auth::check())return view('welcome');
        else{
            $slide = DB::table('slide')->find($id);
            return view('edit', compact('slide'));
        }
    }



    public function edit_slide($id)
    {

        if(!Auth::check())return view('welcome');
        else{
            dd($_COOKIE);
            if(isset($_POST['edit'])){
                DB::table('slide')
                    ->where('id', $id)
                    ->update(['img_link' => $_POST['img_link'], 'title' => $_POST['title'], 'created_at' => $_POST['created_at']]);
          
                    $slide = DB::table('slide')->find($id);
                    return view('edit', compact('slide'));
            }
        }
    }



    public function edit_delete_slide($id)
    {
        if(!Auth::check())return view('welcome');
        else{
            if(isset($_POST['delete'])){
                DB::table('slide')->where('id', $id)->delete();
                $slides = DB::table('slide')->get();
                return view('home', compact('slides'));
            }

            if(isset($_POST['edit'])){
                DB::table('slide')
                    ->where('id', $id)
                    ->update(['img_link' => $_POST['img_link'], 'title' => $_POST['title'], 'created_at' => $_POST['created_at']]);
          
                    $slide = DB::table('slide')->find($id);
                    return view('edit', compact('slide'));
            }
        }
    }
    
}
