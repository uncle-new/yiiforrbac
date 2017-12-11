<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rcc_feedback".
 *
 * @property int $id
 * @property int $user_id 留言对应用户id
 * @property string $message_content 留言内容
 * @property string $message_time 留言时间
 */
class RccFeedback extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rcc_feedback';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'message_content', 'message_time'], 'required'],
            [['user_id'], 'integer'],
            [['message_content', 'message_time'], 'string', 'max' => 255],
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
            'message_content' => 'Message Content',
            'message_time' => 'Message Time',
        ];
    }
}
