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
            //console.log(dataResponse);
            districtName = dataResponse.map(item => item.name);
            districtId = dataResponse.map(item => item.id);
            
            updateDistrict();
        });
    });
    
    $("#register-district").change(function(){
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
            //console.log(dataResponse);
            wardName = dataResponse.map(item => item.name);
            wardId = dataResponse.map(item => item.id);
            
            updateWard();
        });
        
    });
   
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
        $arrLength = wardName.length;
        $('#register-ward').empty();
        $('#register-ward').append("<option value='0'>Chọn xã/phường  *</option>");
        
        for(var i = 0 ; i < $arrLength ; i++)
        {
            $("#register-ward").append("<option value='"+ wardId[i] +"'>" + wardName[i] + "</option>");
        }
    }


});
