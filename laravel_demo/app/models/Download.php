<?php 
	class Download extends Eloquent{
		public $table = "download";

		public function user()
		{
			return $this->belongsTo('User', 'user_id');
		}

		public function tailieu()
		{
			return $this->belongsTo('TaiLieu', 'tailieu_id');
		}
	}