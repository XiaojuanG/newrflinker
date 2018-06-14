<?php

namespace Home\Controller;
use Think\Controller;
use Vendor\Page;
class CodeinfoController extends ComController {
    public function index(){

        
		
        //判断当前语言
		$language = L('language');
		$this->assign('language',$language);
		
		//公共下载
		$support = M('support');
		$stselect = "id,".$language."stname as stname,".$language."sttitle as sttitle,"
		.$language."file as file,stsort";
		$stwhere = $language."sttype = 2";
		$supports = $support->where($stwhere)->order('stsort')->getField($stselect);
		
		
		$this -> assign('supports',$supports);
		//print_r($supports);exit;
		$this -> display();
		
    }

    
   
   

}