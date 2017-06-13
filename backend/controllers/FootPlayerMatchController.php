<?php

namespace backend\controllers;

use Yii;
use common\models\FootPlayerMatch;
use common\models\search\FootPlayerMatchSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FootPlayerMatchController implements the CRUD actions for FootPlayerMatch model.
 */
class FootPlayerMatchController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all FootPlayerMatch models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FootPlayerMatchSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FootPlayerMatch model.
     * @param integer $player_id
     * @param integer $matchweek_id
     * @return mixed
     */
    public function actionView($player_id, $matchweek_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($player_id, $matchweek_id),
        ]);
    }

    /**
     * Creates a new FootPlayerMatch model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FootPlayerMatch();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'player_id' => $model->player_id, 'matchweek_id' => $model->matchweek_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing FootPlayerMatch model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $player_id
     * @param integer $matchweek_id
     * @return mixed
     */
    public function actionUpdate($player_id, $matchweek_id)
    {
        $model = $this->findModel($player_id, $matchweek_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'player_id' => $model->player_id, 'matchweek_id' => $model->matchweek_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing FootPlayerMatch model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $player_id
     * @param integer $matchweek_id
     * @return mixed
     */
    public function actionDelete($player_id, $matchweek_id)
    {
        $this->findModel($player_id, $matchweek_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FootPlayerMatch model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $player_id
     * @param integer $matchweek_id
     * @return FootPlayerMatch the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($player_id, $matchweek_id)
    {
        if (($model = FootPlayerMatch::findOne(['player_id' => $player_id, 'matchweek_id' => $matchweek_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
