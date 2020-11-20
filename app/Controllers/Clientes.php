<?php 
    namespace App\Controllers;

    use CodeIgniter\Controller;
    use App\Models\ClientesModel;

    class Clientes extends BaseController
    {
        protected $clientes;
        
        public function __construct(){
            $this->clientes = new ClientesModel();
        }
        
        //Muestra todos los registros activo=1 de la tabla Clientes
        public function index($activo = 1)
        {
            $resultado = $this->clientes->where('activo',$activo)->findAll();
            $data =[ 
                'titulo' => 'Clientes',
                'datos' => $resultado
            ];
            echo view('plantilla/inicio');
            echo view('clientes/clientes',$data);
            echo view('plantilla/final');
        }

        //Carga el formulario Nuevo
        public function nuevo(){
            $data = [
                'titulo' => 'Clientes - Nuevo'
            ];
            echo view('plantilla/inicio');
            echo view('clientes/nuevo',$data);
            echo view('plantilla/final');
        }

        //Agrega los datos del formulario Nuevo a la Tabla Clientes
        public function insertar(){
            $valores = [
                'nombre' => $this->request->getPost('nombre'),
                'direccion' => $this->request->getPost('direccion'),
                'telefono' => $this->request->getPost('telefono'),
                'email' => $this->request->getPost('email')

            ];
            $this->clientes->save($valores);

            return redirect()->to(base_url()."/public/Clientes");
        }

        //Recoge el Id, busca los datos en la tabla y los envía al formulario editar
        public function editar($id){
            $resultado = $this->clientes->where('idcliente',$id)->first();
            $data = [
                'titulo' => 'Clientes - Editar',
                'datos' => $resultado
            ];
            echo view('plantilla/inicio');
            echo view('clientes/editar',$data);
            echo view('plantilla/final');
        }

        //Recibe los datos del formulario editar y los actualiza en la tabla
        public function actualizar(){
            $id = $this->request->getPost('idcliente');
            $valores = [
                'nombre' => $this->request->getPost('nombre'),
                'direccion' => $this->request->getPost('direccion'),
                'telefono' => $this->request->getPost('telefono'),
                'email' => $this->request->getPost('email')
            ];
            $this->clientes->update($id, $valores);
            
            return redirect()->to(base_url()."/public/Clientes");
        }

        //Recoge el Id, y lo actualiza en la tabla en el campo activo = 0
        public function eliminar($id){
            $valores = [
                'activo' => 0
            ];
            $this->clientes->update($id, $valores);

            return redirect()->to(base_url()."/public/Clientes");

        }

        //Muestra el view eliminados, que se parece mucho al Clientes, pero con el filtro activo=0
        public function vereliminados($activo = 0){
            $resultado = $this->clientes->where('activo',$activo)->findAll();
            $data =[ 
                'titulo' => 'Clientes eliminadas',
                'datos' => $resultado
            ];
            echo view('plantilla/inicio');
            echo view('clientes/eliminados',$data);
            echo view('plantilla/final');
        }

        //Recoge el Id, y lo actualiza en la tabla en el campo activo = 1
        public function restaurar($id){
            $valores = [
                'activo' => 1
            ];
            $this->clientes->update($id, $valores);

            return redirect()->to(base_url()."/public/clientes/vereliminados");
        }

    }