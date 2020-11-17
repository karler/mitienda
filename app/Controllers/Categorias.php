<?php 
    namespace App\Controllers;

    use CodeIgniter\Controller;
    use App\Models\CategoriasModel;

    class Categorias extends BaseController
    {
        protected $categorias;
        
        public function __construct(){
            $this->categorias = new CategoriasModel();
        }
        
        //Muestra todos los registros activo=1 de la tabla unidades
        public function index($activo = 1)
        {
            $resultado = $this->categorias->where('activo',$activo)->findAll();
            $data =[ 
                'titulo' => 'Categorias',
                'datos' => $resultado
            ];
            echo view('plantilla/inicio');
            echo view('categorias/categorias',$data);
            echo view('plantilla/final');
        }

        //Carga el formulario Nuevo
        public function nuevo(){
            $data = [
                'titulo' => 'Categorias - Nuevo'
            ];
            echo view('plantilla/inicio');
            echo view('categorias/nuevo',$data);
            echo view('plantilla/final');
        }

        //Agrega los datos del formulario Nuevo a la Tabla Unidades
        public function insertar(){
            $valores = [
                'nombre' => $this->request->getPost('nombre')
            ];
            $this->categorias->save($valores);

            return redirect()->to(base_url()."/public/Categorias");
        }

        //Recoge el Id, busca los datos en la tabla y los envía al formulario editar
        public function editar($id){
            $resultado = $this->categorias->where('idcategoria',$id)->first();
            $data = [
                'titulo' => 'Categorias - Editar',
                'datos' => $resultado
            ];
            echo view('plantilla/inicio');
            echo view('categorias/editar',$data);
            echo view('plantilla/final');
        }

        //Recibe los datos del formulario editar y los actualiza en la tabla
        public function actualizar(){
            $id = $this->request->getPost('idcategoria');
            $valores = [
                'nombre' => $this->request->getPost('nombre')
            ];
            $this->categorias->update($id, $valores);
            
            return redirect()->to(base_url()."/public/Categorias");
        }
        //Recoge el Id, y lo actualiza en la tabla en el campo activo = 0
        public function eliminar($id){
            $valores = [
                'activo' => 0
            ];
            $this->categorias->update($id, $valores);

            return redirect()->to(base_url()."/public/Categorias");

        }

        //Muestra el view eliminados, que se parece mucho al unidades, pero con el filtro activo=0
        public function vereliminados($activo = 0){
            $resultado = $this->categorias->where('activo',$activo)->findAll();
            $data =[ 
                'titulo' => 'Categorias eliminadas',
                'datos' => $resultado
            ];
            echo view('plantilla/inicio');
            echo view('categorias/eliminados',$data);
            echo view('plantilla/final');
        }

        //Recoge el Id, y lo actualiza en la tabla en el campo activo = 1
        public function restaurar($id){
            $valores = [
                'activo' => 1
            ];
            $this->categorias->update($id, $valores);

            return redirect()->to(base_url()."/public/Categorias/vereliminados");
        }
    }