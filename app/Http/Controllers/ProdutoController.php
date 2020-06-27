<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        echo "<h4>Lista de Produtos</h4>";
        echo "<ul>";
        echo "<li>Macarrão</li>";
        echo "<li>Feijão/li>";
        echo "<li>Linguiça</li>";
        echo "<li>Sabão</li>";
        echo "<li>Colgate</li>";
        echo "</ul>";
    }
}
