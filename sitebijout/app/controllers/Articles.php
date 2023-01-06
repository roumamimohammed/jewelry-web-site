<?php
class Articles extends Controller
{
    public function __construct()
    {
        // verifier login d admin
        if (!isLoggdIn()) {
            redirect('users/login');
        }
        $this->articleModel = $this->model('Article');
    }
    public function index()
    {
        // Get articles
        $articles = $this->articleModel->getArticles();
        $data = [
            'articles' => $articles
        ];
        $this->view('articles/index', $data);
    }
    public function dashbord()
    {
        // Get articles
        $articles = $this->articleModel->getArticles();
        $data = [
            'articles' => $articles
        ];
        $this->view('articles/dashbord', $data);
    }
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'name_prod' => trim($_POST['name']),
                'quantite' => trim($_POST['quantite']),
                'prix' => trim($_POST['prix']),
                'image' =>$_FILES['image']['name'],
                'user_id' => $_SESSION['user_id'],
                'name_prod_err' => '',
                'quantite_err' => '',
                'prix_err' => '',
                // 'image_err' => '',
            ];

            // validation 
            if (empty($data['name_prod'])) {
                $data['name_prod_err'] = 'please enter name article';
            }
            if (empty($data['quantite'])) {
                $data['quantite_err'] = 'please enter quantite';
            }
            if (empty($data['prix'])) {
                $data['prix_err'] = 'please enter prix';
            }
            // if(empty($data['image'])){
            // //     $data['image_err'] = 'please enter image';
            // }

            // make sure no errors
            if (empty($data['name_prod_err']) && empty($data['quantite_err']) && empty($data['prix_err'])) {
                if ($this->articleModel->addArticle($data)) {
                    flash('article_message', 'Article Added');
                    redirect('articles/dashbord');
                } else {
                    die('wrong');
                }
            } else {
                $this->view('articles/add', $data);
            }
        } else {
            $data = [
                'name_prod' => '',
                'quantite' => '',
                'prix' => '',
                'image' => '',
                'user_id' => '',
                'name_prod_err' => '',
                'quantite_err' => '',
                'prix_err' => '',
                'image_err' => '',
            ];

            $this->view('articles/add', $data);
        }
    }
    public function show($id_prod)
    {
        $article = $this->articleModel->getPostById($id_prod);
        $data = [
            'article' => $article
        ];
        $this->view('articles/show', $data);
    }
    public function edit($id_prod)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id_prod' => $id_prod,
                'name_prod' => trim($_POST['name']),
                'quantite' => trim($_POST['quantite']),
                'prix' => trim($_POST['prix']),
                'name_prod_err' => '',
                'quantite_err' => '',
                'prix_err' => '',
            ];

            // validation 
            if (empty($data['name_prod'])) {
                $data['name_prod_err'] = 'please enter name article';
            }
            if (empty($data['quantite'])) {
                $data['quantite_err'] = 'please enter quantite';
            }
            if (empty($data['prix'])) {
                $data['prix_err'] = 'please enter prix';
            }
           

            // make sure no errors
            if (empty($data['name_prod_err']) && empty($data['quantite_err']) && empty($data['prix_err'])) {
                if ($this->articleModel->updateArticle($data)) {
                    flash('article_message', 'Article Edit');
                    redirect('articles/dashbord');
                } else {
                    die('wrong');
                }
            } else {
                $this->view('articles/edit', $data);
            }
        } else {

            $article = $this->articleModel->getPostById($id_prod);
            if ($article->admin_id != $_SESSION['user_id']) {
                flash('article_message', 'you are not the same creator admin of this article ');
                redirect('articles/dashbord');
            }
            $data = [
                'id_prod' => $id_prod,
                'name_prod' => $article->name_prod,
                'quantite' => $article->quantite,
                'prix' => $article->prix,
            ];
            $this->view('articles/edit', $data);
        }
    }
    public function delete($id_prod)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if ($this->articleModel->deleteArticle($id_prod)) {
                flash('article_message', 'Article Removed ');
                redirect('articles/dashbord');
            } else {
                flash('article_message', ' Somthing went wrong');
                redirect('articles/dashbord');
            }
            // $article = $this->articleModel->getPostById($id_prod);
            // if($article->admin_id != $_SESSION['user_id']){
            // }
        } else {
            $article = $this->articleModel->getPostById($id_prod);
            if ($article->admin_id != $_SESSION['user_id']) {
                flash('article_message', 'you are not the same creator admin of this article ');
                redirect('articles/dashbord');
            }else{
            if ($this->articleModel->deleteArticle($id_prod)) {
                flash('article_message', 'Article Removed ');
                redirect('articles/dashbord');
            } else {
                flash('article_message', ' Somthing went wrong');
                redirect('articles/dashbord');
            }
        }
        }
    }

}
