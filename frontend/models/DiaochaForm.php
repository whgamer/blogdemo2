<?php


namespace frontend\models;

use yii\base\Model;
use common\models\Diaocha;

/**
 * diaocha form
 */
class DiaochaForm extends Model
{
    public $id;
    public $renyuan;
    public $rq;
    public $grade;
    public $level;
    public $beizhu;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['id', 'required'],
//            ['id', 'unique'],
            ['renyuan', 'filter', 'filter' => 'trim'],
            ['renyuan', 'required'],
//            ['grade', 'interger'],


            ];
    }
    //添加显示 控制  add  by  zyy 2017年9月1日
    public function attributeLabels()
    {
        return [

            'id' => 'ID',
            'renyuan' => '人员',
            'rq' => '日期',
            'level' => '等级',
            'beizhu' => '备注',
            'grade' => '分数',

        ];

    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function diaocha()
    {
        if (!$this->validate()) {
            Yii::$app->session->setFlash('failed', '提交数据错误diaocha-》validate.');
            return null;
    }

        $diaocha = new Diaocha();
        $diaocha->id = $this->id;
        $diaocha->renyuan = $this->renyuan;
//        $diaocha->rq = $this->rq;//  add by zyy 2017年9月1日
//        $diaocha->grade =$this->grade;
//        $diaocha->level =$this->level;
//        $diaocha->beizhu =$this->beizhu;
//        Yii::$app->session->setFlash('failed', '提交数据错误diaocha-》55555validate.');
//        Yii::app()->user->setFlash('success', "提交数据错误diaocha-》55555validate");
//        if (!$diaocha->save()){print_r($diaocha->errors);exit;}

        return $diaocha->save() ? $diaocha : null;

    }
}
