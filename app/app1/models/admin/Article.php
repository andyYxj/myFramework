<?php
/**
 * Created by PhpStorm.
 * User: hzyuxianjun
 * Date: 2016/12/27
 * Time: 13:34
 */
namespace app1\models\admin;
use pdo;

class Article{
    public static function first()
    {

/* * mysqli方式 2
 * 数据库地址，登陆账号，密码，数据库名称*/


    /*    $mysqli = new mysqli("localhost", "root", "123456", "bbc");
        $sql = "SELECT * FROM sysitem_item limit 0,10";
        $result = $mysqli->query($sql);
        $row = $result->fetch_array();
        echo '<h1>'.$row["title"].'</h1>';
        /* free result set */
        /*$result->free();*/

        /* close connection */
       /* $mysqli->close();*/


        /*3
    * 第一个参数是mysql:host,第二是dbname,第三个账户名，第四个密码
    */
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=bbc", "root", "123456");
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        $sql = "select * from sysitem_item limit 0,10";
        echo $sql . "<BR>";
        $pdo->query('set names utf8;');
        $result = $pdo->query($sql);
        $rows = $result->fetchAll();
        foreach ($rows as $row) {
            $title = $row[5];
            echo '<h1>'.$title.'</h1>';
        }

    }


}