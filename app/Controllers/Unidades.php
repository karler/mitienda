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
        
        //Muestra todos los registros activo=1 de la tabla unidades
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

        //Carga el formulario Nuevo
        public function nuevo(){
            $data = [
                'titulo' => 'Unidades - Nuevo'
            ];
            echo view('plantilla/inicio');
            echo view('unidades/nuevo',$data);
            echo view('plantilla/final');
        }

        //Agrega los datos del formulario Nuevo a la Tabla Unidades
        public function insertar(){
            $valores = [
                'nombre' => $this->request->getPost('nombre'),
                'nombre_corto' => $this->request->getPost('nombre_corto')

            ];
            $this->unidades->save($valores);

            return redirect()->to(base_url()."/public/Unidades");
        }

        //Recoge el Id, busca los datos en la tabla y los envía al formulario editar
        public function editar($id){
            $resultado = $this->unidades->where('idunidad',$id)->first();
            $data = [
                'titulo' => 'Unidades - Editar',
                'datos' => $resultado
            ];
            echo view('plantilla/inicio');
            echo view('unidades/editar',$data);
            echo view('plantilla/final');
        }

        //Recibe los datos del formulario editar y los actualiza en la tabla
        public function actualizar(){
            $id = $this->request->getPost('idunidad');
            $valores = [
                'nombre' => $this->request->getPost('nombre'),
                'nombre_corto' => $this->request->getPost('nombre_corto')
            ];
            $this->unidades->update($id, $valores);
            
            return redirect()->to(base_url()."/public/Unidades");
        }

        //Recoge el Id, y lo actualiza en la tabla en el campo activo = 0
        public function eliminar($id){
            $valores = [
                'activo' => 0
            ];
            $this->unidades->update($id, $valores);

            return redirect()->to(base_url()."/public/Unidades");

        }

        //Muestra el view eliminados, que se parece mucho al unidades, pero con el filtro activo=0
        public function vereliminados($activo = 0){
            $resultado = $this->unidades->where('activo',$activo)->findAll();
            $data =[ 
                'titulo' => 'Unidades eliminadas',
                'datos' => $resultado
            ];
            echo view('plantilla/inicio');
            echo view('unidades/eliminados',$data);
            echo view('plantilla/final');
        }

        //Recoge el Id, y lo actualiza en la tabla en el campo activo = 1
        public function restaurar($id){
            $valores = [
                'activo' => 1
            ];
            $this->unidades->update($id, $valores);

            return redirect()->to(base_url()."/public/Unidades/vereliminados");
        }

    }