<?php

namespace App\Models;

use App\Src\Entity\AbstractEntity;

class Users extends AbstractEntity {

	public $table = 'users';

	public $attributes = [
		'id',
		'email',
		'password'
	];

}