<?php
namespace Admin\Model;
use Think\Model;
class GoodsModel extends Model
{
	
	// 设置添加时允许接收的字段
	protected $insertFields = 'goods_name,market_price,shop_price,is_on_sale,goods_desc,cat_id,type_id,promote_price,promote_start_date,promote_end_date,is_new,is_rec,is_hot';
	// 设置修改时允许接收的字段
	protected $updateFields = 'id,goods_name,market_price,shop_price,is_on_sale,goods_desc,cat_id,type_id,promote_price,promote_start_date,promote_end_date,is_new,is_rec,is_hot';
	// 设置表单数据的验证规则
	protected $_validate = array(
		// array('cat_id', 'require', '必须选择一个主分类!', 1),
		array('goods_name', 'require', '商品名称不能为空!', 1),
		array('market_price', 'currency', '市场价格必须中货币类型!', 1),
		array('shop_price', 'currency', '本店价格必须中货币类型!', 1),
	);
	// 在数据添加到数据库之前自动被调用 
	protected function _before_insert(&$data, $option)
	{
		// 商品描述有选择性的过滤
		// $data['goods_desc'] = clearXSS($_POST['goods_desc']);
		$data['goods_desc'] = stripslashes(htmlspecialchars_decode($_POST['goods_desc']));
		// 把当前时间补到表单中
		$data['addtime'] = time();
		/**** 处理表单中上传的LOGO图片 *****/
		// 判断用户有没有选择图片
		if(isset($_FILES['logo']) && $_FILES['logo']['error'][0] == 0)
		{
			// 上传图片
			 $upload = new \Think\Upload(array(
			 	'maxSize' => 2 * 1024 * 1024,
			 	'exts' => array('jpg', 'gif', 'png', 'jpeg'),
			 	'rootPath' => './Public/uploads/',
			 	'savePath' => 'Goods/',
			 	'saveRule' => 'time',
			 ));
		    // 上传文件 
		    $info   =   $upload->upload();
		    
		    if($info)
		    {
		    	/*************** 生成缩略图 ****************/
		    	// 先取出刚刚上传成功的图片的路径和名称
		    	$logo = $info[0]['savepath'] . $info[0]['savename'];
		    	// 拼出缩略图的名字
		    	$sm_logo = $info[0]['savepath'] .'sm_'. $info[0]['savename'];
		    	$mid_logo = $info[0]['savepath'] .'mid_'. $info[0]['savename'];
		    	// 生成缩略图
		    	$image = new \Think\Image(); 
		    	$image->open('./Public/uploads/'.$logo);
		    	$image->thumb(650, 650)->save('./Public/uploads/'.$mid_logo);
		    	$image->thumb(130, 130)->save('./Public/uploads/'.$sm_logo);
		    	// 把生成好的图片的路径放到表单中
		    	$data['logo'] = '/Public/uploads/'.$logo;
		    	$data['sm_logo'] = '/Public/uploads/'.$sm_logo;
		    	$data['mid_logo'] = '/Public/uploads/'.$mid_logo;
		    }
		    else 
		    {
		    	// 先把错误信息保存到模型中，然后返回控制器，由控制器再从模型中取出错误原因并显示
		    	$this->error = $upload->getError();
				return FALSE;
		    }
		}
	}
	public function search()
	{
		/**************** 搜索 **************/
		$where = array();
		// 根据商品名称搜索
		if($gn = I('gn'))
			$where['goods_name'] = array('like', "%$gn%");
		// 价格搜索商品
		$fp = I('fp');
		$tp = I('tp');
		if($fp && $tp)
			$where['shop_price'] = array('between', array($fp, $tp));
		elseif ($fp)
			$where['shop_price'] = array('egt', $fp);
		elseif ($tp)
			$where['shop_price'] = array('elt', $fp);
		// 是否上架
		$ios = I('ios');
		if($ios == '是' || $ios == '否')
			$where['is_on_sale'] = array('eq', $ios);
		// 分类的搜索
		// $catId = I('cat_id');
		// if($catId)
		// {
		// 	// 先取出这个分类所有子分类的ID
		// 	$catModel = D('Category');
		// 	$children = $catModel->getChildren($catId);
		// 	// 分类ID和子分类ID放到一起
		// 	$children[] = $catId;
		// 	$children = implode(',', $children);
		// 	// 主分类或者扩展分类在$children这些分类下的商品
		// 	// 先从商品分类表中取出扩展分类下的商品
		// 	$gcModel = M('GoodsCat');
		// 	$extGoodsId = $gcModel->field('GROUP_CONCAT(goods_id) gid')->where(array(
		// 		'cat_id' => array('in', $children),
		// 	))->find();
		// 	if($extGoodsId['gid'])
		// 		$orwhere = " OR id IN({$extGoodsId['gid']})";
		// 	else 
		// 		$orwhere = '';
		// 	$where['cat_id'] = array('exp', "IN ($children) $orwhere");
		// }
		/********************* 翻页 ************************/
		// 取总记录数
		$count = $this->where($where)->count();
		// 生成翻页类对象
		$page = new \Think\Page($count, 15);
		// 生成翻页的字符串
		$pageString = $page->show();
		/******************* 取数据 *****************/
		$data = $this->where($where)->limit($page->firstRow.','.$page->listRows)->select();		
		return array(
			'data' => $data,
			'page' => $pageString,
		);
	}
}