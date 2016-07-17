<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "war_key".
 *
 * @property integer $key_id
 * @property string $key_text
 * @property integer $key_prior
 * @property string $key_name
 * @property string $key_type_text
 */
class WarKey extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'war_key';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['key_text'], 'required'],
            [['key_prior'], 'integer'],
            [['key_text', 'key_name'], 'string', 'max' => 45],
            [['key_type_text'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'key_id' => '自增id',
            'key_text' => '关键字',
            'key_prior' => '优先 0到255',
            'key_name' => '标题',
            'key_type_text' => 'Key Type Text',
        ];
    }
}
