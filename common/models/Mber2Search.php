<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Mber2;

/**
 * Mber2Search represents the model behind the search form of `common\models\Mber2`.
 */
class Mber2Search extends Mber2
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['ert1', 'ert2', 'ert3', 'ert4', 'ert5', 'ert6', 'ert7', 'ert8', 'ert9', 'ert10', 'ert11', 'ert12', 'ert13', 'ert14', 'ert15', 'ert16', 'ert17', 'ert18', 'ert19', 'ert20', 'ert21', 'ert22', 'ert23', 'ert24', 'ert25', 'ert26', 'ert27', 'ert28', 'ert29', 'ert30', 'ert31', 'ert32', 'ert33', 'ert34', 'ert35', 'ert36', 'ert37', 'ert38', 'ert39', 'ert40', 'ert41', 'ert42', 'ert43', 'ert44', 'ert45', 'ert46', 'ert47', 'ert48', 'ert49', 'ert50'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Mber2::find()->where(['ert47'=>Yii::$app->user->id]);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'ert1', $this->ert1])
            ->andFilterWhere(['like', 'ert2', $this->ert2])
            ->andFilterWhere(['like', 'ert3', $this->ert3])
            ->andFilterWhere(['like', 'ert4', $this->ert4])
            ->andFilterWhere(['like', 'ert5', $this->ert5])
            ->andFilterWhere(['like', 'ert6', $this->ert6])
            ->andFilterWhere(['like', 'ert7', $this->ert7])
            ->andFilterWhere(['like', 'ert8', $this->ert8])
            ->andFilterWhere(['like', 'ert9', $this->ert9])
            ->andFilterWhere(['like', 'ert10', $this->ert10])
            ->andFilterWhere(['like', 'ert11', $this->ert11])
            ->andFilterWhere(['like', 'ert12', $this->ert12])
            ->andFilterWhere(['like', 'ert13', $this->ert13])
            ->andFilterWhere(['like', 'ert14', $this->ert14])
            ->andFilterWhere(['like', 'ert15', $this->ert15])
            ->andFilterWhere(['like', 'ert16', $this->ert16])
            ->andFilterWhere(['like', 'ert17', $this->ert17])
            ->andFilterWhere(['like', 'ert18', $this->ert18])
            ->andFilterWhere(['like', 'ert19', $this->ert19])
            ->andFilterWhere(['like', 'ert20', $this->ert20])
            ->andFilterWhere(['like', 'ert21', $this->ert21])
            ->andFilterWhere(['like', 'ert22', $this->ert22])
            ->andFilterWhere(['like', 'ert23', $this->ert23])
            ->andFilterWhere(['like', 'ert24', $this->ert24])
            ->andFilterWhere(['like', 'ert25', $this->ert25])
            ->andFilterWhere(['like', 'ert26', $this->ert26])
            ->andFilterWhere(['like', 'ert27', $this->ert27])
            ->andFilterWhere(['like', 'ert28', $this->ert28])
            ->andFilterWhere(['like', 'ert29', $this->ert29])
            ->andFilterWhere(['like', 'ert30', $this->ert30])
            ->andFilterWhere(['like', 'ert31', $this->ert31])
            ->andFilterWhere(['like', 'ert32', $this->ert32])
            ->andFilterWhere(['like', 'ert33', $this->ert33])
            ->andFilterWhere(['like', 'ert34', $this->ert34])
            ->andFilterWhere(['like', 'ert35', $this->ert35])
            ->andFilterWhere(['like', 'ert36', $this->ert36])
            ->andFilterWhere(['like', 'ert37', $this->ert37])
            ->andFilterWhere(['like', 'ert38', $this->ert38])
            ->andFilterWhere(['like', 'ert39', $this->ert39])
            ->andFilterWhere(['like', 'ert40', $this->ert40])
            ->andFilterWhere(['like', 'ert41', $this->ert41])
            ->andFilterWhere(['like', 'ert42', $this->ert42])
            ->andFilterWhere(['like', 'ert43', $this->ert43])
            ->andFilterWhere(['like', 'ert44', $this->ert44])
            ->andFilterWhere(['like', 'ert45', $this->ert45])
            ->andFilterWhere(['like', 'ert46', $this->ert46])
            ->andFilterWhere(['like', 'ert47', $this->ert47])
            ->andFilterWhere(['like', 'ert48', $this->ert48])
            ->andFilterWhere(['like', 'ert49', $this->ert49])
            ->andFilterWhere(['like', 'ert50', $this->ert50]);

        return $dataProvider;
    }
}
