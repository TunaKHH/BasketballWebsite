<?php
session_start();
    require_once('connection.php');//引入資料庫連結設定檔
    if(isset($_POST['action'])&&!empty($_POST['action'])){
        switch ($_POST['action']){
            case 'get_news_detail':
                $id = $_POST['id'];//取得name值
                $sql = "SELECT * FROM news where id='".$id."'";//插入表格語法
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll();
                $json_arr = array(
                    'id' => $result[0]["id"],
                    'title' => $result[0]["title"],
                    'content' => $result[0]["content"],
                );
                echo json_encode($json_arr);
                break;
            case 'add_news':
                $title = $_POST['title'];
                $content = $_POST['content'];
                $date = date("Y-m-d");
                $sql = "INSERT INTO `news` (`id`, `title`, `content`, `date`) VALUES (NULL, '".$title."', '".$content."', '".$date."')";
                $stmt = $conn->prepare($sql);
                $result = $stmt->execute();//result紀錄成功與否
                if($result){
                    echo "<alert>新增成功，點擊確定並跳轉頁面</alert>";
                    echo "<meta http-equiv='refresh' content='0;url=./index.php'>";
                }else{
                    echo "新增失敗，請洽管理員";
                }
                break;
            case 'login':
                $email = $_POST['email'];
                $password = sha1($_POST['password']);
                $sql = "SELECT `password` FROM news where email='".$email."'";
                $stmt = $conn->prepare($sql);
                $boolean_login = $stmt->execute();
                if($boolean_login){
                    $result = $stmt->fetchAll();
                    if(preg_match($result[0][0],$password)){
                        $_SESSION['account'] = "admin";
                        echo "<meta http-equiv='refresh' content='0;url=./add_news.html'>";
                    }else{
                        echo "<alert>電子郵件或密碼錯誤，將為您重新導向</alert>";
                        echo "<meta http-equiv='refresh' content='0;url=./index.php'>";
                    }
                }else{
                    echo "<alert>系統發生問題，請洽系統管理員</alert>";
                    echo "<meta http-equiv='refresh' content='0;url=./index.php'>";
                }

                break;
        }
    }
?>