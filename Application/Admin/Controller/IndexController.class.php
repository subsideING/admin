<?php
namespace Admin\Controller;
use Think\Controller;
use Common\Controller\AuthController;
use Think\Auth;

class IndexController extends Controller {

    public function index(){
    	$news=M('news');
    	
    	$info = array(
    			'PCTYPE'=>PHP_OS,
    			'RUNTYPE'=>$_SERVER["SERVER_SOFTWARE"],
    			'ONLOAD'=>ini_get('upload_max_filesize'),
    			'ThinkPHPTYE'=>THINK_VERSION,
    	);
    	
    	$start=strtotime(date('Y-m-01 00:00:00'));
		$end = strtotime(date('Y-m-d H:i:s'));
		$data['news_time'] = array('between',array($start,$end));
		$news_list=$news->where($data)->order('news_hits desc')->limit(0,8)->select();//������������
		$news_count=$news->count();//��������
		$this->assign('news_count',$news_count);
		
		$today=strtotime(date('Y-m-d 00:00:00'));//���쿪ʼ����
		$todata['news_time'] = array('egt',$today);
		$tonews_count=$news->where($todata)->count();//���շ���������
		$this->assign('tonews_count',$tonews_count);
		
		$ztday=strtotime(date('Y-m-d 00:00:00'))-60*60*24;//���쿪ʼ����
		$ztdata['news_time'] = array('between',array($ztday,$today));
		$ztnews_count=$news->where($ztdata)->count();//��������
		$this->assign('ztnews_count',$ztnews_count);
		$difday=($tonews_count-$ztnews_count)/$ztnews_count*100;//���������յĲ�
		$this->assign('difday',$difday);
		
		$this->assign('info',$info);
		$this->assign('news_list',$news_list);
		$this->display();
    }

}