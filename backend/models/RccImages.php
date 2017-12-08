<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rcc_images".
 *
 * @property int $id
 * @property int $img_type_id 图片类型id,关联图片类型表
 * @property string $file_path 图片路径
 * @property int $insert_id 添加者idi
 * @property string $insert_datetime 添加时间
 * @property int $update_id 更新者id
 * @property string $update_datetime 更新时间
 */
class RccImages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rcc_images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['img_type_id', 'file_path', 'insert_id', 'update_id'], 'required'],
            [['img_type_id', 'insert_id', 'update_id'], 'integer'],
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
            'img_type_id' => 'Img Type ID',
            'file_path' => 'File Path',
            'insert_id' => 'Insert ID',
            'insert_datetime' => 'Insert Datetime',
            'update_id' => 'Update ID',
            'update_datetime' => 'Update Datetime',
        ];
    }
}
