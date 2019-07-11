$("#btnProceed").click(function () {
    var customerFormData=$("#formOrder").serialize();
    $.ajax({
        url:"transaction.php",
        method:"post",
        async:true,
        data:customerFormData
    }).done(function (res) {
        alert(res)
    })
});