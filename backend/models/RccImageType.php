<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rcc_image_type".
 *
 * @property int $id
 * @property string $type_brief
 * @property int $insert_id 添加者idi
 * @property string $insert_datetime 添加时间
 * @property int $update_id 更新者id
 * @property string $update_datetime 更新时间
 */
class RccImageType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rcc_image_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['insert_id', 'update_id'], 'required'],
            [['insert_id', 'update_id'], 'integer'],
            [['type_brief', 'insert_datetime', 'update_datetime'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type_brief' => 'Type Brief',
            'insert_id' => 'Insert ID',
            'insert_datetime' => 'Insert Datetime',
            'update_id' => 'Update ID',
            'update_datetime' => 'Update Datetime',
        ];
    }
}
