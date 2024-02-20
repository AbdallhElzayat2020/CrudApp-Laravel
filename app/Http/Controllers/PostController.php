<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;

    class PostController extends Controller
    {
        // show posts from db
        public function index()
        {
            $posts = DB::table('posts')->get();
            return view('posts.index' , compact("posts"));
        }

        public function create()
        {
            return view('posts.create');
        }

        // insert a new post
        public function insert( Request $request )
        {
            DB::table("posts")->insert([
                "title" => $request->title ,
                "body" => $request->body ,
            ]);
            return redirect()->route("posts");

//            return response("success added");
        }


        // editing a post
        public function edit( $id )
        {
            $post = DB::table("posts")->where("id" , $id)->first();
            return view("posts.edit" , compact("post"));
        }

        public function update( Request $request , $id )
        {
            DB::table("posts")->where("id" , $id)->update([
                "title" => $request->title ,
                "body" => $request->body ,
            ]);
//        return response("Updated Succefully");
            return redirect()->route("posts");
        }

        // delete posts from the database
        public function delete( $id )
        {
            DB::table("posts")->where("id" , $id)->delete();
            return redirect()->route("posts");
        }

//      delete all posts
        public function deleteAll()
        {
            DB::table("posts")->delete();
            return redirect()->route("posts");
        }

        //      delete all posts trunCate
        public function deleteAllTrunCate()
        {
            DB::table("posts")->truncate();
            return redirect()->route("posts");

        }
    }
