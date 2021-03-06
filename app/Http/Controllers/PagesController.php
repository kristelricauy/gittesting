<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller {

	public function getIndex() {
		# process variable data or params
		# talk to the model
		# recieve from the model
		# compile or process data from the model if needed
		# pass the data to the correct view
		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
	}
	public function getAbout() {
		$first = 'Kristel';
		$last = 'Uy';

		$fullname = $first . " " . $last;
		$email = 'kristelricauy@yahoo.com';
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;
		return view('pages.about')->withData($data);
	}
	public function getContact() {
		return view('pages.contact');
	}
}