<?php

namespace App\Controllers;

use App\Models\Comments;

class HomeController extends Controller {

    public function getHome($request, $response) {
        $comments = Comments::all();
        
        return $this->_view->render($response, 'home.twig', [
            'comments' => $comments,
        ]);
    }

    public function addComment($request, $response) {
    	$data = $request->getParams();
    	$comment = new Comments;
    	$comment->name = $data['name'];
    	$comment->email = $data['email'];
    	$comment->comment = $data['comment'];
    	return $comment->save();
    }
}