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

//    $.get('api',{ data: "province-name" },
//        function(returnedData){
//            provinceName = returnedData.split(";");
//            console.log("provinceName:" + provinceName[1]);
//        }
//    );
    
    $.ajax({
        url: "api",
        data: {
            data: "province"
        },
        method: "GET",
        dataType: "JSON"
    }).done(function(dataResponse) {
        provinceName = dataResponse.map(item => item.name);
        provinceId = dataResponse.map(item => item.id);
    });

    
    $("#register-province").change(function(){
        //console.log("Province: " + $(this).val());
        districtName = null;
        districtId = null;
        $.ajax({
            url: "api",
            data: {
                data: "district",
                provinceId: $(this).val()
            },
            method: "GET",
            dataType: "JSON"
        }).done(function(dataResponse) {
            console.log(dataResponse);
//            provinceName = dataResponse.map(item => item.name);
//            provinceId = dataResponse.map(item => item.id);
            districtName = dataResponse.map(item => item.name);
            districtId = dataResponse.map(item => item.id);
            
            updateDistrict();
        });
    });
    
    $("#register-district").change(function(){
        console.log("district: " + $(this).val());
        console.log("district changed");
        wardName = null;
        wardId = null;
        $.ajax({
            url: "api",
            data: {
                data: "ward",
                districtId: $(this).val()
            },
            method: "GET",
            dataType: "JSON"
        }).done(function(dataResponse) {
            console.log(dataResponse);
            wardName = dataResponse.map(item => item.name);
            wardId = dataResponse.map(item => item.id);
            
            updateWard();
        });
        
    });
    
    function getAjax(httpLink, setData = null, method = 'GET', dataType = 'JSON', callback = null){
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
            
            
//            if(status === 2)
//            {
//                updateDistrict();
//            }
            
            
           }
        };
        xhttp.open("GET", httpLink, true);
        xhttp.send();
        
    }
    
    function getAjax_ward(httpLink,setData){
        var array = new Object();
        var xhttp = new XMLHttpRequest();
        var txt;
        var status = 0;
        xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
                //console.log(this.responseText);
                txt = this.responseText;
                array = txt.split(";");
            
            if(setData === "ward-name")
            {
                wardName = txt.split(";");
                status += 1;
            }
            if(setData === "ward-id")
            {
                wardId = txt.split(";");
                status += 1;
                updateWard();
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
    
    function updateWard(){
        console.log("ward function");
        $arrLength = wardName.length;
        $('#register-ward').empty();
        $('#register-ward').append("<option value='0'>Chọn xa/phuong *</option>");
        
        for(var i = 0 ; i < $arrLength ; i++)
        {
            $("#register-ward").append("<option value='"+ wardId[i] +"'>" + wardName[i] + "</option>");
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