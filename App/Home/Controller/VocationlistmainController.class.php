<?php

namespace Home\Controller;
use Think\Controller;
use Vendor\Page;
class VocationlistmainController extends ComController {
    public function index(){
		
		//判断当前语言
		$language = L('language');
		$this->assign('language',$language);
		
		$id = $_REQUEST['id'];

		
		
		//行业介绍
		$industry = M('industry');
		$iycontent['id'] = $id;
		$iyjieshao ="id,".$language."nameiy as nameiy,".$language."iycontent as iycontent,".$language."iylogo as iylogo,"
		.$language."logoshow as logoshow,".$language."anli1 as anli1,".$language."anli2 as anli2,"
		.$language."anli3 as anli3,"
		.$language."anli1show as anli1show,".$language."anli2show as anli2show,".$language."anli3show as anli3show,".$language."linksiy as linksiy,"
		.$language."logoshow,".$language."anliname1 as anliname1,".$language."anliname2 as anliname2,".$language."anliname3 as anliname3";
		$iyjieshaos = $industry->where($iycontent)->field($iyjieshao)->find();
		//print_r($iyjieshaos);exit;
		$this->assign('iyjieshaos',$iyjieshaos);


		//行业详情
        $where_info = "id = $id";
        $filed_info = "id,".$language."nameiy as nameiy,".$language."iycontent as iycontent";
        $industry_info = $industry->where($where_info)->field($filed_info)->find();
        $this->assign('industry_info',$industry_info);
		
		
		//行业轮播图
		$industryimgs = M('industryimgs');
		$iywhereimgs['iyid'] = $id;
		$iyimgs ="id,".$language."iyimgs as iyimgs";
		/* print_r($iyimgs);exit; */
		$iyimgss = $industryimgs->where($iywhereimgs)->order('iyimgssort')->field($iyimgs)->select();
		//print_r($industryimgs);exit;
		$this->assign('iyimgss',$iyimgss);
		//print_r($iyimgss);exit;
		//print_r($iyjieshaos);exit;
                
                //如果进入该控制器需要显示参数，则需要额外渲染参数变量
                $this->assign('commom_field','&id='.$id);
		$this -> display();	
    }

   
   
    
   
   
   
   


}