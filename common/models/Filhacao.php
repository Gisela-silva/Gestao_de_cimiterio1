<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "filhacao".
 *
 * @property int $id
 * @property string $nome_pai
 * @property string $nome_mae
 */
class Filhacao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'filhacao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome_pai', 'nome_mae'], 'required'],
            [['nome_pai', 'nome_mae'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome_pai' => 'Nome Pai',
            'nome_mae' => 'Nome Mae',
        ];
    }
}
