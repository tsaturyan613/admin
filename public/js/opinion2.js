$(document).ready(function () {

    let radio = $(".radio").val()
    let other = $(".other").val()
    other     = "off"
    radio     = "off"

    $(".other").click(function () {
        other = "on"
        if ($(".other").is(':checked')) {
            $(".arr1").fadeIn()
            $(".count1").fadeIn()
            $(".error1").fadeOut()
        }
    })
    // $(".radio").click(function () {
    //     radio="on"
    //     if($(".radio").is(':checked')){
    //         // $(".arr1").fadeOut()
    //         $(".error1").fadeOut()
    //         localStorage.setItem('questionNo3', $(this).next().text());
    //         localStorage.getItem('questionNo3');
    //     }
    // })

    $(".radio1").click(function () {
        radio = "on"
        if ($(".radio1").is(':checked')) {
            let arr = [];
            arr.push($('.radio1:checked').next().text());
            $(".error1").fadeOut()
            localStorage.setItem('questionNo3', arr);
            localStorage.getItem('questionNo3');
        }
    })


    $('.other:button').toggle(function () {
        $('input:checkbox').attr('checked', 'checked');
        $(this).val('uncheck all');
    }, function () {

    })


    $(".other").click(function () {
        other = 'on';
        $('input:checkbox').removeAttr('checked');
        $(this).val('check all');
        if ($(".other").is(":checked")) {
            // console.log("Checkbox is checked.");
        } else {
            alert("Sdsadsadsad");
        }

    });

    $(".radio1").click(function () {
        $('.other').removeAttr('checked');
        $(".other-input").css("display", "none");
    });

    $(".go-finish").click(function () {

        if ($(".radio1").is(':checked')) {
            let arr = [];
            arr.push($('.radio1:checked').next().text());
            $(".error1").fadeOut()
            localStorage.setItem('questionNo3', arr);
            localStorage.getItem('questionNo3');
        } else {
            localStorage.setItem('questionNo3', $("#arr1").val());
            localStorage.getItem('questionNo3');
        }

        $('.radio:radio:checked').each(function (k, v) {
            if (k === 0) {
                localStorage.setItem('questionNo4', v.value);
                localStorage.getItem('questionNo4');
            } else {
                localStorage.setItem('questionNo5', v.value);
                localStorage.getItem('questionNo5');
            }
        });
        // console.log($(".radio-form"));
        let element1 = $(".radio-form").first();
        let element2 = $(".radio-form:eq(1)");
        let p2 = $(".radio-form:eq(1)").find(' > p > input:checked');


        let p1        = $(".radio-form").first().find(' > p > input:checked');

        // console.log(p2);

        if (p1.length) {
            let error1 = $(element1).parent(".parent").prev(".subtitle2").find(".error2")
            error1.css("display", "none");
        } else {
            let error1 = $(element1).parent(".parent").prev(".subtitle2").find(".error2")
            error1.css("display", "block");
        }

        if (p2.length) {

            let error2 = $(element2).parent(".parent").prev(".subtitle2").find(".error2")
            error2.css("display", "none");

        } else {

            let error2 = $(element2).parent(".parent").prev(".subtitle2").find(".error2")
            error2.css("display", "block");
            console.log( $(p2).parent(".parent").prev(".error2"));
        }

        let question1   = localStorage.getItem('question1');
        let question2   = localStorage.getItem('question2');
        let questionNo3 = localStorage.getItem('questionNo3');
        let questionNo4 = localStorage.getItem('questionNo4');
        let questionNo5 = localStorage.getItem('questionNo5');

        //
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

        if ($('.radio1').is(':checked') === false && $("#arr1").val() === "") {
            $(".error1").css("display", "block");
        }

        if($(".other").is(':checked') || $('.radio1').is(':checked') && p1.is(":checked") && p2.is(":checked")){
            window.location.href='/opinion/3'
        }



        //     if ($('.subtitle1').children().next().attr("class")=="error1" && $('.subtitle2').children().next().attr("class")=="error2" && $('.subtitle3').children().next().attr("class")=="error3") {
        //         if (($(".other").is(':checked') || $(".radio").is(':checked'))  && $('.ar2').val()!=="" && $('.ar3').val()!=="") {
        //             window.location.href='/opinion/3'
        //         }

        //         if (other=="off" && radio=="off") {
        //             $(".error1").css("display","block")
        //             $(".error1").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
        //         }
        //
        //         if ($('.ar2').val()=="") {
        //             $(".error2").css("display","block")
        //             $(".error2").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
        //         }
        //         if ($('.ar3').val()=="") {
        //             $(".error3").css("display","block")
        //             $(".error3").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
        //         }
        //     }
        //
        //     else if ($('.subtitle1').children().next().attr("class")=="error1" && $('.subtitle2').children().next().attr("class")=="error2") {
        //         if (($(".other").is(':checked') || $(".radio").is(':checked'))  && $('.ar2').val()!=="") {
        //             window.location.href='/opinion/3'
        //         }
        //         if (other=="off" && radio=="off") {
        //             $(".error1").css("display","block")
        //             $(".error1").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
        //         }
        //         if ($('.ar2').val()=="") {
        //             $(".error2").css("display","block")
        //             $(".error2").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
        //         }
        //     }
        //     else if ($('.subtitle1').children().next().attr("class")=="error1" && $('.subtitle3').children().next().attr("class")=="error3") {
        //         if (($(".other").is(':checked') || $(".radio").is(':checked'))  && $('.ar3').val()!=="") {
        //             window.location.href='/opinion/3'
        //         }
        //         if (other=="off" && radio=="off") {
        //             $(".error1").css("display","block")
        //             $(".error1").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
        //         }
        //         if ($('.ar3').val()=="") {
        //             $(".error3").css("display","block")
        //             $(".error3").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
        //         }
        //     }
        //
        //     else if ($('.subtitle2').children().next().attr("class")=="error2" && $('.subtitle3').children().next().attr("class")=="error3") {
        //         if ($('.ar2').val()!=="" && $('.ar3').val()!=="") {
        //             window.location.href='/opinion/3'
        //         }
        //         if ($('.ar2').val()=="") {
        //             $(".error2").css("display","block")
        //             $(".error2").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
        //         }
        //         if ($('.ar3').val()=="") {
        //             $(".error3").css("display","block")
        //             $(".error3").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
        //         }
        //     }
        //
        //     else if ($('.subtitle1').children().next().attr("class")=="error1") {
        //         if (other=="on" || radio=='on' ) {
        //             window.location.href='/opinion/3'
        //         }
        //         if (other=="off" && radio=="off") {
        //             $(".error1").css("display","block")
        //             $(".error1").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
        //         }
        //     }
        //
        //     else if ($('.subtitle2').children().next().attr("class")=="error2") {
        //         if ($('.ar2').val()!=="") {
        //             window.location.href='/opinion/3'
        //         }
        //         if ($('.ar2').val()=="") {
        //             $(".error2").css("display","block")
        //             $(".error2").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
        //         }
        //     }
        //
        //     else if ($('.subtitle3').children().next().attr("class")=="error3") {
        //         if ($('.ar3').val()!=="") {
        //             window.location.href='/opinion/3'
        //         }
        //         if ($('.ar3').val()=="") {
        //             $(".error3").css("display","block")
        //             $(".error3").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
        //         }
        //
        //     }
        //     else {
        //         window.location.href='/opinion/3'
        //     }
        //
        //     if ($('.ar1').val()!=="") {
        //         $('.ar1').val()
        //         localStorage.setItem('questionNo3', $('.ar1').val());
        //         localStorage.getItem('questionNo3');
        //     }
        //     if ($('.ar1').val()=="") {
        //         localStorage.getItem('questionNo3');
        //     }
        //
        //     if ($('.ar2').val()!=="") {
        //         $('.ar2').val()
        //         localStorage.setItem('questionNo4', $('.ar2').val());
        //         localStorage.getItem('questionNo4');
        //     }
        //     if ($('.ar2').val()=="") {
        //         localStorage.removeItem("questionNo4");
        //     }
        //     if ($('.ar3').val()!=="") {
        //         $('.ar3').val()
        //         localStorage.setItem('questionNo5', $('.ar3').val());
        //         localStorage.getItem('questionNo5');
        //     }
        //     if ($('.ar3').val()=="") {
        //         localStorage.removeItem("questionNo5");
        //     }
        // })
        //
        //
        //
        // $("#arr1").keyup(function(){
        //     $('#count1').text(this.value.replace(/ /g,'').length+'/50');
        // })
        // $("#arr2").keyup(function(){
        //     $('#count2').text(this.value.replace(/ /g,'').length+'/50');
        //     if ($('.subtitle2').children().next().attr("class")=="error2") {
        //         $(".error2").fadeOut()
        //     }
        // })
        // $("#arr3").keyup(function(){
        //     $('#count3').text(this.value.replace(/ /g,'').length+'/50');
        //     if ($('.subtitle3').children().next().attr("class")=="error3") {
        //         $(".error3").fadeOut()
        //     }
    })
});
