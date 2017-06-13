<?php

namespace backend\controllers;

use Yii;
use common\models\FootTeamMatch;
use common\models\search\FootTeamMatchSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FootTeamMatchController implements the CRUD actions for FootTeamMatch model.
 */
class FootTeamMatchController extends Controller
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
     * Lists all FootTeamMatch models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FootTeamMatchSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FootTeamMatch model.
     * @param integer $userid
     * @param integer $match_id
     * @return mixed
     */
    public function actionView($userid, $match_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($userid, $match_id),
        ]);
    }

    /**
     * Creates a new FootTeamMatch model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FootTeamMatch();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'userid' => $model->userid, 'match_id' => $model->match_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing FootTeamMatch model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $userid
     * @param integer $match_id
     * @return mixed
     */
    public function actionUpdate($userid, $match_id)
    {
        $model = $this->findModel($userid, $match_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'userid' => $model->userid, 'match_id' => $model->match_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing FootTeamMatch model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $userid
     * @param integer $match_id
     * @return mixed
     */
    public function actionDelete($userid, $match_id)
    {
        $this->findModel($userid, $match_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FootTeamMatch model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $userid
     * @param integer $match_id
     * @return FootTeamMatch the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($userid, $match_id)
    {
        if (($model = FootTeamMatch::findOne(['userid' => $userid, 'match_id' => $match_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
