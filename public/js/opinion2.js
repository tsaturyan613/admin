$(document).ready(function(){

    let radio=$(".radio").val()
    let other=$(".other").val()
    other="off"
    radio="off"

    $(".other").click(function () {
        other="on"
        if($(".other").is(':checked')){
            $(".arr1").fadeIn()
            $(".count1").fadeIn()
            $(".error1").fadeOut()
        }
    })
    $(".radio").click(function () {
        radio="on"
        if($(".radio").is(':checked')){
            $(".arr1").fadeOut()
            $(".error1").fadeOut()
            localStorage.setItem('questionNo3', $(this).next().text());
            localStorage.getItem('questionNo3');
        }
    })



    $(".go-finish").click(function () {

        let question1=localStorage.getItem('question1');
        let question2=localStorage.getItem('question2');
        let questionNo3=localStorage.getItem('questionNo3');
        let questionNo4=localStorage.getItem('questionNo4');
        let questionNo5=localStorage.getItem('questionNo5');


        $.ajax({
            url: "/opinion2",
            type: "post",
            data: {

                question1:question1,
                question2:question2,
                questionNo3:questionNo3,
                questionNo4:questionNo4,
                questionNo5:questionNo5

            },
            success: function(data)
            {

            }
        });

        localStorage.removeItem("questionNo3");

        if ($('.subtitle1').children().next().attr("class")=="error1" && $('.subtitle2').children().next().attr("class")=="error2" && $('.subtitle3').children().next().attr("class")=="error3") {
            if (($(".other").is(':checked') || $(".radio").is(':checked'))  && $('.ar2').val()!=="" && $('.ar3').val()!=="") {
                window.location.href='/opinion/3'
            }
            if (other=="off" && radio=="off") {
                $(".error1").css("display","block")
                $(".error1").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
            }

            if ($('.ar2').val()=="") {
                $(".error2").css("display","block")
                $(".error2").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
            }
            if ($('.ar3').val()=="") {
                $(".error3").css("display","block")
                $(".error3").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
            }
        }

        else if ($('.subtitle1').children().next().attr("class")=="error1" && $('.subtitle2').children().next().attr("class")=="error2") {
            if (($(".other").is(':checked') || $(".radio").is(':checked'))  && $('.ar2').val()!=="") {
                window.location.href='/opinion/3'
            }
            if (other=="off" && radio=="off") {
                $(".error1").css("display","block")
                $(".error1").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
            }
            if ($('.ar2').val()=="") {
                $(".error2").css("display","block")
                $(".error2").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
            }
        }
        else if ($('.subtitle1').children().next().attr("class")=="error1" && $('.subtitle3').children().next().attr("class")=="error3") {
            if (($(".other").is(':checked') || $(".radio").is(':checked'))  && $('.ar3').val()!=="") {
                window.location.href='/opinion/3'
            }
            if (other=="off" && radio=="off") {
                $(".error1").css("display","block")
                $(".error1").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
            }
            if ($('.ar3').val()=="") {
                $(".error3").css("display","block")
                $(".error3").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
            }
        }

        else if ($('.subtitle2').children().next().attr("class")=="error2" && $('.subtitle3').children().next().attr("class")=="error3") {
            if ($('.ar2').val()!=="" && $('.ar3').val()!=="") {
                window.location.href='/opinion/3'
            }
            if ($('.ar2').val()=="") {
                $(".error2").css("display","block")
                $(".error2").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
            }
            if ($('.ar3').val()=="") {
                $(".error3").css("display","block")
                $(".error3").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
            }
        }

        else if ($('.subtitle1').children().next().attr("class")=="error1") {
            if (other=="on" || radio=='on' ) {
                window.location.href='/opinion/3'
            }
            if (other=="off" && radio=="off") {
                $(".error1").css("display","block")
                $(".error1").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
            }
        }

        else if ($('.subtitle2').children().next().attr("class")=="error2") {
            if ($('.ar2').val()!=="") {
                window.location.href='/opinion/3'
            }
            if ($('.ar2').val()=="") {
                $(".error2").css("display","block")
                $(".error2").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
            }
        }

        else if ($('.subtitle3').children().next().attr("class")=="error3") {
            if ($('.ar3').val()!=="") {
                window.location.href='/opinion/3'
            }
            if ($('.ar3').val()=="") {
                $(".error3").css("display","block")
                $(".error3").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
            }

        }
        else {
            window.location.href='/opinion/3'
        }
        if ($('.ar1').val()!=="") {
            $('.ar1').val()
            localStorage.setItem('questionNo3', $('.ar1').val());
            localStorage.getItem('questionNo3');
        }
        if ($('.ar1').val()=="") {
            localStorage.getItem('questionNo3');
        }

        if ($('.ar2').val()!=="") {
            $('.ar2').val()
            localStorage.setItem('questionNo4', $('.ar2').val());
            localStorage.getItem('questionNo4');
        }
        if ($('.ar2').val()=="") {
            localStorage.removeItem("questionNo4");
        }
        if ($('.ar3').val()!=="") {
            $('.ar3').val()
            localStorage.setItem('questionNo5', $('.ar3').val());
            localStorage.getItem('questionNo5');
        }
        if ($('.ar3').val()=="") {
            localStorage.removeItem("questionNo5");
        }
    })



    $("#arr1").keyup(function(){
        $('#count1').text(this.value.replace(/ /g,'').length+'/50');
    })
    $("#arr2").keyup(function(){
        $('#count2').text(this.value.replace(/ /g,'').length+'/50');
        if ($('.subtitle2').children().next().attr("class")=="error2") {
            $(".error2").fadeOut()
        }
    })
    $("#arr3").keyup(function(){
        $('#count3').text(this.value.replace(/ /g,'').length+'/50');
        if ($('.subtitle3').children().next().attr("class")=="error3") {
            $(".error3").fadeOut()
        }
    })
});
