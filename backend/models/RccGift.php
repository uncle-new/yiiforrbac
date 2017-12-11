<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rcc_gift".
 *
 * @property int $id
 * @property string $gift_name 礼品名
 * @property int $need_integral 兑换所需积分
 * @property int $gift_num 礼品数量
 * @property int $rest_num 剩余数量
 * @property int $to_who 礼品对象 1所有会员
 * @property int $gift_type 礼品类型 1 实物 2 虚拟
 * @property string $gift_image 礼品图片
 * @property string $gift_location 领取地址
 * @property string $gift_get_time 领取时间
 * @property string $gift_item 领取项目
 */
class RccGift extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rcc_gift';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gift_name', 'gift_num', 'rest_num', 'to_who', 'gift_type', 'gift_image', 'gift_location', 'gift_get_time', 'gift_item'], 'required'],
            [['need_integral', 'gift_num', 'rest_num', 'to_who', 'gift_type'], 'integer'],
            [['gift_name', 'gift_image', 'gift_location', 'gift_get_time', 'gift_item'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gift_name' => 'Gift Name',
            'need_integral' => 'Need Integral',
            'gift_num' => 'Gift Num',
            'rest_num' => 'Rest Num',
            'to_who' => 'To Who',
            'gift_type' => 'Gift Type',
            'gift_image' => 'Gift Image',
            'gift_location' => 'Gift Location',
            'gift_get_time' => 'Gift Get Time',
            'gift_item' => 'Gift Item',
        ];
    }
}
