<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       // 1～10までの整数を順番に出力する
       for ($i = 1; $i <= 10; $i++) {
           echo $i . '<br>';
       }
       ?>
   </p>
   <!-- localhost:8888/php-basic/for.phpで確認 -->
   <!-- 繰り返し処理を行うときは、「条件式がFALSEを返す可能性はあるか」を必ず確認するようにしましょう。 -->
   <!-- 万が一、無限ループが発生する繰り返し処理をブラウザで実行してしまった場合は、すぐにタブを閉じるか、読み込み停止ボタンを押してください。 -->
   <p>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            // 変数$numに1～20までのランダムな整数を代入する
            $num = mt_rand(1, 20);

            echo "{$i}回目の結果は{$num}です。<br>";

            // 変数$numの値が20であれば、break文で繰り返し処理を強制終了する
            if ($num === 20) {
                echo '20が出たので繰り返し処理を強制終了します。';
                break;
            }
        }
        ?>
    </p>

    <p>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            // カウンタ変数$iの値が奇数（2で割った余りが1）であれば、値を出力せずにcontinue文で次のループに進む
            if ($i % 2 === 1) {
                continue;
            }

            echo $i . '<br>';
        }
        ?>
    </p>
    
</body>

</html>