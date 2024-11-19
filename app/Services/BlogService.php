<?php

namespace App\Services;

use App\Repositories\BlogRepository;
use Exception;

class BlogService
{
    protected $repo;

    public function __construct(BlogRepository $repo)
    {
        $this->repo = $repo;
    }

    public function createBlog($data)
    {
        return $this->repo->create($data);
    }

    public function updateBlog($id, $data)
    {
        return $this->repo->update($id, $data);
    }

    public function deleteBlog($id)
    {
        return $this->repo->delete($id);
    }

    public function getAllBlogs($page = 1, $perPage = 10)
    {
        return $this->repo->getAll($page, $perPage);
    }

    public function findBlogById($id)
    {
        return $this->repo->findById($id);
    }
}
