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
    public $username;
    public $password;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username'], 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            // password is validated by validatePassword()

        ];
    }


    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        /* if (!$this->validate()) {
             return 'номер не заполнин';
         }*/

        if ( preg_match('/^\+[0-9]{12}+$/i',$this->username)){

            if(!$this->validate()){
                $length = rand(4,4);
                $chars = array_merge(range(0,9));
                shuffle($chars);
                $tetet = implode(array_slice($chars, 0,$length));

                $curl = curl_init();
                curl_setopt_array($curl, array(
                    //CURLOPT_PORT => "8083",
                    CURLOPT_URL => "http://91.204.239.44/broker-api/send",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => "{ \"messages\": [ { \"recipient\": \"$this->username\", \"message-id\": \"mko2016256\", \"sms\": { \"originator\": \"3700\", \"content\": { \"text\": \"$tetet\"} } } ] }",
                    CURLOPT_HTTPHEADER => array(
                        "Authorization: Basic bWtvaHR0cDpTQ25MS2VBYw==",
                        "Cache-Control: no-cache",
                        "Content-Type: application/json",
                    ),
                ));

                $response = curl_exec($curl);
                $err = curl_error($curl);
                curl_close($curl);
                $user = User::find()->where(['username'=>$this->username])->one();
                $user->setPassword($tetet);
                $user->access_token = Yii::$app->security->generateRandomString() . '_' . time();

                return $user->save();

            }else{
                $length = rand(4,4);
                $chars = array_merge(range(0,9));
                shuffle($chars);
                $tetet = implode(array_slice($chars, 0,$length));

                $curl = curl_init();
                curl_setopt_array($curl, array(
                    //CURLOPT_PORT => "8083",
                    CURLOPT_URL => "http://91.204.239.44/broker-api/send",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => "{ \"messages\": [ { \"recipient\": \"$this->username\", \"message-id\": \"mko2016256\", \"sms\": { \"originator\": \"3700\", \"content\": { \"text\": \"$tetet\"} } } ] }",
                    CURLOPT_HTTPHEADER => array(
                        "Authorization: Basic bWtvaHR0cDpTQ25MS2VBYw==",
                        "Cache-Control: no-cache",
                        "Content-Type: application/json",
                    ),
                ));

                $response = curl_exec($curl);
                $err = curl_error($curl);
                curl_close($curl);
                $user = new User();
                $user->username = $this->username;
                $user->email = $this->username;
                $user->status = 10;
                $user->setPassword($tetet);
                $user->generateAuthKey();
                $user->generateEmailVerificationToken();
                $user->access_token = Yii::$app->security->generateRandomString() . '_' . time();

                return $user->save();
            }
        }else{
            return 'Неправильно набранный номер';
        }



    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }
}