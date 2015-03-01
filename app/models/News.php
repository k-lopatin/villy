<?php namespace App;

//use Illuminate\Database\Eloquent\Model;

class News extends \SleepingOwl\Models\SleepingOwlModel {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'news';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'body', 'created_at', 'updated_at'];

}
