<?php
/***
*用户自定义函数文件，二次开发，可将函数写于此，升级不会覆盖此文件
***/

	//XXXtest为测试数据
	function xxxtest() {
		echo "xxxtest function";
	}

		function generate_str( $length = 8 ) { 
// 密码字符集，可任意添加你需要的字符 
// $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; 
// $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; 
		$chars = '0123456789'; 


		$str = ''; 
		for ( $i = 0; $i < $length; $i++ ) 
		{ 
		$str .= $chars[ mt_rand(0, strlen($chars) - 1) ]; 
		} 
		return $str; 
	}

?>