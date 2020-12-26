$(document).ready(function () {
    var aservice, adate, atime, aname, aemail, anumber, apincode, alandmark, aadd, aprice;
    var oservice, odate, otime, oname, oemail, onumber, opincode, olandmark, oadd, onoof, oprice, ototal;
    $("#astep1").click(function () {
        aservice = $("#aservicetype").val();
        adate = $("#atxtdate").val();
        atime = $("#aservicetime").val();
        if (aservice == -1) {
            $("#aservicetype").parent().addClass("has-error");
            return;
        }
        if (adate == "") {
            $("#atxtdate").parent().addClass("has-error");
            return;
        }
        if (atime == -1) {
            $("#aservicetime").parent().addClass("has-error");
            return;
        }
        aprice = getPrice(aservice);
        $('#aserviceli').removeClass('active').addClass('disabled');
        $('#acontactli').removeClass('disabled').addClass('active');
        $("#aservice").removeClass("active");
        $("#aorder").html(getServicename(aservice));
        $("#aplacedate").html(adate);
        $("#aprice").html("Rs. "+aprice);
        $("#atotal").html("Rs. "+aprice);
        $("#aplacetime").html(atime);
        $("#acontact").addClass("active");
    });
    $("#acontactform").submit(function () {
        aname = $("#atxtname").val();
        aemail = $("#atxtemail").val();
        anumber = $("#atxtnumber").val();
        apincode = $("#atxtpincode").val();
        alandmark = $("#atxtlandmark").val();
        aadd = $("#atxtadd").val();
        if (aname == "") {
            $("#atxtname").parent().addClass("has-error");
            return false;
        }
        if (aemail == "") {
            $("#atxtemail").parent().addClass("has-error");
            return false;
        }
        if (anumber == "") {
            $("#atxtnumber").parent().addClass("has-error");
            return false;
        }
        if (apincode == "") {
            $("#atxtpincode").parent().addClass("has-error");
            return false;
        }
        if (alandmark == "") {
            $("#atxtlandmark").parent().addClass("has-error");
            return false;
        }
        if (aadd == "") {
            $("#atxtadd").parent().addClass("has-error");
            return false;
        }
        $("#aplacename").html(aname);
        $("#aplaceemail").html(aemail);
        $("#aplacelandmark").html(alandmark);
        $("#aplacemobile").html(anumber);
        $("#aplacepincode").html(apincode);
        $("#aplaceaddress").html(aadd);
        $("#acplacedate").html(adate);
        $("#acplacetime").html(atime);
        $("#acprice").html("Rs. "+aprice);
        $("#actotal").html("Rs. "+aprice);
        $("#acorder").html(getServicename(aservice));
        $('#acontactli').removeClass('active').addClass('disabled');
        $('#aconfirmli').removeClass('disabled').addClass('active');
        $("#acontact").removeClass("active");
        $("#aconfirm").addClass("active");
        return false;
    });
    $("#astep3").click(function () {
        var values = {
            postname: aname,
            postemail: aemail,
            postlandmark: alandmark,
            postadd: aadd,
            postdate: adate,
            posttime: atime,
            postmobile: anumber,
            postservice: aservice
        };
        $.ajax({
            url: "confirm.php",
            type: "POST",
            datatype: "json",
            data: values,
            success: function (data) {
                alert(data);
            },
            error: function () {
                alert("Somthing goes wrong");
            }
        });
    });
    $("#ostep1").click(function () {
        oservice = $("#oservicetype").val();
        odate = $("#otxtdate").val();
        otime = $("#oservicetime").val();
        if (oservice == -1) {
            $("#oservicetype").parent().addClass("has-error");
            return;
        }
        if (odate == "") {
            $("#otxtdate").parent().addClass("has-error");
            return;
        }
        if (otime == -1) {
            $("#oservicetime").parent().addClass("has-error");
            return;
        }
        if (oservice == "14" || oservice == "15") {
            onoof = parseInt($('#onoofitem').val());
        }else{
            onoof = 1;
        }
        oprice = getPrice(oservice);
        ototal = oprice * onoof;
        $('#oserviceli').removeClass('active').addClass('disabled');
        $('#ocontactli').removeClass('disabled').addClass('active');
        $("#oservice").removeClass("active");
        $("#oorder").html(getServicename(oservice));
        $("#oplacedate").html(odate);
        $("#oplacetime").html(otime);
        if (oservice == "14" || oservice == "15") {
            $("#oplaceamount").html("Rs. "+oprice +" * "+ onoof + " = "+ototal);
            $("#oplacetotal").html("Rs. "+ototal);
        }else{
            $("#oplaceamount").html("Rs. "+oprice);
            $("#oplacetotal").html("Rs. "+ototal);
        }
        $("#ocontact").addClass("active");
    });
    $("#ocontactform").submit(function () {
        oname = $("#otxtname").val();
        oemail = $("#otxtemail").val();
        onumber = $("#otxtnumber").val();
        opincode = $("#otxtpincode").val();
        olandmark = $("#otxtlandmark").val();
        oadd = $("#otxtadd").val();
        if (oname == "") {
            $("#otxtname").parent().addClass("has-error");
            return false;
        }
        if (oemail == "") {
            $("#otxtemail").parent().addClass("has-error");
            return false;
        }
        if (onumber == "") {
            $("#otxtnumber").parent().addClass("has-error");
            return false;
        }
        if (opincode == "") {
            $("#otxtpincode").parent().addClass("has-error");
            return false;
        }
        if (olandmark == "") {
            $("#otxtlandmark").parent().addClass("has-error");
            return false;
        }
        if (oadd == "") {
            $("#otxtadd").parent().addClass("has-error");
            return false;
        }
        $("#oplacename").html(oname);
        $("#oplaceemail").html(oemail);
        $("#oplacelandmark").html(olandmark);
        $("#oplacemobile").html(onumber);
        $("#oplacepincode").html(opincode);
        $("#oplaceaddress").html(oadd);
        $("#ocplacedate").html(odate);
        $("#ocplacetime").html(otime);
        if (oservice == "14" || oservice == "15") {
            $("#ocplaceamount").html("Rs. "+oprice +" * "+ onoof + " = "+ototal);
            $("#ocplacetotal").html("Rs. "+ototal);
        }else{
            $("#ocplaceamount").html("Rs. "+oprice);
            $("#ocplacetotal").html("Rs. "+ototal);
        }
        $("#ocorder").html(getServicename(oservice));
        $('#ocontactli').removeClass('active').addClass('disabled');
        $('#oconfirmli').removeClass('disabled').addClass('active');
        $("#ocontact").removeClass("active");
        $("#oconfirm").addClass("active");
        return false;
    });
    $("#ostep3").click(function () {
        var values = {
            postname: oname,
            postemail: oemail,
            postlandmark: olandmark,
            postadd: oadd,
            postdate: odate,
            posttime: otime,
            postmobile: onumber,
            postservice: oservice,
            posttotal:ototal,
            postnoof:onoof
        };
        $.ajax({
            url: "confirm.php",
            type: "POST",
            datatype: "json",
            data: values,
            success: function (data) {
                alert(data);
            },
            error: function () {
                alert("Somthing goes wrong");
            }
        });
    });
    $('#oservicetype').change(function () {
        var temp = $("#oservicetype").val();
        if (temp == "14" || temp == "15") {
            $("#oservicetype").parent().removeClass('col-lg-8').addClass('col-lg-6');
            $('#onoof').addClass('col-lg-2');
            $('#onoof').html('<label for="onoofitem">No of Items</label>\n\
                <input id="onoofitem" class="form-control" type="number" value="1" min="1">');
        }else{
            $('#onoof').removeClass('col-lg-2');
            $("#oservicetype").parent().removeClass('col-lg-6').addClass('col-lg-8');
            $('#onoof').html('');
        }
    });
    $('#contactform').submit(function(){
        alert();
        return false;
    });
});

function getServicename(service) {
    switch (service) {
        case "21" :
            return "AMC Deep cleaning service (3 services)";
            break;
        case "22" :
            return "AMC Deep cleaning service (3 services)";
            break;
        case "23" :
            return "AMC Only Kitchen Cleaning (3 services)";
            break;
        case "11" :
            return "Deep cleaning service / 3800 Rs. (Upto 2BHK)";
            break;
        case "12" :
            return "Deep cleaning service / 4800 Rs. (3 BHK)";
            break;
        case "13" :
            return "Only Kitchen Cleaning /2500 Rs";
            break;
        case "14" :
            return "Only toilet cleaning /500 Rs Per toilet";
            break;
        case "15" :
            return "Sofa shampooing /250 per chair";
            break;
        case "16" :
            return "Carpet cleaning up to 100  per square feet  600 Rs.";
            break;
    }
}
function getPrice(service) {
    switch(service){
        case '11':return 3800;
        case '12':return 4800;
        case '13':return 2500;
        case '14':return 500;
        case '15':return 250;
        case '16':return 600;
        case '21':return 10000;
        case '22':return 1200;
        case '23':return 600;
    }
}