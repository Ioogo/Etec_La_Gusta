<?php 
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    class PrincipalController extends Controller

    {
        public static function principal() 
        {
            return view('principal');
        }
        public function contatos() 
        {
            var_dump($_GET);
            return view('contatos', ['titulo' => 'contatos (teste)']);
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