<?php
defined('KONG_PATH') || exit;
$arr = array();
$arr[] = array('title' => '你们的产品建议', 'name' => '谢文东', 'tel' => '15738364224', 'content' => '产品有些时候不能正常的工作希望能好好的改进产品');
$this->kv->set('tw_mag', $arr);			//在tw_kv里插入一条插件信息
