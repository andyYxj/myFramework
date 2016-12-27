<?php
/**
 * Created by PhpStorm.
 * User: hzyuxianjun
 * Date: 2016/12/27
 * Time: 11:40
 */
namespace app1\controller\admin;

class index{

    public function index(){
        echo "home";
    }
    public function page(){
        echo "page";
    }
    public function view($id){
        echo "$id";
    }



}