<?php
/**
 * Created by PhpStorm.
 * User: kojimaakihiro
 * Date: 2019-01-31
 * Time: 15:36
 */

/**
 * 3. 西暦4桁から干支を算出するプログラムを作成する。（3時間）
 * 15:36 15:50　15:58 16:06
 */

$etos = [
    '申' => 0,
    '酉'=> 1,
    '戌'=> 2,
    '亥'=> 3,
    '子'=> 4,
    '丑'=> 5,
    '寅'=> 6,
    '卯'=> 7,
    '辰'=> 8,
    '巳'=> 9,
    '午'=> 10,
    '未' => 11
    ];

$stdin = trim(fgets(STDIN));

$calc = $stdin % 12;
//echo $calc . PHP_EOL;

$eto = array_search($calc, $etos);
echo $eto . PHP_EOL;
