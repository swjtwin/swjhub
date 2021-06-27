<?php
    // 숫자 format
   // echo number_format(124567896).'<br>';

    //줄바꿈은 이렇게합니다. ."<br>" => html 태그를 이용할수 있나봐
    echo "줄 \r\n바꿈"."<br>";
    echo "<b>".'이게되나?'.'<br>';

    // \ 을 넣어주면 ' 표현이 가능하다.
    echo 'We\'ll each have\\ a bowl of soup<br>';

    ////hero doc
    echo <<<HTMLBLOCK
            <html>
                <head><title>메뉴</title></head>
                <body bgcolor = "#fffed9">
                    <h1>저녁</h1>

                </body>
            </html> 
           HTMLBLOCK ;
 

//     $hereDoc = <<<EOL
//                 안녕하세요 ? <br>
//                 난 좋아.
//                 EOL;

//     echo $hereDoc;
//    printf("안녕핫ㅇ");

    // $price = 5;
    // $tax   = 0.075;
    // printf('요리가격은 $%05d', $price * (1 + $tax ));

    //대문자로 치환
    //echo strtoupper('bfgfgdf');

    $text = '신우진';
    $text_2 = '강성원';

    if ($text != '신우ㅁ진') {
        echo "안녕하세요 {$text} 입니다. 저는 {$text_2} 입니다.";
    }else{
            echo '이름이 잘못되었습니다.';
     };
    

    $str_cmp = strcmp('x123','x134');

    if($str_cmp > 0){
        echo 'x123승리';
    }elseif($str_cmp = 0){
        echo '무승부';
    }else{
        echo 'x134승리';
    };


    $age = 11;

    if( $age >= 13 && $age < 65 ) {
        echo $age.'살이군요';
    }

    echo "<br>";

    $i = 1;
    
    while( $i <= 10 ){
        echo $i."<br>" ;
        $i++;
    };


    for( $i = 1 ; $i <= 10 ; $i += 2){
        echo $i."<br>";
    };

?>