$("#btnAdd").click(function () {
    var httpRequest=new XMLHttpRequest();
    httpRequest.onreadystatechange=function () {
        if (httpRequest.readyState===4 && httpRequest.status===200){
            alert(httpRequest.responseText);
        }
    };
    httpRequest.open('post','saveItem.php',true);
    httpRequest.setRequestHeader("Content-Text","application/json");
    var jsArray=$("#itemForm").serializeArray();
    var jsOnArray=JSON.stringify(jsArray);
    httpRequest.send(jsOnArray);
});

$("#btnDelete").click(function () {
    var httpRequest=new XMLHttpRequest();
    httpRequest.onreadystatechange=function () {
        if (httpRequest.readyState===4 && httpRequest.status===200){
            alert(httpRequest.responseText);
        }
    };
    httpRequest.open('post','removeItem.php',true);
    httpRequest.setRequestHeader("Content-Text","application/json");
    var jsArray=$("#itemForm").serializeArray();
    var jsOnArray=JSON.stringify(jsArray);
    httpRequest.send(jsOnArray);
});

$("#btnUpdate").click(function () {
    var httpRequest=new XMLHttpRequest();
    httpRequest.onreadystatechange=function () {
        if (httpRequest.readyState===4 && httpRequest.status===200){
            alert(httpRequest.responseText);
        }
    };
    httpRequest.open('post','updateItem.php',true);
    httpRequest.setRequestHeader("Content-Text","application/json");
    var jsArray=$("#itemForm").serializeArray();
    var jsOnArray=JSON.stringify(jsArray);
    httpRequest.send(jsOnArray);
});