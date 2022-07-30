<?php

namespace App\Controllers;

use App\Base\Controller;

class PortfolioController extends Controller
{
    public function index()
    {

        $user = 'root';
        $pass = '';

        try {
            $pdo = new \PDO('mysql:host=localhost;dbname=php_mvc', $user, $pass);
            echo '<small style="color:green; background: lightgreen; padding:10px; border-radius:8px;">Connection successful !</small>';
        } catch (\Throwable$th) {
            throw $th;
        }

        return views('portfolios/portfolio.php');
    }
}