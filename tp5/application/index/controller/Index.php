<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Session;
use app\index\model\wenxian;
use app\index\model\xingzhen;
use app\index\model\guofa;
use app\index\model\guizhang;
use app\index\model\renda;
use app\index\model\zhengxie;
use app\index\model\zhuance;
use app\index\model\jianghua;
use app\index\model\biaogui;
use app\index\model\guojihuodong;
use app\index\model\waijiao;
use app\index\model\duihua;
use app\index\model\maoyi;
use think\Request;
use think\Page;
use app\index\model\grade;

class Index extends Controller
{
    public function index()
    {
        /*return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';*/
		echo "欢迎您：".'<a href="'.url('grade').'">详细</a>';
    }
	public function test(){
		
		return $this->view->fetch('test/test1');
		}
	public function grade()
    {
        return $this->view->fetch('test/grade1');
    }
	public function test3()
    {
		$grade = new grade();
		$info = $grade->select();
		//$page = $info->render();
		$this->view->assign('info',$info);
		//$this->view->assign('page',$page);
        return $this->view->fetch('test/grade2');
    }
	public function add()
    {
        return $this->view->fetch('test/grade2');
    }
	public function delete(Request $request)
    {
		$grade = new grade();
		$id = $request->param('id');
		$res = $grade->where('id',$id)->delete();
		$info = $grade->select();
		$this->view->assign('info',$info);
        return $this->view->fetch('test/grade2');
    }
		
	public function shouye(){
		
		return $this->view->fetch('shouye/shouye');
		}
	public function wenxian(){
		
		$wenxian = new Wenxian();
		$info = $wenxian->select();
		if($info){
		$this->view->assign('info',$info);
		return $this->view->fetch('shouye/wenxian');}
		}
	public function wenxix(){
		//$id = $_REQUEST['id'];
		//$id = Request::param('id');
		//$id = I('get.id');
		$id = Request::instance()->param('id');
		$wenxian = new Wenxian();
		$info = $wenxian->where('id',$id)->select();
		$this->view->assign('info',$info);
		return $this->view->fetch('shouye/wenxix');
		}
    public function falv(){
		
		$guofa = new Guofa();
		$info = $guofa->select();
		if($info){
			$this->view->assign('info',$info);}
		$xingzhen = new Xingzhen();
		$res = $xingzhen->select();
		if($res){
			$this->view->assign('res',$res);}
		$guizhang = new Guizhang();	
		$res1 = $guizhang->select();
		if($res1){
			$this->view->assign('res1',$res1);}	
		    return $this->view->fetch('shouye/falv');
		}	
	public function guofa(){
		$id = Request::instance()->param('id');
		$guofa = new Guofa();
		$info = $guofa->where('id',$id)->select();
		$this->view->assign('info',$info);
		return $this->view->fetch('shouye/guofa');
		}
	public function xingzheng(){
		$id = Request::instance()->param('id');
		$xingzheng = new Xingzhen();
		$info = $xingzheng->where('id',$id)->select();
		$this->view->assign('info',$info);
		return $this->view->fetch('shouye/xingzheng');
		}
	public function guizhang(){
		$id = Request::instance()->param('id');
		$guizhang = new Guizhang();
		$info = $guizhang->where('id',$id)->select();
		$this->view->assign('info',$info);
		return $this->view->fetch('shouye/guizhang');
		}
	public function lianghui(){
		
		$renda = new Renda();
		$info = $renda->select();
		if($info){
			$this->view->assign('info',$info);}
		$zhengxie = new Zhengxie();
		$res = $zhengxie->select();
		if($res){
			$this->view->assign('res',$res);}
		return $this->view->fetch('shouye/lianghui');
		}
	public function renda(){
		$id = Request::instance()->param('id');
		$renda = new Renda();
		$info = $renda->where('id',$id)->select();
		$this->view->assign('info',$info);
		return $this->view->fetch('shouye/renda');
		}
	public function zhengxie(){
		$id = Request::instance()->param('id');
		$zhengxie = new Zhengxie();
		$info = $zhengxie->where('id',$id)->select();
		$this->view->assign('info',$info);
		return $this->view->fetch('shouye/zhengxie');
		}				
	public function zhuance(){
		
		$zhuance = new Zhuance();
		$info = $zhuance->select();
		if($info){
			$this->view->assign('info',$info);}
		return $this->view->fetch('shouye/zhuance');
		}
	public function zhuancexix(){
		$id = Request::instance()->param('id');
		$zhuance = new Zhuance();
		$info = $zhuance->where('id',$id)->select();
		$this->view->assign('info',$info);
		return $this->view->fetch('shouye/zhuancexix');
		}		
	public function jianghua(){
		
		$jianghua = new Jianghua();
		$info = $jianghua->select();
		if($info){
			$this->view->assign('info',$info);}
		return $this->view->fetch('shouye/jianghua');
		}
	public function jianghuaxix(){
		$id = Request::instance()->param('id');
		$jianghua = new Jianghua();
		$info = $jianghua->where('id',$id)->select();
		$this->view->assign('info',$info);
		return $this->view->fetch('shouye/jianghuaxix');
		}			
	public function biaogui(){
		
		$biaogui = new Biaogui();
		$info = $biaogui->select();
		if($info){
			$this->view->assign('info',$info);}
		return $this->view->fetch('shouye/biaogui');
		}
	public function biaoguixix(){
		$id = Request::instance()->param('id');
		$biaogui = new Biaogui();
		$info = $biaogui->where('id',$id)->select();
		$this->view->assign('info',$info);
		return $this->view->fetch('shouye/biaoguixix');
		}			
	public function zhongda(){
		
		$guoactive = new Guojihuodong();
		$info = $guoactive->select();
		if($info){
			$this->view->assign('info',$info);}
		$waijiao = new Waijiao();
		$res = $waijiao->select();
		if($res){
			$this->view->assign('res',$res);}
		$maoyi = new Maoyi();
		$res1 = $maoyi->select();
		if($res1){
			$this->view->assign('res1',$res1);}	
		$duihua = new Duihua();
		$res2 = $duihua->select();
		if($res2){
			$this->view->assign('res2',$res2);}		
		return $this->view->fetch('shouye/zhongda');
		}
	public function waijiao(){
		$id = Request::instance()->param('id');
		$waijiao = new Waijiao();
		$info = $waijiao->where('id',$id)->select();
		$this->view->assign('info',$info);
		return $this->view->fetch('shouye/waijiao');
		}
	public function guoactive(){
		$id = Request::instance()->param('id');
		$guoactive = new Guojihuodong();
		$info = $guoactive->where('id',$id)->select();
		$this->view->assign('info',$info);
		return $this->view->fetch('shouye/guoactive');
		}	
	public function maoyi(){
		$id = Request::instance()->param('id');
		$maoyi = new Maoyi();
		$info = $maoyi->where('id',$id)->select();
		$this->view->assign('info',$info);
		return $this->view->fetch('shouye/maoyi');
		}	
	public function duihua(){
		$id = Request::instance()->param('id');
		$duihua = new Duihua();
		$info = $duihua->where('id',$id)->select();
		$this->view->assign('info',$info);
		return $this->view->fetch('shouye/duihua');
		}																	
}
