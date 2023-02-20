<?php

namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\Klient;
use yii\data\ActiveDataProvider;
use frontend\models\Zakaz;
use frontend\models\Tovar;
use frontend\models\User;
use frontend\models\Uslug;
/**
 * Site controller
 */
class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post','get'],
                ],
            ],
        ];
    }
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    
    public function actionContact()
    {
        return $this->render('contact');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    
    public function actionView($id) {
        $model = Klient::findOne($id);
        return $this->render('view',['model'=>$model]);
    }

    public function actionKlients2() {
        $dataProvider = new ActiveDataProvider([
            'query' => Klient::find(),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
        return $this->render('klient2',['dataProvider'=>$dataProvider]);
}
public function actionUpdate($id) {
    $model = Klient::findOne($id);
    if($model->load(Yii::$app->request->post())) {
        $model->save();
        return $this->redirect(['view','id'=>$model->id]);
    }
    return $this->render('edit',['model'=>$model]);
}

public function actionAdd() {
    $model = new Klient();
    if($model->load(Yii::$app->request->post())) {
        $model->save();
        return $this->redirect(['view','id'=>$model->id]);
    }
    return $this->render('edit',['model'=>$model]);
}

public function actionDelete($id) {
    $model = Klient::findOne($id);
    if($model) $model->delete();
    return $this->redirect(['klients2']);
}

public function actionZakazs2() {
    $dataProvider = new ActiveDataProvider([
        'query' => Zakaz::find(),
        'pagination' => [
            'pageSize' => 20,
        ],
    ]);
    return $this->render('zakaz2',['dataProvider'=>$dataProvider]);
}

public function actionAdd2() {
    $model = new Zakaz();
    if($model->load(Yii::$app->request->post())) {
        $model->save();
        return $this->redirect(['view2','id'=>$model->id]);
    }
    return $this->render('edit2',['model'=>$model]);
}

public function actionView2($id) {
    $model = Zakaz::findOne($id);
    return $this->render('view2',['model'=>$model]);
}

public function actionUpdate2($id) {
    $model = Zakaz::findOne($id);
    if($model->load(Yii::$app->request->post())) {
        $model->save();
        return $this->redirect(['view2','id'=>$model->id]);
    }
    return $this->render('edit2',['model'=>$model]);
}

public function actionTovars2() {
    $dataProvider = new ActiveDataProvider([
        'query' => Tovar::find(),
        'pagination' => [
            'pageSize' => 20,
        ],
    ]);
    return $this->render('tovar2',['dataProvider'=>$dataProvider]);
}
public function actionAdd3() {
    $model = new Tovar();
    if($model->load(Yii::$app->request->post())) {
        $model->save();
        return $this->redirect(['view3','id'=>$model->id]);
    }
    return $this->render('edit3',['model'=>$model]);
}

public function actionView3($id) {
    $model = Tovar::findOne($id);
    return $this->render('view3',['model'=>$model]);
}

public function actionUpdate3($id) {
    $model = Tovar::findOne($id);
    if($model->load(Yii::$app->request->post())) {
        $model->save();
        return $this->redirect(['view3','id'=>$model->id]);
    }
    return $this->render('edit3',['model'=>$model]);
}

public function actionSignup() {
    if (!Yii::$app->user->isGuest) {
        return $this->goHome ();
    }
    
    $model = new SignupForm();
    if($model->load(\Yii::$app->request->post()) && $model->validate()) {
        $user = new User();
        $user->username = $model->username;
        $user->password = \Yii::$app->security->generatePasswordHash($model->password);
        if($user->save()) {
            \Yii::$app->user->login($user);
            return $this->goHome();
        }
    }
    return $this->render('signup', compact('model'));
}

public function actionLogout()
{
    Yii::$app->user->logout();

    return $this->goHome();
}

public function actionLogin() 
{
    if (!Yii::$app->user->isGuest) {
        return $this->goHome ();
    }
    
    $model = new LoginForm();
    if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
    return $this->render('login', [
        'model' => $model,
    ]);
}

public function actionUslugs2() {
    $dataProvider = new ActiveDataProvider([
        'query' => Uslug::find(),
        'pagination' => [
            'pageSize' => 20,
        ],
    ]);
    return $this->render('uslug2',['dataProvider'=>$dataProvider]);
}
public function actionAdd4() {
    $model = new Uslug();
    if($model->load(Yii::$app->request->post())) {
        $model->save();
        return $this->redirect(['view4','id'=>$model->id]);
    }
    return $this->render('edit4',['model'=>$model]);
}

public function actionView4($id) {
    $model = Uslug::findOne($id);
    return $this->render('view4',['model'=>$model]);
}

public function actionUpdate4($id) {
    $model = Uslug::findOne($id);
    if($model->load(Yii::$app->request->post())) {
        $model->save();
        return $this->redirect(['view4','id'=>$model->id]);
    }
    return $this->render('edit4',['model'=>$model]);
}
}
