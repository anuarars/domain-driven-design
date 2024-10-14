<?php

namespace App\Http\Controllers\Api;

use App\Services\PostService;
use App\DTO\PostDTO;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        return response()->json($this->postService->getAllPosts());
    }

    public function store(Request $request)
    {
        $postDTO = new PostDTO($request->title, $request->content);
        return response()->json($this->postService->createPost((array) $postDTO));
    }

    public function show($id)
    {
        return response()->json($this->postService->getPostById($id));
    }

    public function update(Request $request, $id)
    {
        $postDTO = new PostDTO($request->title, $request->content);
        return response()->json($this->postService->updatePost($id, (array) $postDTO));
    }

    public function destroy($id)
    {
        return response()->json($this->postService->deletePost($id));
    }
}

