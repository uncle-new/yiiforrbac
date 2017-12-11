<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rcc_banner".
 *
 * @property int $id
 * @property string $file_path
 * @property int $insert_id 添加者idi
 * @property string $insert_datetime 添加时间
 * @property int $update_id 更新者id
 * @property string $update_datetime 更新时间
 */
class RccBanner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rcc_banner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file_path', 'insert_id', 'update_id'], 'required'],
            [['insert_id', 'update_id'], 'integer'],
            [['file_path', 'insert_datetime', 'update_datetime'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file_path' => 'File Path',
            'insert_id' => 'Insert ID',
            'insert_datetime' => 'Insert Datetime',
            'update_id' => 'Update ID',
            'update_datetime' => 'Update Datetime',
        ];
    }
}
