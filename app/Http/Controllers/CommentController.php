<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{

    public function index()
    {
        $comments = DB::table('comments')->get();
        return view('comment',['comments' => $comments]);
    }

    public function store(Request $request)
    {
	DB::table('comments')->insert([
        'id' => $request->id,
		'name' => $request->name,
		'comments' => $request->comments,
	]);
    $input['name'] = auth()->user()->id;
	return redirect('/comment');
    }

    public function edit($id)
    {
	$comments = DB::table('comments')->where('id',$id)->get();
	return view('editcomment',['comments' => $comments]);
    }   

    public function update(Request $request)
    {
	DB::table('comments')->where('id',$request->id)->update([
		'name' => $request->name,
		'comments' => $request->comments,
	]);
	return redirect('/comment');
    }

    public function hapus($id)
    {
	DB::table('comments')->where('id',$id)->delete();
	return redirect('/comment');
    }

}