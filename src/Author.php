<?php

class Author extends User
{
    protected $posts = [];

    public function addPost(Post $post) 
    {
        $this->posts[] = $post;
    }

    public function getPosts() : array 
    {
        return $this->posts;
    }
}