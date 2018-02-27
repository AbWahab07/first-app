<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * Fields that can be mass assigned.
     * @var array
     */
    protected $fillable = [
        'title', 'body', 'published_at', 'user_id'
    ];


    /**
     * Additional fields to be treated as Carbon Instance
     * @var array
     */
    protected $dates = ['published_at'];


    /**
     * Accessor and Mutator
     * Gives us a way to manipulate data before it is inserted to the database or after it has been retrieved
     * set$nameAttribute if $name contains _ then use camelcasing.
     * @param $date
     */
    public function setPublishedAtAttribute($date){
        $this->attributes['published_at'] = Carbon::parse($date);
    }

    /**
     * Query Scope
     * We take a query and add a clause to it directly on the Eloquent model
     * @param $query
     * Scope queries to articles that have been published
     */
    public function scopePublished ($query){
        $query->where('published_at', '<=' , Carbon::now());
    }

    /**
     * Scope queries to articles that are unpublished
     * @param $query
     */
    public function scopeUnpublished ($query){
        $query->where('published_at', '>=' , Carbon::now());
    }

    /**
     * Article belongs to a user Eloquent Relationship
     */
    public function user(){
        return $this->belongsTo('App\User');
    }
}
