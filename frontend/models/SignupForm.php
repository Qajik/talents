<?php
namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    
    public $Email;
    public $Password;
    public $Password_repeat;
    public $FirstName;
    public $LastName;
    public $Role;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
           // ['FirstName', 'LastName', 'Email', 'Password', 'Role'],
            [['FirstName', 'LastName'], 'string', 'max' => 25],
            [['FirstName', 'LastName'], 'required'],
            [['Role'], 'integer'],
            ['Email', 'trim'],
            ['Email', 'required'],
            ['Email', 'email'],
            ['Email', 'string', 'max' => 255],
            ['Email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['Role', 'required'],
            ['Password', 'required'],
            ['Password_repeat', 'required'],
            ['Password', 'string', 'min' => 6],
            ['Password_repeat', 'compare', 'compareAttribute'=>'Password', 'message'=>"Passwords don't match" ],
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->Email = $this->Email;
        $user->setPassword($this->Password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        $user->Password = $user->password_hash;
        $user->FirstName = $this->FirstName;
        $user->LastName = $this->LastName;
        $user->Role = $this->Role;
        return $user->save() && $this->sendEmail($user);

    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->Email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
