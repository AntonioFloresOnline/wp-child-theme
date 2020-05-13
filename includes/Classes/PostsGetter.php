<?php

/**
 *
 */
class PostGetter
{
    private $postType;

    private $numberOfPosts;

    private $posts = [];

    public function returnPosts()
    {
        echo "posts";
    }

    public function debugPosts()
    {
        var_dump($this->posts);
    }

    public function showArgs()
    {
        echo "Post type: " . $this->postType . '</br>';
        echo "Post number: " . $this->numberOfPosts . '</br>';
    }

    public function __construct($postType, $numberOfPosts)
    {

        $this->postType = $postType;

        $this->numberOfPosts = $numberOfPosts;

        $this->posts = get_posts();

    }
}
