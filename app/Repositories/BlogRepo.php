<?php

namespace App\Repositories;

use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class BlogRepository
{
    public function create($data)
    {
        $user = Auth::user();

        return Blog::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'content' => $data['content'],
            'user_id' => $user->id,
        ]);
    }

    public function update($blogId, $data)
    {
        $blog = Blog::where('id', $blogId)->first();

        if (!$blog || $blog->user_id !== Auth::id()) {
            throw new \Exception("You are not authorized to update this blog.");
        }

        $blog->update([
            'title' => $data['title'] ?? $blog->title,
            'description' => $data['description'] ?? $blog->description,
            'content' => $data['content'] ?? $blog->content,
        ]);

        return $blog;
    }

    public function delete($blogId)
    {
        $blog = Blog::where('id', $blogId)->first();

        if (!$blog || $blog->user_id !== Auth::id()) {
            throw new \Exception("You are not authorized to delete this blog.");
        }

        return $blog->delete();
    }

    public function getAll($page = 1, $perPage = 10)
    {
        return Blog::where('user_id', '!=', Auth::id())
                   ->paginate($perPage, ['*'], 'page', $page);
    }

    public function findById($blogId)
    {
        return Blog::where('id', $blogId)->first();
    }
}
