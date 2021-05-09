<?php
// タイムゾーンを設定
date_default_timezone_set('Asia/Tokyo');

// 前月・次月リンクが押された場合は、GETパラメーターから年月を取得
if(isset($_GET['ym'])){
    $ym = $_GET['ym'];
} else {
    //今月の年月を表示
    $ym = date('Y-m');
}

// タイムスタンプを作成し、フォーマットをチェックする
$timestamp = strtotime($ym . '-01');
if($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}

// 今日の日付　フォーマット　例）2018-07-3
$today = date('Y-m-j');

// カレンダーのタイトルを作成　例）2017年7月
$html_title = date('Y年n月', $timestamp);

// 前月、次月の年月を取得
$prev = date('Y-m', strtotime('-1 month', $timestamp));
$next = date('Y-m', strtotime('+1 month', $timestamp));

// 該当月の日数を取得
$day_count = date('t', $timestamp);

// 1日が何曜日か　0:日 1:月
$youbi = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));

// カレンダー作成の準備
$weeks = [];
$week = '';

// 第1週目：空のセルの追加
$week .= str_repeat('<td></td>', $youbi);

for($day = 1; $dai <= $day_count; $day++, $youbi++) {
    $date = $ym . '-' . $day;
    if($today == $date) {
        $week .= '<td class = "today">' . $day;
    } else {
        $week .= '<td>' . $day;
    }
}
$week .= '</td>';

// 週終わり、または、月終わりの場合
if($youbi % 7 == 6 || $day == $day_count) {
    if($day == $day_count) {
        // 月の最終日の場合、空セルを追加
        $week .= str_repeat('<td></td>', 6 - ($youbi % 7));
    }
    // weeks配列にtrと$weekを追加する
    $week[] = '<tr>' . $week . '</tr>';
    // weekをリセット
    $week = '';
}

 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>カレンダー</title>
    <style>
        .container {
            margin-top: 60px;
            margin-bottom: 60px;
        }
        .bordered, table td, table th {
            border-collapse: collapse;
            border: 1px solid gray;
            margin-left: auto;
            margin-right: auto;
        }
        h3 {
            margin-bottom: 30px;
            text-align: center;
        }
        th {
            height: 50px;
        }
        td {
            height: 90px;
            width: 100px;
            text-align: left;  
        }
        .today {
            background: yellow;
        }
        th:nth-of-type(1), td:nth-of-type(1) {
            color: red;
        }
        th:nth-of-type(7),td:nth-of-type(7) {
            color: blue;
        }
    </style>
</head>
<body>
    <div class = "container">
        <h3>2021年5月</h3>
        <table class = "bordered">
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
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
            </tr>
            <tr>
                <td>8</td>
                <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
            </tr>
            <tr>
                <td>15</td>
                <td>16</td>
                <td>17</td>
                <td>18</td>
                <td>19</td>
                <td>20</td>
                <td>21</td>
            </tr>
            <tr>
                <td>22</td>
                <td>23</td>
                <td>24</td>
                <td>25</td>
                <td>26</td>
                <td>27</td>
                <td>28</td>
            </tr>
            <tr>
                <td>29</td>
                <td>30</td>
                <td>31</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
</body>
</html>