$(document).ready(function(){

    localStorage.clear();
    let radio=$(".radio").val()
    let radio2=$(".radio2").val()
    let yes=$(".yes").val()
    let no=$(".no").val()
    radio="off"
    radio2="off"
    no="off"
    yes="off"

    // $(".radio").click(function(){
    //     radio="on"
    //     $(".error1").fadeOut()
    //     localStorage.setItem('question1',$(this).next().text());
    //     localStorage.getItem('question1');
    // });
    // $(".radio2").click(function(){
    //     if($(".radio2").is(':checked')){
    //         $(".error2").fadeOut()
    //         localStorage.setItem('question2', $(this).next().text());
    //         localStorage.getItem('question2');
    //         radio2="on"
    //
    //     }
    // });
    // $(".no").click(function(){
    //     if($(".no").is(':checked')){
    //
    //         $(".error2").fadeOut()
    //         localStorage.setItem('question2', $(this).next().text());
    //         localStorage.getItem('question2');
    //         no="on"
    //     }
    // });
    //
    // $(".yes").click(function(){
    //     if($(".yes").is(':checked')){
    //
    //         $(".error2").fadeOut()
    //         localStorage.setItem('question2', $(this).next().text());
    //         localStorage.getItem('question2');
    //         yes="on"
    //     }
    // });

    $(".go").click(function(){
        $('.radio:radio:checked').each(function( k,v ) {
            console.log(k);
            // let questionId = $(v).attr('data-question-id');
            let answer = v.value;
            if (k === 0){
                localStorage.setItem('question1',v.value);
                localStorage.getItem('question1');
            }else{
                localStorage.setItem('question2',v.value);
                localStorage.getItem('question2');
            }

                if($(".radio").is(':checked')){
                    $(".error1").fadeOut()
                    radio="on"
                }
                if (answer === 'այո'){
                    window.location.href='/yes/opinion/';
                }else{
                    window.location.href='/opinion/2'
                }
        });

        // alert($(".radio").val());
        // if ($('.subtitle1').children().next().attr("class")=="error1" && $('.subtitle2').children().next().attr("class")=="error2" ) {
        //     alert($('.span').text());


            if ($(".radio").is(':checked') && $(".radio2").is(":checked")){
                window.location.href='/opinion/coming'
            }
            if(radio=="off"){
                $(".error1").css("display","block")
                $(".error1").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
            }
            if (yes=="off" && no=='off' && radio2=='off') {
                $(".error2").css("display","block")
                $(".error2").effect( "shake", { direction: "up", times: 2, distance: 1}, 300 );
            }

        // }

    })
});

