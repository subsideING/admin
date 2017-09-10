<?php
namespace Admin\Controller;

use Common\Controller\AuthController;
	
class GoodsController extends AuthController {

	public function goods_list()
	{
		$this->display();
	}
}