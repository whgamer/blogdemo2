<?php


/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
//use yii\kartik\datetime\DateTimePicker;
use kartik\datetime\DateTimePicker;




$this->title = '填写调查表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-diaocha">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>请填写以下调查表信息 :</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-diaocha']); ?>

            <?= $form->field($model, 'id')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'renyuan') ?>


            <?= $form->field($model, 'rq')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => ''],
                'pluginOptions' => [
                    'autoclose' => true,
                    'todayHighlight' => true,
                    'format' => 'yyyy-mm-dd',
                ]
            ]);
            ?>
            <?= $form->field($model, 'grade') ?>
            <?= $form->field($model, 'level') ?>
            <?= $form->field($model, 'beizhu')->textArea(['rows' => 6]) ?>
            <div class="form-group">
                <?= Html::submitButton('保存', ['class' => 'btn btn-primary', 'name' => 'diaocha-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
