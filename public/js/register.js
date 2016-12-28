window.addEventListener('load',function(){
    var inputBoxID = document.loginForm.user_id;
    var inputBoxPW = document.loginForm.user_pw;
    var inputBoxPW_C = document.loginForm.user_pw_chk;
    inputBoxID.addEventListener('keyup',function(){
        if(inputBoxID.value == ""){
            idChk.innerHTML = "아이디를 입력해주세요.";
        }else{
            $.ajax({
                url:URL+"helper/idChk/"+inputBoxID.value,
                success:function(data){
                    if(data==1){
                        var idChk = document.getElementById("idChk");
                        idChk.innerHTML = "아이디가 존재합니다.";
                    }else{
                        var idChk = document.getElementById("idChk");
                        idChk.innerHTML = "적합한 아이디입니다.";
                    }
                }
            });
        }
    });
    inputBoxPW.addEventListener('keyup',function(){
        var pwChk = document.getElementById("pwChk");
        if(inputBoxPW.value == ""){
            pwChk.innerHTML = "비밀번호를 입력해주세요.";
        }else if(inputBoxPW.value == inputBoxPW_C.value){
            pwChk.innerHTML = "비밀번호가 일치합니다.";
        }else{
            pwChk.innerHTML = "비밀번호가 일치하지 않습니다.";
        }
    });
    inputBoxPW_C.addEventListener('keyup',function(){
        var pwChk = document.getElementById("pwChk");
        if(inputBoxPW.value == ""){

            pwChk.innerHTML = "비밀번호를 입력해주세요.";
        }else if(inputBoxPW.value == inputBoxPW_C.value){
            pwChk.innerHTML = "비밀번호가 일치합니다.";
        }else{
            pwChk.innerHTML = "비밀번호가 일치하지 않습니다.";
        }
    });


})
