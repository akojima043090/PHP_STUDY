<?php
/**
 * 4. PHPで2019年のカレンダーを出力する。可能なら土曜は青、日曜は赤で表示すること。（6時間）
 *  9:55~10:22 10:33~10:55 11:03~11:55 13:22~14:00 18:25~19:10 21:25~
 */



?>
<!DOCTYPE html>
<html>
    <head>
        <title>カレンダー！</title>
        <style type="text/css">
            .normal-group {
                border-collapse: collapse;
                border: 0.8px solid #000000;
                float: left;
            }
            .normal-title {
                text-align: center;
                font-weight: bold;
                /*float: left;*/
            }
            table {
                border-collapse: collapse;
                /*border: 0.8px solid #1b4b72;*/
            }
            table th {
                background: #ebebeb;
                text-align: center;
            }
            table td {
                text-align: center;
            }
            table th + th{
                border-left: 0.8px solid #1b4b72;
                border-top: 0.8px solid #1b4b72;
                border-bottom: 0.8px solid #1b4b72;
            }
            table td + td {
                border-left: 0.8px solid #1b4b72;
                border-top: 0.8px solid #1b4b72;
                border-bottom: 0.8px solid #1b4b72;
            }

            table th:first-child {
                border-top: 0.8px solid #1b4b72;
                border-bottom: 0.8px solid #1b4b72;
            }
            table td:first-child {
                background-color: #e9605c;
                border-bottom: 0.8px solid #1b4b72;
            }
            table td:last-child {
                background-color: #4aa0e6;
            }
        </style>
    </head>

    <body>
        {{--カレンダー--}}
        <?php for($calendar = 1; $calendar <= 12; $calendar++): ?>
        <?php
            //現在年月
            $year = date('Y');
            $month = $calendar;
            //月末日
            $lastDay = date('j', mktime(0, 0, 0, $month + 1, 0, $year));;

            $days = array();
            $k = 0;
            //月末日までループ
            for($i = 1; $i <= $lastDay; $i++){
                //曜日取得
                $timestamp = mktime(0, 0, 0, $month, $i, $year);
                $week = date('w', $timestamp);

                //1日の場合
                if ($i === 1){
                    //1日目までを空白で埋めたい為、ループ
                    for ($j = 1; $j <= $week; $j++){
                        //空白で埋める
                        $days[$k]['day'] = '';
                        $k++;
                    }
            }

            //日付格納
            $days[$j]['day'] = $i;
            $j++;

            //月末日の場合 $lastDayはStringの為 「==」で比較
            if ($i == $lastDay){
            //月末日から残りを空白で埋める為ループ
            for ($l = 1; $l <= 6 - $week; $l++){
            //空白で埋める
            $days[$j]['day'] = '';
            $j++;
            }
            }
            }
        ?>
        <div class="normal-group clearfix">
            <div class="normal-title">
                {{--年月--}}
                <?php echo $year; ?>年<?php echo $calendar; ?>月
            </div>
            <table cellspacing="0">
                <tr>
                    <th>日</th>
                    <th>月</th>
                    <th>火</th>
                    <th>水</th>
                    <th>木</th>
                    <th>金</th>
                    <th>土</th>
                </tr>
                <tr>
                    <?php $count = 0; //週区切りの改行判別のため  ?>
                    <?php foreach ($days as $key => $value): ?>
                        <td>
                            <?php $count++;?>
                            <?php echo $value['day']; ?>
                        </td>
                        <?php if ($count === 7): ?>
                            </tr><tr>
                            <?php $count = 0; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tr>
            </table>
        </div>
        <?php endfor; ?>


    </body>
</html>


