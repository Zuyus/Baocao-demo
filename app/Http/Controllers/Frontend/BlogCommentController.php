<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogCommentRequest;
use App\Models\Admin\BlogComment;
use App\Models\User;
use Illuminate\Http\Request;

class BlogCommentController extends Controller
{
    public function blogComment(BlogCommentRequest $request){
        if($request->user_id){
             $user =User::where('id',$request->user_id)->first();
        }
            $commentData['Parent_Id']=isset($request->comment_id) ? ($request->comment_id ): 0;
            $commentData['Blog_Id'] = $request->blog_id;
            $commentData['User_Id'] = isset($user) ? $user->id : null;
            $commentData['Name'] = isset($user) ? $user->name : $request->name;
            $commentData['Email'] = isset($user) ? $user->email : $request->email;
            $commentData['Comment'] = $request->comment;
            $comment = BlogComment::create($commentData);
        if($comment){
            return redirect()->back()->with('success', __('Comment done!'));
        }
        return redirect()->back()->with('success', __('Something is problem!'));
    }
}
