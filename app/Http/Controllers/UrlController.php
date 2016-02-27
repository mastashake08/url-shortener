<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Url;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UrlController extends Controller
{
    //
    public function addUrl(Request $request){
      $url = Url::Create([
        'input_url' => $request->input_url,
        'output_url' => str_random(8),
      ]);
      $request->session()->flash('url', $url->output_url);
      return back();
    }

    public function redirect($output_url){
      $url = Url::where('output_url', $output_url)->first();
      return redirect($url->input_url);
    }
}
