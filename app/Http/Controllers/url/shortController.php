<?php

namespace App\Http\Controllers\url;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UrlShort;

class shortController extends Controller
{
    public function short(){
        return view('url.short');
    }
    public function generateShortUrl(){
        $result = base_convert(rand(100000, 999999),10, 36);
        $data = UrlShort::whereShort($result)->first();

        if($data != null){
            $this->generateShortUrl();
        }
        return $result;
    }
    public function action(Request $request){
        $short = $this->generateShortUrl();
        $url = UrlShort::whereUrl($request->url)->first();
        //dd($request->url);
        if($url == null){
            UrlShort::create([
                'url'=>$request->url,
                'short'=>$short

            ]);
            $url = UrlShort::whereUrl($request->url)->first();
        }
        return view('url.short_url',compact('url'));
    }
    public function link($link){
        $url = UrlShort::whereShort($link)->first();
        return redirect($url->url);
    }
}
