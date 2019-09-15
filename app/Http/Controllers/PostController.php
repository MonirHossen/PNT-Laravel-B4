<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
   public function create(){
        return view('post/create');
   }
   public function store(Request $request){
            $data['title']   =  $request->title;
            $data['details'] =  $request->details;
            DB::table('posts')->insert($data);
            return redirect('post/create');

   }
}
