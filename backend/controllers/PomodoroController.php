<?php

namespace backend\controllers;

use backend\models\Pomodoro;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\VerbFilter;

/**
 * PomodoroController implements the CRUD actions for Pomodoro model.
 */
class PomodoroController extends Controller
{
	public function behaviors()
	{
		return array(
			'verbs' => array(
				'class' => VerbFilter::className(),
				'actions' => array(
					'delete' => array('post'),
				),
			),
		);
	}

	/**
	 * Lists all Pomodoro models.
	 * @return mixed
	 */
	public function actionIndex()
	{
		$searchModel = new Pomodoro;
		$dataProvider = $searchModel->search($_GET);

		return $this->render('index', array(
			'dataProvider' => $dataProvider,
			'searchModel' => $searchModel,
		));
	}

	/**
	 * Displays a single Pomodoro model.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionView($id)
	{
		return $this->render('view', array(
			'model' => $this->findModel($id),
		));
	}

	/**
	 * Creates a new Pomodoro model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return mixed
	 */
	public function actionCreate()
	{
		$model = new Pomodoro;

		if ($model->load($_POST) && $model->save()) {
			return $this->redirect(array('view', 'id' => $model->id));
		} else {
			return $this->render('create', array(
				'model' => $model,
			));
		}
	}

	/**
	 * Updates an existing Pomodoro model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionUpdate($id)
	{
		$model = $this->findModel($id);

		if ($model->load($_POST) && $model->save()) {
			return $this->redirect(array('view', 'id' => $model->id));
		} else {
			return $this->render('update', array(
				'model' => $model,
			));
		}
	}

	/**
	 * Deletes an existing Pomodoro model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionDelete($id)
	{
		$this->findModel($id)->delete();
		return $this->redirect(array('index'));
	}

	/**
	 * Finds the Pomodoro model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param integer $id
	 * @return Pomodoro the loaded model
	 * @throws HttpException if the model cannot be found
	 */
	protected function findModel($id)
	{
		if (($model = Pomodoro::find($id)) !== null) {
			return $model;
		} else {
			throw new HttpException(404, 'The requested page does not exist.');
		}
	}
}
