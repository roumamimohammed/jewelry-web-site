<?php
class Users extends Controller
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }
    public function register()
    {
        // verfier post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //   process form
            // Sanitiza Post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            // init data
            $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => '',
            ];

            // validation name
            if (empty($data['name'])) {
                $data['name_err'] = 'plaese enter your name';
            }

            // validation email
            if (empty($data['email'])) {
                $data['email_err'] = 'plaese enter email';
            } else {
                //  checkemail
                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['email_err'] = 'email is elready taken';
                }
            }

            // validation password
            if (empty($data['password'])) {
                $data['password_err'] = 'plaese enter password';
            }
            // password moins que 6 caract
            elseif (strlen($data['password']) < 6) {
                $data['password_err'] = 'password must be at least 6 characters';
            }


            // validation confirme passw
            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'plaese enter confirm password';
            } else {

                // verifier que les deux pass eg
                if ($data['password'] != $data['confirm_password']) {
                    $data['confirm_password_err'] = 'password is not match';
                }
            }

            // make sur errors are empty 

            if (empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
                // validated

                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                // Register User 
                if ($this->userModel->register($data)) {
                    flash('register_success', 'You are registered and can log in');
                    redirect('users/login');
                } else {
                    die('wrong');
                }
            } else {
                // load view eith errors
                $this->view('users/register', $data);
            }
        } else {
            // init data
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => '',
            ];
            // load view
            $this->view('users/register', $data);
        }
    }
    public function login()
    {
        // verfier post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //   process form
            // Sanitiza Post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            // init data
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => '',
            ];
            // validation email
            if (empty($data['email'])) {
                $data['email_err'] = 'plaese enter email';
            }
            // validation epassword
            if (empty($data['password'])) {
                $data['password_err'] = 'plaese enter password';
            }
            // check for users email
            if ($this->userModel->findUserByEmail($data['email'])) {
            } else {
                $data['email_err'] = 'no user found';
            }
            // make sur errors are empty 

            if (empty($data['email_err'])) {
                // validated
                // check and set logged in user
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);
                if ($loggedInUser) {
                    // create sussion 
                    $this->creatUserSession($loggedInUser);
                } else {
                    $data['password_err'] = 'password incorrect';
                    $this->view('user/login', $data);
                }
            } else {
                // load view eith errors
                $this->view('users/login', $data);
            }
        } else {
            // init data
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
            ];
            // load view
            $this->view('users/login', $data);
        }
    }
    public function creatUserSession($user)
    {
        $_SESSION['user_id'] = $user->id_user;
        $_SESSION['user_email'] = $user->mail_user;
        $_SESSION['user_name'] = $user->name_user;
        if($_SESSION['user_id'] == 7)  
        { 
            redirect('articles/dashbord');
        }else{
            redirect('pages/index');

        }
        
    }
    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        session_destroy();
        redirect('pages/index');
    }
  
}
