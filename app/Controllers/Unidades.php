<?php 
    namespace App\Controllers;

    use CodeIgniter\Controller;
    use App\Models\UnidadesModel;

    class Unidades extends BaseController
    {
        //protected $resultado;
        
        public function __construct(){
            $this->unidades = new UnidadesModel();
        }
        
        public function index($activo = 1)
        {
            $resultado = $this->unidades->where('activo',$activo)->findAll();
            $data =[ 
                'titulo' => 'Unidades',
                'datos' => $resultado
            ];
            echo view('plantilla/inicio');
            echo view('unidades/unidades',$data);
            echo view('plantilla/final');
        }
    }