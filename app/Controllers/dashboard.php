<?php namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\I18n\Time;
use App\Models\Usuarios_model;
use App\Models\Instrumentos_Model;
use App\Models\Usuarios_Testes_model;
use App\Models\Cupons_model;
use App\Models\Usuario_Meta_Model;

class Dashboard extends Controller
{
    public function index()
    {

        echo view('dashboard_view');

    }//index


	
    
}//controller