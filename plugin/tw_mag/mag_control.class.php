<?php
/**
 * (C)2012-2014 twcms.com TongWang Inc.
 * Author: wuzhaohuan <kongphp@gmail.com>
 */

defined('TWCMS_PATH') or exit;

class mag_control extends index_control {
	// 企业留言板
	public function index() {
		$mag = $this->kv->xget('tw_mag'); //查询到mag
		$this->assign('mag_arr', $mag);	  //赋值到变量mag_arr
		$this->display();				  //进入当前模版
	}
	// 删除留言
	public function del() {
		$key = (int) R('key', 'P');

		$arr = $this->kv->xget('tw_mag');
		unset($arr[$key]);
		$this->kv->set('tw_mag', $arr);

		E(0, '删除完成！');
	}
	//接受前台的post插入数据
		public function post() {
			$arr = $this->kv->xget('tw_mag');
			$title=htmlspecialchars(trim($_POST['title']));
			$name=htmlspecialchars(trim($_POST['name']));
			$tel=htmlspecialchars(trim($_POST['tel']));
			$content=htmlspecialchars(trim($_POST['content']));
			$row = array('title' => $title, 'name' => $name, 'tel' => $tel, 'content' => $content);
			$arr[] = $row;
			$this->kv->set('tw_mag', $arr);
			end($arr);
			
		}
		

}