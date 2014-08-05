<?php

/**
 * This file is part of the Wall Poster bundle.
 *
 * (c) Ilya Pokamestov
 *
 * @author Ilya Pokamestov
 * @email dario_swain@yahoo.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Justy\Bundle\WallPosterBundle\Post;

class Post
{
    protected $message;
    protected $link;
    protected $images = array();
    protected $tags = array();

    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setLink($link)
    {
        $this->link = $link;
        return $this;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function addImage($image)
    {
        $this->images[] = $image;
        return $this;
    }

    public function getImages()
    {
        return $this->images;
    }

    public function addTag($tag)
    {
        $this->tags[] = $tag;
        return $this;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function getSocialTagsText()
    {
        if($this->tags)
        {
            $text = "\n\n";
            foreach ($this->tags as $tag)
            {
                $text .= ' #' . str_replace(' ', '_', $tag);
            }
            return html_entity_decode($text);
        }
        return false;
    }
} 