<?php
/**
 * 女神来了模块定义
 *
 * @author 微赞科技
 * @url http://bbs.wdlcms.com/
 */
defined('IN_IA') or exit('Access Denied');

		$reply['sharetitle']= $this->get_share($uniacid,$rid,$from_user,$reply['sharetitle']);
		$reply['sharecontent']= $this->get_share($uniacid,$rid,$from_user,$reply['sharecontent']);
		$myavatar = $avatar;
		$mynickname = $nickname;
		$title = $reply['title'];
		//$_share['link'] = $_W['siteroot'] .'app/'.$this->createMobileUrl('shareuserview', array('rid' => $rid,'fromuser' => $from_user));//分享URL
		 $_share['title'] = $reply['sharetitle'];
		$_share['content'] =  $reply['sharecontent'];
		$_share['imgUrl'] = toimage($reply['sharephoto']);
		
		
		$toye = $this->_stopllq('stopip');
		include $this->template($toye);
		