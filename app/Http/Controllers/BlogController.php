<?php

namespace App\Http\Controllers;

use App\Services\BlogService;
use App\Http\Requests\CreateBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }

    public function create(CreateBlogRequest $request)
    {
        try {
            $blog = $this->blogService->createBlog($request->validated());
            return response()->json([
                'message' => 'Blog created successfully',
                'blog' => $blog
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 400);
        }
    }

    public function update(UpdateBlogRequest $request, $id)
    {
        try {
            $blog = $this->blogService->updateBlog($id, $request->validated());
            return response()->json([
                'message' => 'Blog updated successfully',
                'blog' => $blog
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 400);
        }
    }

    public function delete($id)
    {
        try {
            $this->blogService->deleteBlog($id);
            return response()->json([
                'message' => 'Blog deleted successfully'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 400);
        }
    }

    public function getAll(Request $request)
    {
        $page = $request->get('page', 1);
        $perPage = $request->get('per_page', 10);
        $blogs = $this->blogService->getAllBlogs($page, $perPage);
        return response()->json([
            'blogs' => $blogs
        ], 200);
    }

    public function show($id)
    {
        try {
            $blog = $this->blogService->findBlogById($id);
            return response()->json([
                'blog' => $blog
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 400);
        }
    }
}
