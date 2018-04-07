$("document").ready(function(){
    var provinceName;       //store province name from Get Ajax
    var provinceId;         //store province Id from Get Ajax
    var districtName;
    var districtId;
    var wardName;
    var wardId;

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

    
    $("#register-province").change(function(){
        //console.log("Province: " + $(this).val());
        districtName = null;
        districtId = null;
        getAjax("api?data=district-name&provinceId="+$(this).val(),'district-name');
        getAjax("api?data=district-id&provinceId="+$(this).val(),'district-id');
    });
    
    function getAjax(httpLink,setData){
        var array = new Object();
        var xhttp = new XMLHttpRequest();
        var txt;
        var status = 0;
        xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
                //console.log(this.responseText);
                txt = this.responseText;
                array = txt.split(";");
            if(setData === "district-name")
            {
                districtName = txt.split(";");
                status += 1;
            }
            
            if(setData === "district-id")
            {
                districtId = txt.split(";");
                updateDistrict();
                status += 1;
            }
            if(status === 2)
            {
                updateDistrict();
            }
           }
        };
        xhttp.open("GET", httpLink, true);
        xhttp.send();
        
    }
    
    function updateDistrict(){
        $arrLength = districtName.length;
        $('#register-district').empty();
        $('#register-district').append("<option value='0'>Chọn huyện/thị *</option>");
        
        for(var i = 0 ; i < $arrLength ; i++)
        {
            $("#register-district").append("<option value='"+ districtId[i] +"'>" + districtName[i] + "</option>");
        }
    }


});

//function toGet(id){
//
//    var xhttp = new XMLHttpRequest();
//    xhttp.onreadystatechange = function() {
//      if (this.readyState == 4 && this.status == 200) {
//       console.log(this.responseText);
//      }
//    };
//    xhttp.open("GET", "api?data=district-name&provinceId="+id, true);
//    xhttp.send();
//}