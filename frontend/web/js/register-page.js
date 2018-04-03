$("document").ready(function(){
    var provinceName;       //store province name from Get Ajax
    var provinceId;         //store province Id from Get Ajax

    var myOptions = {
        val1 : 'text1',
        val2 : 'text2'
    };

    $(".district").change(function(){
        console.log("selected");

        $(".province ul").empty();
        $(".province ul").append("<li data-value='19k' class='option'>19k</li>");
    });

    $.get('api',{ data: "province-name" },
        function(returnedData){
            provinceName = returnedData.split(";");
            console.log("provinceName:" + provinceName[1]);
        }
    );

    $.get('api',{ data: "province-id" },
            function(returnedData){
                provinceId = returnedData.split(";");
                console.log("provinceId: " + provinceId[1]);
            }
    );


});