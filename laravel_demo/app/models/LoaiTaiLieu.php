<?php 
	class LoaiTaiLieu extends Eloquent{
		public $table = 'loaitailieu';

		public function loaitailieu()
		{
			return $this->hasOne('TaiLieu', 'loaitailieu_id');
		}
	}