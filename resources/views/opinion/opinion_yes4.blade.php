@extends('layouts.main')

@section('title', 'Colibrilab')

@section('content')

    <h3 class="h3">Թողեք Ձեր կարծիքը</h3>
    <div class="page">
        <!-- <div><h5 class="subtitle" style="position: relative; display: block;">9․ Գնահատեք դասընթացի արդյունքում ստացած Ձեր գիտելիքները 1-5 բալային սանդղակով <span>*</span> ։<span class="error1">Պարտադիր է լրացման</span></h5></div> -->
    <?php
    //////////////////////////////////////////////////////////////////////////TITLE9////////////////////////////////////////////////////////////////////////////////////////
    if ($questions[8]['checked']=="on") {
        echo "<h5 class='subtitle subtitle1'  style='position: relative; display: block;'>".utf8_decode($questions[8]['question'])."<span> *</span> ։<span class='error1'>Պարտադիր է լրացման</span></h5>";
    }else{
        echo "<h5 class='subtitle subtitle1'  style='position: relative; display: block;'>".utf8_decode($questions[8]['question'])."։</h5>";
    }
    ?>
    <?php
    ///////////////////////////////////////////////////////////////////////ANSWER9////////////////////////////////////////////////////////////////////////////////////////////////

    foreach ($answer_8 as  $val) {
        if ($val['type']=='input') {
            echo "<input type=".$val['type']." placeholder='Մուտքագրեք տեքստը' class='arr form-control shadow-none' style='border:none;border-bottom: 3px solid #E5E5E6;' id=".$val['id']." name='inp'>";
        }
        else{
            if ($val['type']=='radio') {
                echo "<p><input type=".$val['type']." class='radio' id=".$val['id']." name='inp'><label for=".$val['id']."><span class=span>".$val['patasxan']."</span></label></p>";
            }else{
                echo "<p><input type=".$val['type']." class='checkbox' id=".$val['id']." name='inp'><label for=".$val['id']."><span class=span>".$val['patasxan']."</span></label></p>";
            }


        }
    }
    ?>


    <!-- <h5 class="subtitle" style="margin-top: 67px;  margin-bottom: 40px;">10․ Ի՞նչ առաջարկներ ունեք՝ կայքի և ուսումնական կենտրոնի հետ կապված։</h5> -->
    <?php
    //////////////////////////////////////////////////////////////////////////TITLE10////////////////////////////////////////////////////////////////////////////////////////
    if ($questions[9]['checked']=="on") {
        echo "<h5 class='subtitle subtitle2'  style='margin-top: 67px; position: relative; display: block;'>".utf8_decode($questions[9]['question'])."<span> *</span> ։<span class='error2'>Պարտադիր է լրացման</span></h5>";
    }else{
        echo "<h5 class='subtitle subtitle2'  style='margin-top: 67px; position: relative; display: block;'>".utf8_decode($questions[9]['question'])."։</h5>";
    }
    ?>

    <?php
    ///////////////////////////////////////////////////////////////////////ANSWER10////////////////////////////////////////////////////////////////////////////////////////////////

    foreach ($answer_9 as  $val) {
        if ($val['type']=='input') {
            echo "<div><input  type=".$val['type']." placeholder='Մուտքագրեք տեքստը' class='arr form-control shadow-none' style='margin-bottom: 60px; border:none;border-bottom: 3px solid #E5E5E6; color:black;' id=".$val['id']." name='inp'>

</div>";
        }
        else{
            if ($val['type']=='radio') {
                echo "<p><input type=".$val['type']." class='radio' id=".$val['id']." name='inp'><label for=".$val['id']."><span class=span>".$val['patasxan']."</span></label></p>";
            }else{
                echo "<p><input type=".$val['type']." class='checkbox' id=".$val['id']." name='inp'><label for=".$val['id']."><span class=span>".$val['patasxan']."</span></label></p>";
            }
        }
    }
    ?>
    <!-- <div class=" letterscount" style="margin-bottom: 160px;"><input class="arr form-control shadow-none " id="arr1" placeholder="Մուտքագրեք տեքստը" maxlength="200"></input> <span class="count" id="count1"><span>0</span>/200</span></div> -->



        <div class="next-opinion"><button class="btn-primary go "> <a class="a" >ԱՎԱՐՏԵԼ</a></button></div>
        <div class="previous" style="position: relative;" ><a style="position: absolute; left: 0; top: -29px; text-decoration: none;" href="/opinion/yes/3" ><svg style="margin-bottom: 3px; " xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-left" viewBox="0 0 16 16">
                    <path d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>
                </svg>ՆԱԽՈՐԴ ԷՋ</div></a>
{{--        <div class="numbers">--}}
{{--            <span>1</span>--}}
{{--            <span>2</span>--}}
{{--            <span>3</span>--}}
{{--            <span>4</span>--}}
{{--            <span class="span1">5</span>--}}

{{--        </div>--}}
    </div>
    <script src="{{asset('js/opinion_yes4.js')}}"></script>

@endsection
