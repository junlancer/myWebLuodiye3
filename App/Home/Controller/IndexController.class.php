<?php
/**
 *　                  oooooooooooo
 *
 *                  ooooooooooooooooo
 *                       o
 *                      o
 *                     o        o
 *                    oooooooooooo
 *
 *         ～～         ～～         　　～～
 *       ~~　　　　　~~　　　　　　　　~~
 * ~~～~~～~~　　　~~~～~~～~~～　　　~~~～~~～~~～
 * ·······              ~~XYHCMS~~            ·······
 * ·······  闲看庭前花开花落 漫随天外云卷云舒 ·······
 * ·············     www.xyhcms.com     ·············
 * ··················································
 * ··················································
 *
 * @Author: gosea <gosea199@gmail.com>
 * @Date:   2014-06-21 10:00:00
 * @Last Modified by:   gosea
 * @Last Modified time: 2017-06-20 21:44:32
 */

namespace Home\Controller;

class IndexController extends HomeCommonController {
	//方法：index
	public function index() {

		go_mobile();

		$site_name  = C('CFG_WEBNAME');
		$site_title = C('CFG_WEBTITLE');
		$this->assign('title', empty($site_title) ? $site_name : $site_title);
		$this->assign('keywords', C('CFG_KEYWORDS'));
		$this->assign('description', C('CFG_DESCRIPTION'));
		$this->display();

	}

	
	public function get_code_ajax()
	{
		$mobile = I('mobile');

		$code = generate_str(6);

		if(self::send_code($code,$mobile)){


			session('mobile',$mobile);
			session('verify_code',$code);

			$data = array('code'=>'0000','errmsg'=>'发送成功');
			// $data = array('code'=>'0000','errmsg'=>'发送成功'.$code);

		}else{
			$data = array('code'=>'9999','errmsg'=>'发送失败');

		}

		echo json_encode($data);
		exit;

	}

	
	public function send_code($code,$mobile)
	{

		require_once './Include/Library/Vendor/Sms/ChuanglanSmsHelper/ChuanglanSmsApi.php';
		$clapi  = new \ChuanglanSmsApi();

		$result = $clapi->sendSMS($mobile,'【晟碧】请输入验证码'.$code.'完成手机验证(5分钟内有效)。如非本人操作请忽略。' );

		if(!is_null(json_decode($result))){
			
			$output=json_decode($result,true);

			if(isset($output['code'])  && $output['code']=='0'){
				// echo '发送成功';exit;
				return true;
			}else{
				// echo $output['errorMsg'];exit;
				return false;
			}
		}else{
				// echo $result; exit;
				return false;
		}

		
	}
}
