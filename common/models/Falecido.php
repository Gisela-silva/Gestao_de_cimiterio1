<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "falecido".
 *
 * @property int $id
 * @property string $nome
 * @property string $sexo
 * @property string $data_nascimeto
 * @property string $data_falecimento
 * @property int $estado_civil
 * @property string $foto
 * @property string $profissao
 * @property string $NIF
 */
class Falecido extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'falecido';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'sexo', 'data_nascimeto', 'data_falecimento', 'estado_civil', 'foto', 'profissao', 'NIF'], 'required'],
            [['data_nascimeto', 'data_falecimento'], 'safe'],
            [['estado_civil'], 'integer'],
            [['nome', 'foto', 'profissao'], 'string', 'max' => 255],
            [['sexo'], 'string', 'max' => 10],
            [['NIF'], 'string', 'max' => 9],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'sexo' => 'Sexo',
            'data_nascimeto' => 'Data Nascimeto',
            'data_falecimento' => 'Data Falecimento',
            'estado_civil' => 'Estado Civil',
            'foto' => 'Foto',
            'profissao' => 'Profissao',
            'NIF' => 'Nif',
        ];
    }
}
