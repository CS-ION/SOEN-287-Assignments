function addNumbers(array){
    let sum = 0;
    for (let i=0; i<array.length; i++){
        sum += Number(array[i]);
    }
    return sum;
}

function findMaxNumber(){
    return Math.max(...arguments);
}

function addOnlyNumbers(array){
    let sum = 0;
    for (let i=0; i<array.length; i++){
        if (Number.parseFloat(array[i])){
        sum += Number.parseFloat(array[i]);
        }
    }
    return sum;
}

function getDigits(string){
    string = string.split(/\D+/);
    let newString = "";
    for (let i = 0; i<string.length; i++){
        newString+= string[i];
    }
    return newString;
}

function reverseString(sentence){
    let reverse = "";
    for (let i = sentence.length-1; i>=0; i--){
        reverse+=sentence[i];
    }
    return reverse;
}

function getCurrentDate(){
    const date = new Date().toString().split(" ");

    if (date[0]=="Sun" || date[0]=="Mon" || date[0]=="Fri"){
        date[0] = date[0]+"day";
    }
    else if (date[0]=="Tue"){
        date[0] = date[0]+"sday";
    }
    else if (date[0]=="Wed"){
        date[0] = date[0]+"nesday"
    }
    else if (date[0]=="Thu"){
        date[0] = date[0]+"rsday"
    }
    else if (date[0]=="Sat"){
        date[0] = date[0]+"urday"
    }

    return date[0] + ", " + date[1] + " " + date[2] + ", " + date[3];
}

function onLoad(){
    document.getElementById("addNumbers").innerHTML += addNumbers([1,2,3,4]); 
    document.getElementById("findMaxNumber").innerHTML += findMaxNumber(1,2,3,4);
    document.getElementById("addOnlyNumbers").innerHTML += addOnlyNumbers([4, 5, "3.0 birds", true, "birds2"]);
    document.getElementById("getDigits").innerHTML += getDigits("Ayaan98Amaan7Affan4.0");
    document.getElementById("reverseString").innerHTML += reverseString("See ya later");
    document.getElementById("getCurrentDate").innerHTML += getCurrentDate();
}