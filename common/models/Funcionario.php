<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "funcionario".
 *
 * @property int $id
 * @property string $nome
 * @property string $sexo
 * @property string $email
 * @property string $telemovel
 * @property string $estado_civil
 * @property string $foto
 * @property string $NIF
 */
class Funcionario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'funcionario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'sexo', 'email', 'telemovel', 'estado_civil', 'foto', 'NIF'], 'required'],
            [['nome', 'email', 'telemovel', 'estado_civil', 'foto'], 'string', 'max' => 255],
            [['sexo'], 'string', 'max' => 50],
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
            'email' => 'Email',
            'telemovel' => 'Telemovel',
            'estado_civil' => 'Estado Civil',
            'foto' => 'Foto',
            'NIF' => 'Nif',
        ];
    }
}
