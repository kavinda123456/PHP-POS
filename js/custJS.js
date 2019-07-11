
$("#btnRegister").click(function () {
    var httpRequest=new XMLHttpRequest();
    httpRequest.onreadystatechange=function () {
        if (httpRequest.readyState === 4 && httpRequest.status === 200) {
            alert(httpRequest.responseText)
        }
    };
    httpRequest.open('post','saveCustomer.php',true);
    httpRequest.setRequestHeader("Content-Type","application/json");
    var jsArray=$("#saveformcus").serializeArray();
    var jsOnArray=JSON.stringify(jsArray);
    httpRequest.send(jsOnArray);
});

$("#btnUpdate").click(function () {
    var httpRequest=new XMLHttpRequest();
    httpRequest.onreadystatechange=function () {
        if (httpRequest.readyState === 4 && httpRequest.status === 200) {
            alert(httpRequest.responseText)
        }
    };
    httpRequest.open('post','updateCustomer.php',true);
    httpRequest.setRequestHeader("Content-Type","application/json");
    var jsArray=$("#saveformcus").serializeArray();
    var jsOnArray=JSON.stringify(jsArray);
    httpRequest.send(jsOnArray);
});

$("#btnDelete").click(function () {
    var httpRequest=new XMLHttpRequest();
    httpRequest.onreadystatechange=function () {
        if (httpRequest.readyState === 4 && httpRequest.status === 200) {
            alert(httpRequest.responseText)
        }
    };
    httpRequest.open('post','deleteCustomer.php',true);
    httpRequest.setRequestHeader("Content-Type","application/json");
    var jsArray=$("#saveformcus").serializeArray();
    var jsOnArray=JSON.stringify(jsArray);
    httpRequest.send(jsOnArray);
});
