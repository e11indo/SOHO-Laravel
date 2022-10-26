
/* 자주하는질문 */
$(document).ready(function(){
    $('.question').on('click',function(){
       $(this).next().toggleClass('active'); 
    });
});


/* 상담신청 */
function checkName(){
    let check = document.consulting;
    if(check.name.value==""){
        alert("이름을 입력해주세요.")
        return false
    }
    if(check.company.value==""){
        alert("회사명을 입력해주세요.")
        return false
    }
    if(check.tel.value==""){
        alert("전화번호를 입력해주세요(숫자만 입력)")
        return false
    }
    if(check.tel.value.length <11 || check.phone.value.length >11 ){
        alert("전화번호를 올바르게 11자리 입력해주세요")
        return false           
    }
    return true
}

function chageLangSelect(){
    var langSelect = document.getElementById("contact_option");
     
    // select element에서 선택된 option의 value가 저장된다.
    var selectValue = langSelect.options[langSelect.selectedIndex].id;
    $("#select_option").prop('name', selectValue);
}

/* 	$(document).ready(function() {
		var url = location.href;
		var getAr0 = url.indexOf("Internet_home_1");

        console.log(url);

	});	 */

    var url_pathname = window.location.pathname;
    var url = location.href;
    $(window).load(function(){
        $(".soho_menu > a").each(function(){
            $(this).removeClass('active');
            
            if((url).indexOf($(this).attr("href")) != -1){
                console.log("asd");
                if($(this).addClass('active'));
            }
        })
    })

    $(window).load(function(){
        $(".soho-menu > a").each(function(){
            $(this).removeClass('active');
            
            if($(this).attr("href") == url){
                if($(this).addClass('active'));
            }
        })
    })




    $('.soho_navbar').on("click",function(){
        $('.soho').toggleClass("active");
    })


