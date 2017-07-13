<?php
namespace App\Repositories;

use App\Blog;

 /**
  *
  */
 class BlogsRepository
 {
  //  protected $redis;
   //
  //  public function __construct(Redis $redis)
  //  {
  //    $this->redis = $redis;
  //  }
   public static function all()
   {
     return Blog::all();
   }
 }
