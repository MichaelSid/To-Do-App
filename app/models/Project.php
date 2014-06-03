<?php

class Project extends LaravelBook\Ardent\Ardent {
	public static $relationsData = array(
		'tasks' => array(self::HAS_MANY, 'Task'),
	);

	protected $fillable = ['name', 'slug'];

	public static $sluggable = array();

	public static $rules = array(
		'name'			=> 'required|min:4'
	);
}