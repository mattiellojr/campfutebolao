<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "salas".
 *
 * @property integer $ID
 * @property string $NOME
 * @property string $VALOR_ENTRADA
 * @property string $OBSERVACAO
 * @property integer $ACERTO_RESULTADO
 * @property integer $ACERTO_TIME_CASA
 * @property integer $ACERTO_TIME_VISITANTE
 * @property integer $ACERTO_DIFERENCA
 */
class Salas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'salas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NOME', 'VALOR_ENTRADA'], 'required'],
            [['VALOR_ENTRADA'], 'number'],
            [['OBSERVACAO'], 'string'],
            [['ACERTO_RESULTADO', 'ACERTO_TIME_CASA', 'ACERTO_TIME_VISITANTE', 'ACERTO_DIFERENCA'], 'integer'],
            [['NOME'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'NOME' => 'Nome',
            'VALOR_ENTRADA' => 'Valor de Entrada',
            'OBSERVACAO' => 'Observações',
            'ACERTO_RESULTADO' => 'Placar Exato',
            'ACERTO_TIME_CASA' => 'Placar da Casa',
            'ACERTO_TIME_VISITANTE' => 'Placar do Visitante',
            'ACERTO_DIFERENCA' => 'Diferença de Gols',
        ];
    }
}
