<?php 
    namespace App\Controllers;

    use CodeIgniter\Controller;
    use App\Models\ConfiguracionesModel;

    class Configuraciones extends BaseController
    {
        protected $configuraciones;
        
        public function __construct(){
            $this->configuraciones = new ConfiguracionesModel();
        }
        
        //Muestra todos los registros activo=1 de la tabla configuraciones
        public function index($activo = 1)
        {
            $resultado = $this->configuraciones->findAll();
            $data =[ 
                'titulo' => 'Configuraciones',
                'datos' => $resultado
            ];
            echo view('plantilla/inicio');
            echo view('configuraciones/configuraciones',$data);
            echo view('plantilla/final');
        }

        //Recoge el Id, busca los datos en la tabla y los envía al formulario editar
        public function editar($id){
            $resultado = $this->configuraciones->where('idconfiguracion',$id)->first();
            $data = [
                'titulo' => 'Configuraciones - Editar',
                'datos' => $resultado
            ];
            echo view('plantilla/inicio');
            echo view('configuraciones/editar',$data);
            echo view('plantilla/final');
        }

        //Recibe los datos del formulario editar y los actualiza en la tabla
        public function actualizar(){
            $id = $this->request->getPost('idconfiguracion');
            $valores = [
                'nombre' => $this->request->getPost('nombre'),
                'valor' => $this->request->getPost('valor')
            ];
            $this->configuraciones->update($id, $valores);
            
            return redirect()->to(base_url()."/public/Configuraciones");
        }

    }