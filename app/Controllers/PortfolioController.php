<?php

namespace App\Controllers;

use App\Base\Controller;

class PortfolioController extends Controller
{
    public function index()
    {

        try {
            $dbh = new PDO('mysql:host=localhost;dbname=php_mvc', 'root', '');
            foreach ($dbh->query('SELECT * from FOO') as $row) {
                print_r($row);
            }
            $dbh = null;
        } catch (PDOException $e) {
            print "Eroor!:" . $e->getMessage() . "<br/>";
            die();
        }

        return views('portfolios/portfolio.php');
    }
}