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
        /* .today {
            background: yellow;
        } */
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
                <td class = "today">9</td>
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