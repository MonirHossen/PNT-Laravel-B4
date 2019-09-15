<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $data['posts'] =  DB::table('posts')->get();
        return view('post/index',$data);
    }

   public function create(){
        return view('post/create');
   }

   public function store(Request $request){
            $data['title']   =  $request->title;
            $data['details'] =  $request->details;
            DB::table('posts')->insert($data);
            return redirect('post/create');

   }

   public function edit($id)
   {
       $data['post'] = DB::table('posts')->where('id',$id)->first();
       return view('post/edit',$data);
   }

   public function update(Request $request,$id){
        $data['title']   = $request->title;
        $data['details'] = $request->details;
        DB::table('posts')->where('id',$id)->update($data);
        return redirect('post/index');

   }
}
