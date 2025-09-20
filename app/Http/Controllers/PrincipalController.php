<?php 
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    class PrincipalController extends Controller

    {
        public static function principal() 
        {
            return view('principal');
        }
<<<<<<< HEAD
        public static function contatos() 
        {
            return view('contatos');
=======
        public function contatos() 
        {
            var_dump($_GET);
            return view('contatos', ['titulo' => 'contatos (teste)']);
>>>>>>> fb0a5e9 (Quero me matar)
        }
        public static function cursos() 
        {
            return view('cursos');
        }
        public static function departamentos() 
        {
            return view('departamentos');
        }
    }
?>