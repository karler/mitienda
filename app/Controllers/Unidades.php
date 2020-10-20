<?php 
    namespace App\Controllers;

    use CodeIgniter\Controller;
    use App\Models\UnidadesModel;

    class Unidades extends BaseController
    {
        protected $unidades;
        
        public function __construct(){
            $this->unidades = new UnidadesModel();
        }
        
        public function index($activo = 1)
        {
            $unidades = $this->unidades->where('activo',$activo)->findAll();
            $data =[ 
                'titulo' => 'Unidades',
                'datos' => $unidades
            ];
            echo view('cabecera');
            echo view('unidades/unidades',$data);
            echo view('pie');
        }

    }
