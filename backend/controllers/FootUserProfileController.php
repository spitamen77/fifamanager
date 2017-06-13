<?php

namespace backend\controllers;

use Yii;
use common\models\FootUserProfile;
use common\models\search\FootUserProfileSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FootUserProfileController implements the CRUD actions for FootUserProfile model.
 */
class FootUserProfileController extends Controller
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
     * Lists all FootUserProfile models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FootUserProfileSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FootUserProfile model.
     * @param integer $userid
     * @param string $fname
     * @return mixed
     */
    public function actionView($userid, $fname)
    {
        return $this->render('view', [
            'model' => $this->findModel($userid, $fname),
        ]);
    }

    /**
     * Creates a new FootUserProfile model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FootUserProfile();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'userid' => $model->userid, 'fname' => $model->fname]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing FootUserProfile model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $userid
     * @param string $fname
     * @return mixed
     */
    public function actionUpdate($userid, $fname)
    {
        $model = $this->findModel($userid, $fname);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'userid' => $model->userid, 'fname' => $model->fname]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing FootUserProfile model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $userid
     * @param string $fname
     * @return mixed
     */
    public function actionDelete($userid, $fname)
    {
        $this->findModel($userid, $fname)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FootUserProfile model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $userid
     * @param string $fname
     * @return FootUserProfile the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($userid, $fname)
    {
        if (($model = FootUserProfile::findOne(['userid' => $userid, 'fname' => $fname])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
