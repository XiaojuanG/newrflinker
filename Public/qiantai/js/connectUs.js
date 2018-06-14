$(function() {
    function checkUserName(username){
        if ((/^[\u4E00-\u9FA5A-Za-z]+$/.test(username))) {
            return true;
        }else{
            return false;
        }
    }
	function checkMobile(mobile){
	    if((/^1[3|4|5|6|7|8]\d{9}$/.test(mobile))){
	        return true;
	    }else{
	        return false;
	    }
	}
	function isEmail(str){
	    if ((/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/.test(str))){
	        return true;
	    }else{
	        return false;
	    }
	}
	// 联系我们
	$('.matter-button').on('click', function() {
		// alert(123456789)
    
    	var requestData = {
    		matter:$('.matter').val(),
    		username:$('.username').val(),
    		userphone:$('.userphone').val(),
    		useremail:$('.useremail').val(),
    		matterconter:$('.matterconter').val()
		}
	
    	var valid = true;
        if(valid && requestData.matter == ''){
            valid = false;
            var tips = $(".matter").attr("data-foolish-msg");
            $(".matter").focus();
        }
        if(valid && !checkUserName(requestData.username)){
            valid = false;
            var tips = $(".username").attr("data-foolish-msg");
            $(".username").focus();
        }
        if(valid && !checkMobile(requestData.userphone)){
            var tips = $(".userphone").attr("data-foolish-msg");
            $(".userphone").focus();
            valid = false;
		}
        if(valid && !isEmail(requestData.useremail)){
            var tips = $(".useremail").attr("data-foolish-msg");
            $(".useremail").focus();
            valid = false;
        }
        if(valid && requestData.matterconter.length <= 0){
            valid = false;
            var tips = $(".matterconter").attr("data-foolish-msg");
            $(".matterconter").focus();
        }

        if(valid){
            // window.location.href='';
        }else{
            layer.open({
                  content: tips
                  ,skin: 'msg'
                  ,time: 2 //2秒后自动关闭
                });
        }
	});

	    	})