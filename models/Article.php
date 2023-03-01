<?php
class Article
{
  private $id;
  private $title;
  private $nameSong;
  private $summary;
  private $content;
  private $date;
  private $image;

  function __construct($id, $title, $nameSong, $summary, $content, $date, $image)
  {
    $this->id = $id;
    $this->title = $title;
    $this->nameSong = $nameSong;
    $this->summary = $summary;
    $this->content = $content;
    $this->date = $date;
    $this->image = $image;
  }

  function get_id()
  {
    return $this->id;
  }

  function get_title()
  {
    return $this->title;
  }

  function get_nameSong()
  {
    return $this->nameSong;
  }

  function get_summary()
  {
    return $this->summary;
  }

  function get_content()
  {
    return $this->content;
  }

  function get_date()
  {
    return $this->date;
  }

  function get_image()
  {
    return $this->image;
  }

  function set_id($id)
  {
    $this->id = $id;
  }

  function set_title($title)
  {
    $this->title = $title;
  }

  function set_nameSong($nameSong)
  {
    $this->nameSong = $nameSong;
  }

  function set_summary($summary)
  {
    $this->summary = $summary;
  }

  function set_content($content)
  {
    $this->content = $content;
  }

  function set_date($date)
  {
    $this->date = $date;
  }

  function set_image($image)
  {
    $this->image = $image;
  }
}
