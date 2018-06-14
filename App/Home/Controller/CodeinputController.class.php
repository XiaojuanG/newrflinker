<?php

namespace Home\Controller;
use Think\Controller;
use Vendor\Page;
class CodeinputController extends ComController {
    public function index(){

        
		
        //判断当前语言
		$language = L('language');
		$this->assign('language',$language);
		
		//公共下载
		$support = M('support');
		$stselect = "id,".$language."stname as stname,".$language."sttitle as sttitle,"
		.$language."file as file,stsort";
		$stwhere = $language."sttype = 3";
		$supports = $support->where($stwhere)->order('stsort')->getField($stselect);
		
		
		$this -> assign('supports',$supports);
		//print_r($supports);exit;
		$this -> display();
		
    }

    
	//验证下载码
	public function code(){
		
		//判断当前语言
		$language = L('language');
		$this->assign('language',$language);
		
		$code = $_POST['code'];
		
		//获取当前下载验证码
		$dates = date('md');
        $codeyzm = $dates + 1234;
		
		if($code == $codeyzm){
			echo "1";  //成功
		}else{
			echo "2";   //失败
		}
		
		/* $name = $_POST['name'];
		$pwd = $_POST['pwd'];
		
		//用户名
		$dwuser = M('dwuser');
		$stwhere = "dowusername = '".$name."'";
		$users = $dwuser->where($stwhere)->find();
		
		
		//用户名输入正确
		if($users){
            //密码正确
			if($pwd == $users['dowuserpwd']){
				echo "1";
			}else{
				//用户名正确,密码错误
				echo "3";
			}
		}else{
			//用户名输入错误
			echo "2";
		} */

				
	}
   
   
   
   

}