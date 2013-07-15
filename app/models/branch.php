<?php
class Branch extends Eloquent{
	
	protected $table = 'branches';
	protected $key='id';
	public static $unguarded = true;
}

?>