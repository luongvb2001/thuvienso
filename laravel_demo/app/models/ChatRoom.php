<?php 
	class ChatRoom extends Eloquent{
		public $table = 'chat_rooms';

		public function messeges(){
		return $this->hasMany('Message', 'chat_room_id');
	}

}