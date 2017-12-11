<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rcc_user".
 *
 * @property int $user_id 用户id
 * @property string $user_name 用户名
 * @property int $user_type 用户类型
 * @property int $user_integral 用户积分
 * @property int $insert_id 添加者idi
 * @property string $insert_datetime 添加时间
 * @property int $update_id 更新者id
 * @property string $update_datetime 更新时间
 */
class RccUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rcc_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_type', 'user_integral', 'insert_id', 'update_id'], 'integer'],
            [['insert_id', 'update_id'], 'required'],
            [['user_name'], 'string', 'max' => 50],
            [['insert_datetime', 'update_datetime'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'user_type' => 'User Type',
            'user_integral' => 'User Integral',
            'insert_id' => 'Insert ID',
            'insert_datetime' => 'Insert Datetime',
            'update_id' => 'Update ID',
            'update_datetime' => 'Update Datetime',
        ];
    }
}
