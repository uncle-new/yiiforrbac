<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rcc_message".
 *
 * @property int $id
 * @property int $user_id 反馈对应用户id
 * @property string $feedback_content 反馈内容
 * @property string $feedback_time 反馈时间
 */
class RccMessage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rcc_message';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'feedback_content', 'feedback_time'], 'required'],
            [['user_id'], 'integer'],
            [['feedback_content', 'feedback_time'], 'string', 'max' => 255],
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
            'feedback_content' => 'Feedback Content',
            'feedback_time' => 'Feedback Time',
        ];
    }
}
