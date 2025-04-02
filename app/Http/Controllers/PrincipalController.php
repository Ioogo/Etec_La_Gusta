<?php 
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    class PrincipalController extends Controller

    {
        public static function principal() 
        {
            return view('principal');
        }
        public static function contatos() 
        {
            return view('contatos');
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