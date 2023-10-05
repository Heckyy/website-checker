new DataTable('#example');

var buttonCreate = document.getElementById("create");
buttonCreate.addEventListener("click",createWeb);


function createWeb(){
    var statusWeb = document.getElementById("status").value;
    var createdBy = document.getElementById("createdBy").value;
    var webName = document.getElementById("webName").value;
    var webUrl = document.getElementById("webUrl").value;
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    if (statusWeb == null || statusWeb==""){
        alert("Please Input Status!");
    }else{
        var data = {
            "statusWeb":statusWeb,
            "webName":webName,
            "webUrl":webUrl,
            "createdBy":createdBy,
        }
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            method :"POST",
            url : "/store-web",
            data:data,
            success : function (response){
                    console.log(response);
            }

        });
    }
}
