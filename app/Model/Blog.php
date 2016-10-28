<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
  /**
   * Table name capitalize
   * @var string
   */
  public $table = "Blog";


  /**
   * insertable and editable rows
   * @var array
   */
  protected $fillable = ["title", "body"];
}
