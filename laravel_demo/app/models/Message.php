<?php

	class Message extends Eloquent{
		protected $table = "messages";


		protected $fillable = array('body');

		public function scopeAfterId($query, $lastid)
		{
			return $query->where('id', '>', $lastid);
		}

		public function chatRoom(){
			return $this->belongsTo('ChatRoom', 'chat_room_id');
		}

		public function user(){
			return $this->belongsTo('User', 'user_id');
	}
}