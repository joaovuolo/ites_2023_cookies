Cookies.set("ip_address_third",ip_address_cookies,{expires: 1});
try{
    Cookies.set("name_user_third",name_user_cookies,{expires: 1});
}
catch(e){
    if(!Cookies.get("name_user_third")){
        Cookies.set("name_user_third","undefined",{expires: 1});
    }
}
try{
    Cookies.set("email_user_third",email_user_cookies,{expires: 1});
}
catch(e){
    if(!Cookies.get("email_user_third")){
        Cookies.set("email_user_third","undefined",{expires: 1});
    }
}

if(document.querySelector('.home')  !== null){;
    document.getElementsByClassName('home')[0].innerHTML = "<div style='text-align:center;margin-bottom:15px;'><img width='50%' src='https://betterplace-assets.betterplace.org/uploads/project/profile_picture/000/118/495/crop_original_bc058750-34ae-443a-8818-45fe2412b67e.png'></div>" + document.getElementsByClassName('home')[0].innerHTML;
}
if (document.querySelector('.standard')  !== null){
    document.getElementsByClassName('standard')[0].innerHTML = "<div style='text-align:center;margin-bottom:15px;'><img width='50%' src='https://betterplace-assets.betterplace.org/uploads/project/profile_picture/000/118/495/crop_original_bc058750-34ae-443a-8818-45fe2412b67e.png'></div>" + document.getElementsByClassName('standard')[0].innerHTML;
}
if(document.querySelector('.content')  !== null){
    document.getElementsByClassName('content')[0].innerHTML = "<div style='text-align:center;margin-bottom:15px;'><img width='50%' src='https://betterplace-assets.betterplace.org/uploads/project/profile_picture/000/118/495/crop_original_bc058750-34ae-443a-8818-45fe2412b67e.png'></div>" + document.getElementsByClassName('content')[0].innerHTML;
}



