<?php
/**
 * Created by PhpStorm.
 * User: hzyuxianjun
 * Date: 2016/12/27
 * Time: 11:11
 */
use NoahBuscher\Macaw\Macaw;
/*
Macaw::get('/',function(){
    echo "首页";
});*/

Macaw::get('/fuck',function(){
    echo "ok11";
});

Macaw::get('/','app1\controller\admin\index@index');

Macaw::get('/page','app1\controller\admin\index@page');
Macaw::get('/view(:id)','app1\controller\admin\index@view');





Macaw::dispatch();
