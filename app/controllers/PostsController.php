<?php

class PostsController extends BaseController {
	
	public function index()
	{
		$posts=Post::whereDraft(0)->orderBy('created_at', 'DESC')->get();

		return View::make('posts.list')->with('posts', $posts);
	}

	public function show($slug)
	{
		$post=Post::whereSlug($slug)->first();

		return View::make('posts.show')->with('post',$post);
	}

	public function create(){

		return View::make('posts.create');
	}

	public function store(){
		$post=new Post;
		$post->title=Input::get('Title');
		$post->body=nl2br(Input::get('Body'));
		$post->draft=Input::get('draft');
		$post->slug=Str::slug(Input::get('Title'));
		$post->save();
		if(!$post->draft)
		return Redirect::home();
		else
			return Redirect::route('draft', array('slug'=>$post->slug));
		
	}

	public function draft($slug) {
		
		return View::make('posts.draft')->with('slug',$slug);
	}
}