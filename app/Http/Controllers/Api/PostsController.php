<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\SendSubscribtionEmail;
use App\Models\Post;
use App\Models\Subscribed;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function createPost(Request $request) {
        $posts = Post::create([
            "title"       => $request->title,
            "description" => $request->description,
        ]);

        $subscribeds = Subscribed::where("is_sent", 0)->get();

        foreach ($subscribeds as $subscribed) {
            $this->dispatch(new SendSubscribtionEmail($subscribed->email, $posts->title,$posts->description));
            Subscribed::where("id", $subscribed->id)->update([
                "is_sent" => true
            ]);
        }


        return response()->json([
           "status"  => true,
           "message" => "post created"
        ]);
    }
}
//??
