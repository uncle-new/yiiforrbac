<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rcc_integral_log".
 *
 * @property int $id
 * @property int $user_id 用户id 关联rcc_user表
 * @property string $inte_time 积分变动时间
 * @property string $change_why 变动情况
 * @property int $change_inte_num 变化数量
 * @property int $change_type 变化类型1增2减
 */
class RccIntegralLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rcc_integral_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'inte_time', 'change_why', 'change_inte_num', 'change_type'], 'required'],
            [['user_id', 'change_inte_num', 'change_type'], 'integer'],
            [['inte_time', 'change_why'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'inte_time' => 'Inte Time',
            'change_why' => 'Change Why',
            'change_inte_num' => 'Change Inte Num',
            'change_type' => 'Change Type',
        ];
    }
}
