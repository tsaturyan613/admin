$(document).ready(function(){
    let checkbox=$(".checkbox").val()
    let other=$(".other").val()
    let radio=$(".radio").val()
    checkbox="off"
    other="off"
    radio="off"


    $(".checkbox").click(function(){
        checkbox="on"
        $(".error1").fadeOut()
        $('.other').removeAttr('checked');
        $(".other-input").css("display", "none");
    })

    $(".other").click(function () {
        other="on"
        if ($(".other").is(':checked')) {
            $(".arr1").fadeIn()
            $(".count1").fadeIn()
            $(".error1").fadeOut()
        }
        else{
            $(".arr1").fadeOut()
        }
        $('input:checkbox').removeAttr('checked');
        $(this).val('check all');
    })

    $(".radio").click(function(){
        $(".error2").fadeOut()
        radio="on"
        localStorage.setItem('questionYes2', $(this).next().text());
        localStorage.getItem('questionYes2');
    })


    $(".go").click(function(){


        if ($(".checkbox").is(':checked')) {
            let arr = [];
            arr.push($('.checkbox:checked').next().text());
            localStorage.setItem('questionYes1', arr);
            localStorage.getItem('questionYes1');
        } else {
            localStorage.setItem('questionYes1', $("#arr1").val());
            localStorage.getItem('questionYes1');
        }

        if ($('.subtitle1').children().next().attr("class")=="error1" && $('.subtitle2').children().next().attr("class")=="error2" ) {
            if ((($(".checkbox").is(':checked')) || ($(".other").is(":checked")))  && $('.radio').is(':checked') || $('.other').is(':checked')) {
                window.location.href='/yes/opinion/2'
            }
            if(checkbox=="off" && other=="off" ){
                $(".error1").css("display","block")
                $(".error1").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
            }
            if(radio=="off" ){
                $(".error2").css("display","block")
                $(".error2").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
            }
        }
    })
    $("#arr1").keyup(function(){
        $('.count1').text(this.value.replace(/ /g,'').length+'/50');
    })
})
