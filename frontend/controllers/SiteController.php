<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;

/*
 * Kien's Code
 */
//Models
use frontend\models\ContactForm;
use frontend\models\UserLogin;
use frontend\models\UploadImage;
use frontend\models\Register;

//Database 
use frontend\models\Province;
use frontend\models\Ward;
use frontend\models\District;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $imageFolder;
    public $iconFolder;
   
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    
    public function init(){
        $web_app = 'http://' . $_SERVER['SERVER_NAME'] . '/services';
        $this->imageFolder = $web_app . '/frontend/web/images/';
        $this->iconFolder = $web_app . '/frontend/web/icon/';
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index.twig',[
            'name'=>'Andie',
            'imageFolder'   => $this->imageFolder,
            'iconFolder'    => $this->iconFolder
            ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }
    
    /**
     * Layout test
     *
     * @Andie 
     */
    public function actionHome(){
        //return $this->render('home');
        return $this->render('category');
    }
    
    public function actionTwiggy(){
        Yii::$app->controller->renderPartial('category_assets');

        return $this->render('twig_page.twig',[
            'name'=>'Andie',
            'imageFolder'   => $this->imageFolder,
            'iconFolder'    => $this->iconFolder
            ]);
    }
    
    public function actionAdsdetails(){
        Yii::$app->controller->renderPartial('category_assets');

        return $this->render('ads-details.twig',[
            'name'=>'Andie',
            'imageFolder'   => $this->imageFolder,
            'iconFolder'    => $this->iconFolder
            ]);
    }
    
    public function actionCategory(){
        Yii::$app->controller->renderPartial('category_assets');
        return $this->render('category.twig',[
            'imageFolder'   => $this->imageFolder,
            'iconFolder'    => $this->iconFolder
        ]);
    }
    
    public function actionProfile(){
                Yii::$app->controller->renderPartial('category_assets');

        return $this->render('profile.twig',[
            'imageFolder'   => $this->imageFolder,
            'iconFolder'    => $this->iconFolder
        ]);
    }
    
    public function actionRegister(){
        Yii::$app->controller->renderPartial('register-assets');
        
        $model = new Register();
        $request = Yii::$app->request;
        $data = null;
        
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $data = [
                'username'  => $request->post('Register')['userName'],
                'fullname'  => $request->post('Register')['fullName'],
                'selector'  => $request->post('Register')['selector']
            ];
        }
        
        return $this->render('register',[
            'data'          => $data,
            'model'         => $model,
            'imageFolder'   => $this->imageFolder,
            'iconFolder'    => $this->iconFolder
        ]);
    }
    
    public function actionMyads(){
        return $this->render('myads.twig',[
           'imageFolder'    => $this->imageFolder,
           'iconFolder'     => $this->iconFolder
        ]);
    }
    
    public function actionMyadscomment(){
        return $this->render('myads-comment.twig',[
           'imageFolder'    => $this->imageFolder,
           'iconFolder'     => $this->iconFolder
        ]);
    }
    
    public function actionCreateads(){
        return $this->render('create-ads',[
           'imageFolder'    => $this->imageFolder,
           'iconFolder'     => $this->iconFolder
        ]);
    }
    
    public function actionApi(){
        $request = Yii::$app->request;
        if($request->get('data') === 'province-name')
        {
            $province = Province::find()->all();
            foreach($province as $row)
            {
                echo $row->name;
                echo ";";
            }   
        }
        
        if($request->get('data') === 'province-id')
        {
            $province = Province::find()->all();
            foreach($province as $row)
            {
                echo $row->id;
                echo ";";
            }   
        }
        
        if($request->get('data') === 'district-name')
        {
            $provinceId = $request->get('provinceId');
            $district = District::find()
                    ->where(['provinceId'=>$provinceId])
                    ->all();
            foreach($district as $row)
            {
                echo $row->name . ';';
            }
        }
        
        if($request->get('data') === 'ward-name')
        {
            $districtId = $request->get('districtId');
            $ward = Ward::find()
                    ->where(['districtId'=>$districtId])
                    ->all();
            foreach($ward as $row)
            {
                echo $row->name . ';';
            }
        }
       
    }
    
    public function actionUploadimage() 
    {
        $model = new UploadImage();
        if (Yii::$app->request->isPost) {
            $request = Yii::$app->request;
            $id = $request->post('UploadImage')['id'];
            $file_name = $id . '_' . rand(100, 500);
            $model->image = UploadedFile::getInstance($model, 'image');
            if ($model->upload($file_name,$id)) {
                // file is uploaded successfully
                echo $request->post('UploadImage')['id'] . "<br>";
                echo "File successfully uploaded";
                $record = Invoice::find()
                        ->select('image')
                        ->where(['invoiceID'=>$id])
                        ->one();
                return $this->render('upload_image_success',['link'=>$this->behav->uploadFolder().$record['image']]);
            }
        } else
        {
            $model->id = Yii::$app->request->get('id',0);
        }
        return $this->render('upload_image', ['model' => $model]);
    }
    
    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
    
    public function actionSess()
    {
        $session = Yii::$app->session;
        $session->set('authKey','12345678');
        if($session->isActive)
        {
            $variable = $session->get('authKey');
            return $this->render('sessionT',['variable'=>$variable]);
        } else
        {
            $variable = 'NoActive';
            return $this->render('sessionT',['variable'=>$variable]);
        }
    }
    
    public function actionTestsql()
    {
        $list = Yii::$app->db->createCommand('SELECT * FROM invoice')->queryAll();
        $rs = array();
        foreach($list as $items)
        {
            $rs = $items['invoiceID'];
            echo $rs.'<br>';
        }
    }
    
    public function actionTestsqlbind()
    {
        $params = ['id'=>5];
        $result = Yii::$app->db->createCommand("SELECT * FROM invoice WHERE invoiceID>:id",$params)->queryAll();
        $row = array();
        foreach($result as $items)
        {
            $row = $items['invoiceID'];
            echo $row.'<br>';
        }
    }
    
    public function actionLogg()
    {
        $model = new UserLogin();
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            Yii::$app->session->setFlash('success','You have entered data correctly');
        }
        
        return $this->render('userLogin',['model'=>$model]);
        
    }
    
//    public function actionUploadImage() 
//    {
//       $model = new UploadImageForm();
//       if (Yii::$app->request->isPost) {
//           //var_dump(Yii::$app->request->isPost, UploadedFile::getInstance($model, 'image'));
//          $model->image = UploadedFile::getInstance($model, 'image');
//          if ($model->upload()) {
//             // file is uploaded successfully
//             echo "File successfully uploaded";
//             return;
//          }
//       }
//       return $this->render('upload', ['model' => $model]);
//    }
    
    public function actionJqueryActive()
    {
        
        return $this->render('jactive');
    }
}










