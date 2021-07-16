
$(document).ready(function(){
    let radio=$(".radio").val()
    radio="off"
    $(".radio").click(function () {
        radio="on"
        $(".error1").fadeOut()
        localStorage.setItem('questionYes9', $(this).next().text());
        localStorage.getItem('questionYes9');
    })


    $(".go").click(function(){


        let question1=localStorage.getItem('question1');
        let question2=localStorage.getItem('question2');
        let questionYes1=localStorage.getItem('questionYes1');
        let questionYes2=localStorage.getItem('questionYes2');
        let questionYes3=localStorage.getItem('questionYes3');
        let teachers=localStorage.getItem('teachers');
        let questionYes7=localStorage.getItem('questionYes7');
        let questionYes8=localStorage.getItem('questionYes8');
        let questionYes9=localStorage.getItem('questionYes9');
        let questionYes10=localStorage.getItem('questionYes10');

        $.ajax({
            url: "/questionyes",
            type: "post",
            data: { question1:question1,
                question2:question2,
                questionYes1:questionYes1,
                questionYes2:questionYes2,
                questionYes3:questionYes3,
                teachers:teachers,
                questionYes7:questionYes7,
                questionYes8:questionYes8,
                questionYes9:questionYes9,
                questionYes10:questionYes10
            },
            success: function(data)
            {

            }
        });
        if ($('.subtitle1').children().next().attr("class")=="error1" && $('.subtitle2').children().next().attr("class")=="error2" ) {
            if (($(".radio").is(':checked'))  &&  $('.arr').val()!=="") {
                $(".error2").fadeOut()
                $('.arr').val()
                localStorage.setItem('questionYes10', $('.arr').val());
                localStorage.getItem('questionYes10');
                window.location.href='/opinion/end'
            }
            if(radio=="off"  ){
                $(".error1").css("display","block")
                $(".error1").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
            }
            if($('.arr').val()=="" ){
                $(".error2").css("display","block")
                $(".error2").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
            }
        }
        else if ($('.subtitle1').children().next().attr("class")=="error1") {
            if ($(".radio").is(':checked')) {
                window.location.href='/opinion/end'
            }
            else if (radio=="off") {
                $(".error1").css("display","block")
                $(".error1").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
            }
            if ($('.arr').val()=="") {
                localStorage.removeItem("questionYes10");
            }
            localStorage.setItem('questionYes10', $('.arr').val());
            localStorage.getItem('questionYes10');
        }
        else if ($('.subtitle2').children().next().attr("class")=="error2") {
            if ($('.arr').val()!=="") {
                localStorage.setItem('questionYes10', $('.arr').val());
                localStorage.getItem('questionYes10');
                $(".error2").fadeOut()
                window.location.href='/opinion/end'
            }
            else if ($('.arr').val()=="") {

                $(".error2").css("display","block")
                $(".error2").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
            }
        }
    })
    $("#arr1").keyup(function(){
        $(".error2").fadeOut()

        $('#count1').text(this.value.replace(/ /g,'').length+'/200');
    })

});
