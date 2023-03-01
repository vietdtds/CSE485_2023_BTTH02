<?php
class Author
{
    private $id;
    private $nameAuthor;
    private $image;

    function __construct($id, $nameAuthor, $image)
{
    $this->id = $id;
    $this->nameAuthor = $nameAuthor;
    $this->image = $image;
}

function get_id()
{
  return $this->id;
}

function get_nameAuthor()
{
    return $this -> nameAuthor;
}

function get_image()
{
    return $this -> image;
}

function set_id($id)
{
  $this->id = $id;
} 

function set_nameAuthor($nameAuthor)
{
  $this->nameAuthor = $nameAuthor;
}

function set_image($image)
{
  $this->image = $image;
}
}
?>