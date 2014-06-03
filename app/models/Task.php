<?php

class Task extends \Eloquent {
	protected $guarded = [];
	public function project()
	
	{
	return $this->belongsTo('Project');
	}

	public static $rules = array(
		'name'			=> 'required|min:4',
		'slug'			=> 'required|unique',
		'description'	=> 'required',
	);
	
}