<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rcc_user_type".
 *
 * @property int $type_id 类型id
 * @property string $type_description 类型名称
 */
class RccUserType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rcc_user_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_description'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'type_id' => 'Type ID',
            'type_description' => 'Type Description',
        ];
    }
}
