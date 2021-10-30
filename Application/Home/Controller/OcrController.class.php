<?php
namespace Home\Controller;
use Think\Controller;
class OcrController extends Controller {
	public function _initialize(){
		$user = M("user");
		$userStr = I("user");
		$number = $user->where("username='%s'",$userStr)->select();
		if($userStr === "null"){
			$this->ajaxReturn("请登录");
		}else{
			if($number[0]["vip"] == "1"){
				
			}else{
				if($number[0]["test"] <= 0){
					$this->ajaxReturn("你的试用次数已用完");
				}else{
					$data["username"] = $userStr;
					$data["test"] = $number[0]["test"]-1;
					$user->save($data);
				}
			}
		}
		
	}
	public function ocrWZ(){
		$base = I("base");
		Vendor("ocr.AipOcr");
		$app_id = '21486680';
		$API_KEY = 'jRtpHGD24kzoNsWvlx6Xfauq';
		$SECRET_KEY = '8a6brOogvl9NIdL8Stza1gMWeEqXccGo';
		$client = new \AipOcr($APP_ID, $API_KEY, $SECRET_KEY);
		$result = $client->general($base);
		$words = $result['words_result'];
		$len = $result["words_result_num"];
		$result = "";
		for($i = 0; $i<$len;$i++){
			$result =  $result.$words[$i]["words"]."\n";
		}
		echo $result;
	}
	public function ocrBG(){
		$base = I("base");
		Vendor("ocr.AipOcr");
		$app_id = '21486680';
		$API_KEY = 'jRtpHGD24kzoNsWvlx6Xfauq';
		$SECRET_KEY = '8a6brOogvl9NIdL8Stza1gMWeEqXccGo';
		$client = new \AipOcr($APP_ID, $API_KEY, $SECRET_KEY);
		$re = $client->tableRecognitionAsync($base);
		$id = $re["result"][0]["request_id"];
		// echo $id;
		$arr = array("excel");
		$result = $client->getTableRecognitionResult($id,$arr);
		while($result["result"]["ret_code"] < 3 ){
			$result = $client->getTableRecognitionResult($id,$arr);
		}
		echo $result["result"]["result_data"];
	}
	public function ocrSX(){
		$base = I("base");
		Vendor("ocr.AipOcr");
		$app_id = '21486680';
		$API_KEY = 'jRtpHGD24kzoNsWvlx6Xfauq';
		$SECRET_KEY = '8a6brOogvl9NIdL8Stza1gMWeEqXccGo';
		$client = new \AipOcr($APP_ID, $API_KEY, $SECRET_KEY);
		$result = $client->handwriting($base);
		$words = $result['words_result'];
		$len = $result["words_result_num"];
		$result = "";
		for($i = 0; $i<$len;$i++){
			// echo $words[$i]["words"]."<br/>";
			$result =  $result.$words[$i]["words"]."\n";
		}
		echo $result;
	}
	public function ocrZJ(){
		$base = I("base");
		Vendor("ocr.AipOcr");
		$app_id = '21486680';
		$API_KEY = 'jRtpHGD24kzoNsWvlx6Xfauq';
		$SECRET_KEY = '8a6brOogvl9NIdL8Stza1gMWeEqXccGo';
		$client = new \AipOcr($APP_ID, $API_KEY, $SECRET_KEY);
		$result = $client->idcard($base);
		$words = $result['words_result'];
		$len = $result["words_result_num"];
		$result = "";
		for($i = 0; $i<$len;$i++){
			// echo $words[$i]["words"]."<br/>";
			$result =  $result.$words[$i]["words"]."\n";
		}
		echo $result;
	}
	public function ocrSZ(){
		$base = I("base");
		Vendor("ocr.AipOcr");
		$app_id = '21486680';
		$API_KEY = 'jRtpHGD24kzoNsWvlx6Xfauq';
		$SECRET_KEY = '8a6brOogvl9NIdL8Stza1gMWeEqXccGo';
		$client = new \AipOcr($APP_ID, $API_KEY, $SECRET_KEY);
		$result = $client->numbers($base);
		$words = $result['words_result'];
		$len = $result["words_result_num"];
		$result = "";
		for($i = 0; $i<$len;$i++){
			// echo $words[$i]["words"]."<br/>";
			$result =  $result.$words[$i]["words"]."\n";
		}
		echo $result;
	}
	public function ocrFK(){
		$base = I("base");
				Vendor("ocr.AipOcr");
				$app_id = '21486680';
				$API_KEY = 'jRtpHGD24kzoNsWvlx6Xfauq';
				$SECRET_KEY = '8a6brOogvl9NIdL8Stza1gMWeEqXccGo';
				$client = new \AipOcr($APP_ID, $API_KEY, $SECRET_KEY);
				$result = $client->householdRegister($base);
				$words = $result['words_result'];
				$len = $result["words_result_num"];
				$result = "";
				for($i = 0; $i<$len;$i++){
					// echo $words[$i]["words"]."<br/>";
					$result =  $result.$words[$i]["words"]."\n";
				}
				echo $result;
	}
}