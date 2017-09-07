<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title; //面包屑 代码
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>
    <p>这是关于页面<br />modi by zyy 2017年8月29日 修改为自己可以用的小项目 学习 yii框架</p>
    <code><?= __FILE__ ?></code>
</div>
