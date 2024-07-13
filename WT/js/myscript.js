// // alert("welcome to page");
// var a=20;
// b=20.3;
// c=a+b;
// // alert("the sum is "+c);
// console.log("the sum is "+c);
// // document.write("the sum is"+c)
// const at=document.getElementById("result")

// at.innerHTML="the sum is " +c;
function sum(){
    //use prompt for user input
    num1=parseInt(prompt("enter the first number:"));
    num2=parseInt(prompt("enter the second number:"));
    tsum=num1+num2;
    document.getElementById("sums").innerHTML="the sum of "+num1+" and "+num2+" is "+tsum;
}

function pageexit(){

    //use confirm() for exit
    result=confirm("are you sure you want to quit this page")
    console.log(result);
    // document.write(result);
    if(result){
        window.close();
    }
    else{
        alert("you are continuing the page");
    }
}