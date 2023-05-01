function getUserInfo(){

    let name = prompt("What is your full name?");
    let age = prompt("Enter old are you?");

    if(!age.match(/^\d+$/) ){
        alert("Please enter correct age");
        document.getElementById("content").innerHTML = "Refresh the website";
        return;
    }

    name = name.split(" ");
    verified_name = "";

    for (let i = 0; i < name.length; i++){
        if (name[i].length==0 && !name[i].match(/^[a-zA-z]+$/)){
            alert("Please enter correct name");
            document.getElementById("content").innerHTML = "Refresh the website";
            return;
        }
        verified_name+=name[i] + " ";
    }

    document.getElementById("content").innerHTML = "Hi, my name is " + verified_name + " and I'm " + age + " years old.";

}