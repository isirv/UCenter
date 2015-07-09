<?php
/**
 * 错误信息配置
 *
 * @access		pubilc
 * @author		tiantao
 * @create		2015/07/09
 * @version		v1.0
 */

return array(

		"0"=>array("en"=>"Failed", "zh"=>"失败"),
		"1"=>array("en"=>"Success", "zh"=>"成功"),

		/*
		|--------------------------------------------------------------------------
		| 系统级错误
		|--------------------------------------------------------------------------
		|
		| 系统级错误
		|
		*/
		"10001"=>array("en"=>"System error", "zh"=>"系统错误"),
		"10002"=>array("en"=>"Service unavailable", "zh"=>"服务暂停"),
		"10003"=>array("en"=>"Remote service error", "zh"=>"远程服务错误"),
		"10004"=>array("en"=>"IP limit", "zh"=>"IP限制"),
		"10005"=>array("en"=>"Param error", "zh"=>"参数错误"),
		"10006"=>array("en"=>"Illegal request", "zh"=>"非法请求"),
		"10007"=>array("en"=>"Request api not found", "zh"=>"接口不存在"),
		"10008"=>array("en"=>"HTTP method error", "zh"=>"请求方式错误"),
		"10009"=>array("en"=>"Request body length over limit", "zh"=>"请求长度超过限制"),
		"10010"=>array("en"=>"Invalid user", "zh"=>"不合法的用户"),
		"10011"=>array("en"=>"User requests out of rate limit", "zh"=>"用户请求频次超过上限"),
		"10012"=>array("en"=>"Request timeout", "zh"=>"请求超时"),
		"10013"=>array("en"=>"User doesn't exists", "zh"=>"用户不存在"),

		/*
		|--------------------------------------------------------------------------
		| 服务级错误
		|--------------------------------------------------------------------------
		|
		| 服务级错误
		| 2[级别]01[模块]01[错误编号]
		|
		*/
		//20000 - 20099   Common error    公共错误
		"20001"=>array("en"=>"Unknown error", "zh"=>"未知错误"),
		"20002"=>array("en"=>"DB error", "zh"=>"数据库错误"),
		"20003"=>array("en"=>"Object already exists", "zh"=>"记录已存在"),
		//20100 - 20199   System model error    系统模块错误
		"20101"=>array("en"=>"Cid parameter is null", "zh"=>"Cid参数为null"),
		"20102"=>array("en"=>"Failed to initialize user data", "zh"=>"初始化用户数据失败"),
		//20200 - 20299   User model error    用户模块错误
		"20201"=>array("en"=>"Uid parameter is null", "zh"=>"Uid参数为null"),
		"20202"=>array("en"=>"Username or password error", "zh"=>"用户名或密码错误"),
		"20203"=>array("en"=>"Username and pwd auth out of rate limit", "zh"=>"用户名密码认证超过请求限制"),
		"20204"=>array("en"=>"Accounts have been locked", "zh"=>"账户已被锁定"),
		"20205"=>array("en"=>"Failed to modify password", "zh"=>"修改密码失败"),
		"20206"=>array("en"=>"The phone number has been used", "zh"=>"该手机号已经被使用"),
		"20207"=>array("en"=>"The account has bean bind phone", "zh"=>"该用户已经绑定手机"),
		"20208"=>array("en"=>"Verification code error", "zh"=>"验证码错误"),
		"20209"=>array("en"=>"Failed to send verification code", "zh"=>"发送验证码失败"),
		//20300 - 20399   Article model error    文章模块错误
		"20301"=>array("en"=>"Aid parameter is null", "zh"=>"Aid参数为null"),
		"20302"=>array("en"=>"Content is null", "zh"=>"内容为空"),
		"20303"=>array("en"=>"Article not found", "zh"=>"文章不存在"),
		"20350"=>array("en"=>"Article category error", "zh"=>"文章分类错误"),
		"20351"=>array("en"=>"Caid parameter is null", "zh"=>"Caid参数为null"),
		//20400 - 20499   Comment model error    评论模块错误
		"20401"=>array("en"=>"Coid parameter is null", "zh"=>"Coid参数为null"),
		"20402"=>array("en"=>"Comment does not exist", "zh"=>"不存在的评论"),
		"20403"=>array("en"=>"Illegal comment", "zh"=>"不合法的评论"),
);
