$("document").ready(function(){
    var provinceName;       //store province name from Get Ajax
    var provinceId;         //store province Id from Get Ajax
    var districtName;
    var districtId;
    var wardName;
    var wardId;

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

    
    $("#createads-province").change(function(){
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
            districtName = dataResponse.map(item => item.name);
            districtId = dataResponse.map(item => item.id);
            
            updateDistrict();
        });
    });
    
    $("#createads-district").change(function(){
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
        $('#createads-district').empty();
        $('#createads-district').append("<option value='0'>Chọn huyện/thị *</option>");
        
        for(var i = 0 ; i < $arrLength ; i++)
        {
            $("#createads-district").append("<option value='"+ districtId[i] +"'>" + districtName[i] + "</option>");
        }
    }
    
    function updateWard(){
        $arrLength = wardName.length;
        $('#createads-ward').empty();
        $('#createads-ward').append("<option value='0'>Chọn xã/phường  *</option>");
        
        for(var i = 0 ; i < $arrLength ; i++)
        {
            $("#createads-ward").append("<option value='"+ wardId[i] +"'>" + wardName[i] + "</option>");
        }
    }


});
