<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  //将字段published_at存储为UNIX时间戳，日期字符串（Y-m-d）
  protected $dates = ['published_at'];

  //定义title slug字段属性修改器
  public function setTitleAttribute($value)
  {
    $this->attributes['title'] = $value;
    if (! $this->exists) {
      $this->attributes['slug'] = str_slug($value);
    }
  }
}
