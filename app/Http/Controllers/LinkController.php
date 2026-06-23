<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use Hashids\Hashids;
use Auth;

class LinkController extends Controller
{
    public function index(){
        return view('link/index');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|string|max:255',
        ]);

        $link = new Link;
        $link->title = $request->title;
        $link->user_id = Auth::user()->id;
        $link->company_id = Auth::user()->company_id;
        $link->url = $request->url;
        $link->save();

        $HASHIDS_SALT = env('HASHIDS_SALT', 'my-secret-key');
        $hashids = new Hashids($HASHIDS_SALT, 7);

        $link->url_id = $hashids->encode($link->id);
        $link->save();

        $shortUrl = url('/').'/'.$link->url_id;

        $message = "Your short URL is <a target='_blank' href='".$shortUrl."'>".$shortUrl."</a>";

        return redirect()->back()->with('success', $message);

    }

    public function redirectShortUrl($url_id){
        $link = Link::where('url_id', $url_id)->first();
        if($link){
            return redirect()->away($link->url);
        }else{
            abort(404);
        }
    }
}
