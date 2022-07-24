var  main_page = {
    LoadPage : false,
    DB_Conn:false,
    GoToLoginPage:function(){},
    GoToRegisterPage:function(){},
    GoToMemberListPage:function(){},
    GoToActivePage:function(){},
    GoToHomePage:function(){},
}



main_page.GoToHomePage = function(){
    console.log("載入GoToHomePage頁面")
    $("#main_page").load("./HomePage/home.php");
}




main_page.GoToLoginPage = function(){
    console.log("載入登入頁面")
    $("#main_page").load("./Login/Login.php");
}




main_page.GoToRegisterPage = function(){
    $("#main_page").load("./Register/Register.php");
}



main_page.GoToMemberListPage = function(){
    $("#main_page").load("./BaseSet/index.php");
}


main_page.GoToActivePage = function(){
    $("#main_page").load("./Register/Register.php");
}




$(function(){
    console.log("Doc is ready")
    
    $(".nav li").on("click",function(e){



        $(".nav li").each(function( index ) {
            $(this).find("a").removeClass("active")
        });
        var nav_text = $( this ).text()
        console.log(nav_text)
        if(nav_text=="首頁"){
            main_page.GoToHomePage()
        }

        if(nav_text=="註冊"){
            main_page.GoToRegisterPage()
        }


        if(nav_text=="登入"){
            main_page.GoToLoginPage()
        }

        if(nav_text=="個人"){
            main_page.GoToMemberListPage()
        }


        $(this).find("a").addClass("active")

    })


    main_page.GoToHomePage()
    $("#main_page").load("./HomePage/home.php");


})