<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Employee;
use App\Models\Image;
use App\Models\Order;
use App\Models\Package;
use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
public function index()
{
    $posts = Post::take(3)->get();
    $services = Service::take(3)->get();
    
    return view('frontend.index',compact('posts','services'));
}

public function about()
{
    $about = About::first(); 
    $clients = Client::all();  
    return view('frontend.about',compact('about','clients'));
}

public function services()
{
    $services = Service::all();
    return view('frontend.services',compact('services'));
}
public function showService($id)
{
    $info = Service::find($id);
    $services = Service::all();
    return view('frontend.show_service',compact('info','services'));
}


public function projects()
{
    $projects = Project::all();
    $web_projects = Project::where('type','مواقع الكترونيه')->get();
    $social_projects = Project::where('type','حملات اعلانيه')->get();
    $account_projects = Project::where('type','اداره حسابات')->get();
    $clients = Client::all();
    return view('frontend.projects',compact('projects','web_projects','social_projects','account_projects','clients'));
}

public function showProject($id)
{
    $info = Project::find($id);
    return view('frontend.show_project',compact('info'));
}

public function posts()
{
    $posts = Post::paginate(6);
    return view('frontend.posts',compact('posts'));
}

public function showPost($id)
{
    $info = Post::find($id);
    $posts = Post::all();
    return view('frontend.show_post',compact('info','posts'));
}


public function contacts()
{
    return view('frontend.contact');
}

public function contact_us(Request $request)
{
    $data=$request->all();
    // dd($data);
    Contact::create($data);
    return redirect()->back();
}

public function galleries()
{
    $images = Image::all();
    return view('frontend.gallary',compact('images'));
}

public function order()
{
    return view('frontend.order');
}


public function postOrder(Request $request)
{
    $data = $request->all();
    Order::create($data);
    return redirect()->back();
}


}
