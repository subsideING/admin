<?php
namespace Admin\Controller;

use Common\Controller\AuthController;
use Think\Controller;

class GoodsController extends AuthController {
    //商品列表页
    public function lst() {
    	$data = D('Goods')->search();
    	//dump($data['data']);die;
    	$this->assign('goods',$data['data']);
    	$this->assign('page',$data['page']);
        $this->display();
    }
    //商品添加
    public function goodsAdd() {
    	// 判断是否提交了表单
		if(IS_POST)
		{
			//dump($_POST);die;
			// 生成商品模型
			$model = D('Goods');
			// 接收表单中的数据并且根据模型中定义的规则验证表单
			if($model->create(I('post.'), 1))
			{
				// 插入数据库
				if($model->add())
				{
					// 提示成功，并在1秒之后跳到lst方法中
					$this->success('添加成功！', U('lst'));
					exit;
				}
			}
			// 获取失败的原因
			$error = $model->getError();
			// 打印错误信息
			$this->error($error);
		}
    	$this->display();
    }
    //商品删除
    public function goodsDel()
    {
    	$id =  I('id');
        if(is_array($id)){
        	$id = implode(',', $id);
        }
        $rest = M('goods')->where("id in ($id)")->delete();
        if($rest){
        	$this->success('删除成功',U('Goods/lst'),1);
        }else{
        	$this->success('删除失败',U('Goods/lst'),1);
        }
    }

    //修改状态
    public function goods_state(){
    	$id=I('x');
    	$status=M('goods')->where(array('id'=>$id))->getField('is_on_sale');
    	//dump($status);die;
    	//判断当前状态情况
    	if($status=='是'){
    		$statedata = array('is_on_sale'=>'否');
    		$auth_group=M('goods')->where(array('id'=>$id))->setField($statedata);
    		//echo M('goods')->getLastSql();die;
    		$this->success('否',1,1);
    	}else{
    		$statedata = array('is_on_sale'=>'是');
    		$auth_group=M('goods')->where(array('id'=>$id))->setField($statedata);
    		$this->success('是',1,1);
    	}
    
    }

}