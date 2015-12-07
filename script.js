//next time make the variables on each click event instead of hardcoding like I have on the top.  Will make calculator more dyanamic and code more dry.

$(document).ready(function(){
    var number = "";
    var number_two = "";
    var number_three = "";
    var operator = "";
    var operator_two = "";
    var operator_three = "";
    var totaldiv = $("#total");
    totaldiv.text("0");


    $("#numbers a").click(function(){
        number += $(this).text();
        totaldiv.text(number);
        $("#input_one").val(number);
        $("#input_three").val(number_two);
        $("#input_five").val(number_three);
        if (operator != ""){
            operator_three = operator_two;
            operator_two = operator;
        }
    });

    $("#operators a").not("#clear").click(function(){
        operator = $(this).text();
        $("#input_two").val(operator);
        $("#input_four").val(operator_two);
        number_three = number_two;
        number_two = number;
        number = "";
        totaldiv.text("0");
    });

    $("#clear").click(function(){
        number = "";
        number_two = "";
        number_three = "";
        operator = "";
        operator_two = "";
        operator_three = "";
        totaldiv.text("0");
        $("input").val("")
    });

});

