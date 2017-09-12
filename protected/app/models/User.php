<?php namespace Model;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\Model;
use \Eloquent;
use \Hash;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	// Relation
	public function addresses()
    {
        return $this->hasMany('Model\Address');
    }

    public function role()
    {
        return $this->belongsTo('Model\Role');
    }

    public function company()
    {
        return $this->hasOne('Model\Company');
    }

    public static function storeUserOrUpdate(array $input, $user)
    {
    	if (!$user) {
	    	$user = new User;   		
		}
		    	
    	$user->name     = $input['name'];
		$user->username = $input['username'];
		$user->email    = $input['email'];
	    $user->password = Hash::make($input['password']);
	    $user->save(); 

	    return $user;
    }
}
