<?php
namespace Admin\Controller;
use Think\Controller;
use Common\Controller\AuthController;
use Think\Auth;

class NewsController extends AuthController {
	//文章列表
    public function news_list(){
    	
    	$count= M('news')->count();// 查询满足要求的总记录数
    	$Page= new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
    	$show= $Page->show();// 分页显示输出
    	$news=M('news')->limit($Page->firstRow.','.$Page->listRows)->select();
    	$this->assign('news',$news);
    	$this->assign('page',$show);
		$this->display();
    }
    
    //添加文章
    public function news_listadd(){
    	$column=M('column');
		$diyflag=M('diyflag');
    	$nav = new \Org\Util\Leftnav;
    	$column_next=$column->where('column_type <> 5 and column_type <> 2')-> order('column_order') -> select();
		$diyflag=$diyflag->select();
    	$arr = $nav::column($column_next);
    	$this->assign('column',$arr);
		$this->assign('diyflag',$diyflag);
    	$this->display();
    }
    
    //栏目管理
	public function news_column(){
		$column=M('column');
		$nav = new \Org\Util\Leftnav;
		$column=$column->order('column_order')->select();
		$arr = $nav::column($column);
		$this->assign('arr',$arr);
		$this->display();
	}
    
	//添加栏目
	public function news_columnadd(){
		$column_leftid=I('c_id',0);
		$this->assign('column_leftid',$column_leftid);
		$this->display();
	}
	
	public function runnews_columnadd(){
		if (!IS_AJAX){
			$this->error('提交方式不正确',U('News/news_column'),0);
		}else{
			$data=array(
					'column_name'=>I('column_name'),
					'column_enname'=>I('column_enname'),
					'column_type'=>I('column_type'),
					'column_leftid'=>I('column_leftid'),
					'column_address'=>I('column_address'),
					'column_open'=>I('column_open',0),
					'column_order'=>I('column_order'),
					'column_title'=>I('column_title'),
					'column_key'=>I('column_key'),
					'column_des'=>I('column_des'),
					'column_content'=>I('column_content'),
			);
			M('column')->add($data);
			$this->success('栏目保存成功',U('News/news_column'),1);
		}
	}
	
	//删除栏目
	public function news_columndel(){
		$column=M('column')->where(array('c_id'=>I('c_id')))->delete();
		$this->redirect('news_column');
	}
	
	
	
	
	
	
	
	
	
	
}