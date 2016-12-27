<?php
/**
 * Created by PhpStorm.
 * User: hzyuxianjun
 * Date: 2016/12/27
 * Time: 11:40
 */
namespace app1\controller\admin;
use app1\models\admin\Article;

class index{

    public function index(){
        echo "home";
    }
    public function page(){
        Article::first();
    }
    public function view($id){
        echo "$id";
    }



}