<?php 


class Main extends Conn{



	public function render(){
		$sql = "select * from news";
		$data = $handler->query($sql);
		// $sql->execute();
	}
}