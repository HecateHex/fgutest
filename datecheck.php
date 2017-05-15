<?php
	header("content-type:text/html;charset=utf-8");
	date_default_timezone_set('PRC');

	/**
	*$date_type 日期选择类型 [0:按天; 1:按周; 2:按月]
	*$is_now 显示类型 [默认0:前一天、前一周、上一个月; 1:当天、本周、本月]
	*$date_select 选择的时间
	*/
	/*$date_type 0:按天; 1:按周; 2:按月*/
	$date_type = I('post.date_type','','htmlspecialchars');

	/*is_now 默认0:前一天、前一周、上一个月; 1:当天、本周、本月*/
	//按需求随时切换
	$is_now = 0;

	switch ($date_type) {
		/*按天*/
		case '1':
			$date_select = I('post.date_select','','htmlspecialchars');
			if (empty($date_select)) {
				if($is_now == 0){/*前一天*/
					/*昨天凌晨0点时间戳*/
					$time_from = mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					/*今天凌晨0点时间戳*/
					$time_to = $time_from + 86400;

				}else{/*当天*/
					/*今天凌晨0点时间戳*/
					$time_from = mktime(0,0,0,date('m'),date('d'),date('Y'));
					/*目前时间时间戳*/
					$time_to = time();
				}
				$date_select = date('Y-m-d',$time_from);

			}else{/*具体某一天*/
				$time_from = strtotime($date_select);
				$time_to = $time_from + 86400;
			}
			
			break;

		/*按周*/
		case '2':
			$date_select = I('post.date_select','','htmlspecialchars');
		
			if(empty($date_select)){
				if($is_now == 0){/*上一周*/
					$last_monday = date('Y-m-d',(time()-((date('w')==0?7:date('w'))-1+7)*86400));
					$time_from = strtotime($last_monday);
					$last_sunday = date('Y-m-d',(time()+(7-(date('w')==0?7:date('w'))-7)*86400));
					$time_to = strtotime($last_sunday)+86400;


				}else{/*本周*/
					$this_monday = date('Y-m-d',(time()-((date('w')==0?7:date('w'))-1)*86400));
					$time_from = strtotime($this_monday);
					$this_sunday = date('Y-m-d',(time()+(7-(date('w')==0?7:date('w')))*86400));
					$time_to = strtotime($this_sunday)+86400;
				}

				$date_select = date('Y-m-d',$time_from);

			}else{/*具体某一周*/
				$this_monday = date('Y-m-d',(strtotime($date_select)-((date('w')==0?7:date('w'))-1)*86400));
				$time_from = strtotime($this_monday);
				$this_sunday = date('Y-m-d',(strtotime($date_select)+(7-(date('w')==0?7:date('w')))*86400));
				$time_to = strtotime($this_sunday)+86400;
			}

			break;

		/*按月*/
		case '3':
			$date_select = I('post.date_select3','','htmlspecialchars');
			if(empty($date_select)){
				if($is_now == 0){/*上一个月*/
					$beginOM = date('Y-m-d',strtotime('-1 month', strtotime(date('Y-m', time()).'-01 00:00:00')));/*月初*/
					$time_from = strtotime($beginOM);
					$endOM = date('Y-m-d',strtotime(date('Y-m', time()).'-01 00:00:00')-86400);/*月末*/
					$time_to = strtotime($endOM)+86400;

				}else{/*本月*/
					$beginOM = date('Y-m-d',strtotime(date('Y-m', time()).'-01 00:00:00'));/*月初*/
					$time_from = strtotime($beginOM);
					$endOM = date('Y-m-d',strtotime(date('Y-m', time()).'-'.date('t', time()).' 00:00:00'));/*月末*/
					$time_to = strtotime($endOM)+86400;

				}

			}else{/*具体某一个月*/
				$beginOM = date('Y-m-d',strtotime($date_select.'-01 00:00:00'));/*月初*/
				$time_from = strtotime($beginOM);
				$endOM = date('Y-m-d',strtotime($date_select.'-'.date('t', $date_select).' 00:00:00'));/*月末*/
				$time_to = strtotime($endOM)+86400;

			}

			break;
		
		default:
			# code...
			break;
	}

?>