<?php

namespace backend\controllers;

use Yii;
use common\models\FootTeam;
use common\models\search\FootTeamSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FootTeamController implements the CRUD actions for FootTeam model.
 */
class FootTeamController extends Controller
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
     * Lists all FootTeam models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FootTeamSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FootTeam model.
     * @param string $name
     * @param integer $overall_points
     * @return mixed
     */
    public function actionView($name, $overall_points)
    {
        return $this->render('view', [
            'model' => $this->findModel($name, $overall_points),
        ]);
    }

    /**
     * Creates a new FootTeam model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FootTeam();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'name' => $model->name, 'overall_points' => $model->overall_points]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing FootTeam model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $name
     * @param integer $overall_points
     * @return mixed
     */
    public function actionUpdate($name, $overall_points)
    {
        $model = $this->findModel($name, $overall_points);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'name' => $model->name, 'overall_points' => $model->overall_points]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing FootTeam model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $name
     * @param integer $overall_points
     * @return mixed
     */
    public function actionDelete($name, $overall_points)
    {
        $this->findModel($name, $overall_points)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FootTeam model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $name
     * @param integer $overall_points
     * @return FootTeam the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($name, $overall_points)
    {
        if (($model = FootTeam::findOne(['name' => $name, 'overall_points' => $overall_points])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
