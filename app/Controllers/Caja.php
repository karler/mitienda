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
        
        public function index($activo = 1)
        {
            $resultado = $this->clientes->where('activo',$activo)->findAll();
            $data = [ 
                'titulo' => 'Categorías',
                'datos' => $resultado
            ];
            echo view('cabecera');
            echo view('clientes/clientes',$data);
            echo view('pie');
        }

        public function nuevo(){
            $data =[ 
                'titulo' => 'Clientes - Nuevo'
            ];
            echo view('cabecera');
            echo view('clientes/nuevo',$data);
            echo view('pie');
        }
        
        public function insertar(){
            
            $valores=[
                'nombre' => $this->request->getPost('nombre'),
                'direccion' => $this->request->getPost('direccion'),
                'telefono' => $this->request->getPost('telefono'),
                'email' => $this->request->getPost('email')
            ];
            $this->clientes->save($valores);

            return redirect()->to(base_url()."/public/Clientes");
        }

        public function editar($id){
            $resultado = $this->clientes->where('idcliente',$id)->first();
            $data = [ 
                'titulo' => 'Clientes - Editar',
                'datos' => $resultado
            ];
            echo view('cabecera');
            echo view('clientes/editar',$data);
            echo view('pie');
        }

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

        public function eliminar($id){
            $valores = [
                'activo' => 0
            ];
            $this->clientes->update($id, $valores);

            return redirect()->to(base_url()."/public/Clientes");
        }

        public function eliminados($activo = 0)
        {
            $resultado = $this->clientes->where('activo',$activo)->findAll();
            $data = [ 
                'titulo' => 'Categorías eliminadas',
                'datos' => $resultado
            ];
            echo view('cabecera');
            echo view('clientes/eliminados',$data);
            echo view('pie');
        }

        public function restaurar($id){
            $valores = [
                'activo' => 1
            ];
            $this->clientes->update($id, $valores);

            return redirect()->to(base_url()."/public/Clientes/eliminados");
        }
    }