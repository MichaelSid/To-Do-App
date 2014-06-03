<?php

class Project extends \Eloquent {
	protected $guarded = [];
	
	public function tasks()
	{
		return $this->hasMany('Task');
	}

	public static $rules = array(
		'name'			=> 'required|min:4',
		'slug'			=> 'required',
	);

}