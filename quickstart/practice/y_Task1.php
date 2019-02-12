<?php

/*
 *1. 3の倍数の時に「Hoge」、5の倍数の時に「Piyo」、7の倍数の時に「Fuga」、3と5の両方の倍数である場合に「HogePiyo」、3と5と7の全ての倍数である場合に「HogePiyoFuga」と出力する。（1時間）
 *   例）
 *   3
 *   Hoge
 *   5
 *   Piyo
 *   14
 *   Fuga
 *   15
 *   HogePiyo
 *   105
 *   HogePiyoFuga
 *
 * 15:07
 * 15:20
 */

    for ($i = 0; $i < 1000; $i++){
        echo $i . PHP_EOL;
        $voice = '';
        if ($i % 3 === 0){
            $voice = 'Hoge';
        }
        if ($i % 5 === 0){
            $voice = 'Piyo';
        }
        if ($i % 7 === 0){
            $voice = 'Fuga';
        }
        if ($i % 3 === 0 && $i % 5 === 0){
            $voice = 'HogePiyo';
        }
        if ($i % 3 === 0 && $i % 5 === 0 && $i % 7 === 0){
            $voice = 'HogePiyoFuga';
        }
        echo $voice . PHP_EOL;

        // Sample
//         $hoge = $i % 3;
//         $piyo = $i % 5;
//         $fuga = $i % 7;
        
//         if($hoge === 0 && $piyo === 0 && $fuga === 0){
//             echo 'Hoge';
//         }elseif($hoge === 0 && $piyo === 0){
//             echo 'Hoge';
//         }elseif($hoge === 0){
//             echo 'Hoge';
//         }elseif($piyo === 0){
//             echo 'Hoge';
//         }elseif($fuga === 0){
//             echo 'Hoge';
//         }
        
        
    }
