<?php
namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * User model
 *
 * @property integer $id
 * @property string $renyuan
 * @property string $rq
 * @property string $grade
 * @property string $level
 * @property string $beizhu

 */
class Diaocha extends ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%diaocha}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
//           TimestampBehavior::className(),
//            'createdAtAttribute'=>'rq',//添加创建时间和
//            'updatedAtAttribute'=>'update_time',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['id'], 'unique'],
            [['renyuan'], 'required'],

        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'renyuan' => '被调查人',
            'rq' => '日期',

        ];
    }
    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
//        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
//        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    public function getAuthKey()
    {
//        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
//        return $this->getAuthKey() === $authKey;
    }
    public function getId()
    {
//        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */


    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */








}
