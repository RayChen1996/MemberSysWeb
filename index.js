var  main_page = {
    LoadPage : false,
    DB_Conn:false,
    GoToLoginPage:function(){},
    GoToRegisterPage:function(){},
    GoToMemberListPage:function(){},
    GoToActivePage:function(){},
    GoToHomePage:function(){},
    ShowAlert:function(){},
}




/***
 * success
 * danger
 * warning
 * info
 * primary
 * secondary
 */
main_page.ShowAlert = function(type,message){

    const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

    const alert = (message, type) => {
      const wrapper = document.createElement('div')
      
      wrapper.innerHTML = [
        `<div class="alert alert-${type} alert-dismissible" role="alert">`,
        `   <div>${message}</div>`,
        '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
        '</div>'
      ].join('')
      $('#liveAlertPlaceholder').empty();
      alertPlaceholder.append(wrapper)
    }
  
    const alertTrigger = document.getElementById('liveAlertBtn')
    if (alertTrigger) {
      alertTrigger.addEventListener('click', () => {
        alert(message, type)
      })
    }



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