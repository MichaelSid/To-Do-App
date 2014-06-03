<?php

class Task extends LaravelBook\Ardent\Ardent {
	public static $relationsData = array(
		'project' => array(self::BELONGS_TO, 'Project'),
	);

	protected $fillable = ['project_id', 'name', 'slug', 'completed', 'description'];

	public static $sluggable = array();

	public static $rules = array(
		'name'			=> 'required|min:4',
		'description'	=> 'required',
	);
}