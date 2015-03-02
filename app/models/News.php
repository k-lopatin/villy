<?php namespace App;

//use Illuminate\Database\Eloquent\Model;
use \SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;

class News extends \SleepingOwl\Models\SleepingOwlModel implements ModelWithImageFieldsInterface{


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
	protected $fillable = ['title', 'body', 'created_at', 'updated_at', 'photo'];

	public function getImageFields()
    {
        return [
            'photo' => 'uploads/',
        ];
    }

}
