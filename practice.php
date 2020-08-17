<?php echo 'hello! php!'; 
echo PHP_EOL;
//課題１
    $a = 3;
    $b = 7;
    "<br>";
    echo $a + $b;
    echo PHP_EOL;
//課題２
    $array_month = array("１月","2月","３月","４月","５月","６月","７月","８月","９月","１０月","１１月","１２月");
    echo $array_month[7];
    echo PHP_EOL;
//課題３
    $hello = 'hello!! ';
    $name = 'takahashi';
    $would = '‘s World!';
    echo $hello.$name.$would;
    
    //改行する
    echo PHP_EOL;
    
//課題４
    $tech_boost = 'tech';
    $tech_boost.='_boost';
    echo $tech_boost;
    echo PHP_EOL;

//課題５

 $calendar_2018 = array(
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
);

// 12月を表示する
    echo $calendar_2018['December'];
    echo PHP_EOL;
    
//◎数字から始まる変数名は付けられないよ！（2018_calender →　calender_2018へ）
//◎呼び出すキーを指定するときは　＄配列名['〇〇']　のように「$」を忘れないことと、「''」シングルクォーテーションで囲むこと！
//◎カンマ忘れ、文字列を囲む""、配列を作るarray、
?>