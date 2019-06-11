<?php namespace App\Model;
 
use Illuminate\Database\Eloquent\Model;
 
class Book extends Model
{ 
   protected $fillable = ['title', 'author_id'];   

   public function authors()
    {
        return $this->belongsTo('App\Model\Author', 'author_id');
    }
}