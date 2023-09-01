<?php
	class UserController extends BaseController{

		public function __construct (User $users)
		{
			$this->users = $users;
		}

		
	}