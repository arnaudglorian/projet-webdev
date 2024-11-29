function store(a) {

    sessionStorage.setItem("isLoggedIn", "true");
    sessionStorage.setItem("email", a);
}



document.getElementById("logout").addEventListener("click", function() {
    sessionStorage.removeItem("isLoggedIn");
    sessionStorage.removeItem("email");
});

function checkConn(){
    if(sessionStorage.getItem("isLoggedIn")==="true"){
        document.getElementsByName($signedUser)=sessionStorage.getItem("email");
    }
} 