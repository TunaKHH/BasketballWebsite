<?php
 include_once("connection.php");
 session_start();
 if(!isset($_SESSION['account'])){
    //echo "<meta http-equiv='refresh' content='0;url=./'>";
    //exit();
 }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>管理消息頁面</title>
    <link href='./bootstrap-3.3.7-dist/css/bootstrap.min.css' rel='stylesheet' type='text/css' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <style>
        .modal-content {
            overflow:hidden;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border-radius: 6px;
        }
        .modal-header {
            background-color: #146faf;
        }
        .modal-header button, h3.modal-title {
            color:#fff !important;
            opacity:1;
        }
        .modal-header button {
            font-size:30px;
        }
    </style>
</head>

<body>
    <header>
        <h1 style="text-align: center">
            管理消息頁面
        </h1>
    </header>
    <div class="container">
        <button class="btn btn-primary" style="margin-bottom:10px" data-target="#modal_page" data-toggle="modal">
            新增消息
        </button>
        <button class="btn btn-link" style="margin-bottom:10px;float:right">
            <a href="./">登出</a>
        </button>
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th class="col-sm-1 text-center" >操作</th>
                    <th class="col-sm-8 text-center">消息標題</th>
                    <th class="col-sm-3 text-center">新增時間</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = 'SELECT * FROM news';
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $result = $stmt->fetchAll();
                    for($i = 0; $i<count($result); $i++){
                        echo '<tr id="'.$result[$i]["id"].'" >
                                <td class="text-center">
                                    <a class="btn btn-warning btn-xs glyphicon glyphicon-cog"></a>
                                    <a class="btn btn-danger btn-xs glyphicon glyphicon-remove"></a>
                                </td>
                                <td >
                                    '. $result[$i]["title"].'
                                </td>
                                <td class="text-center" style="text-overflow:ellipsis;overflow:hidden;white-space: nowrap;" align="left" class="col-sm-5">
                                    '. $result[$i]["date"].'
                                </td>
                            </tr>';
                    }
                ?>
            </tbody>
        </table>
        <div class="modal fade" id="modal_page" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h3 class="modal-title">發布公告</h3>
                    </div>
                    <div class="form-horizontal">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" id="anu_title" class="form-control" placeholder="請輸入標題">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <textarea id="anu_content" class="form-control" style="width:100%;height:350px;resize: none;" placeholder="請輸入內文"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" id="anu_cutoff" class="form-control" placeholder="請選擇截止時間 輸入範例為 2017-03-22" readonly="">
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <input type="button" id="setAnu" class="btn btn-primary" value="發布">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            var id = $(this).attr('id');
            // console.log(id);
            $.ajax({ //傳值給news.php
                url: './news.php',
                method: 'POST', //資料'傳遞'的送出方式
                data: { //送出的資料
                    action: 'get_list_news'
                },
                type: "POST", //資料'傳遞'的接收方式
                dataType: 'json', //資料內容型態
                success: function (data) {
                    $(".modal-title").text(data.title);
                    $(".modal-body").html(data.content);
                    $("#myModal").modal();
                }
            })
        });
    </script>
</body>

</html>