<?php 
    namespace App\Controllers;

    use CodeIgniter\Controller;
    use App\Models\UsuariosModel;
    use App\Models\RolesModel;
    use App\Models\CajasModel;

    class Usuarios extends BaseController
    {
        protected $usuarios;
        protected $roles;
        protected $cajas;
        
        public function __construct(){
            $this->usuarios = new UsuariosModel();
            $this->roles = new RolesModel();
            $this->cajas = new CajasModel();
            helper(['form']);
        }
        
        public function index($activo = 1)
        {
            $resultado = $this->usuarios->where('activo',$activo)->findAll();
            $roles = $this->roles->where('activo',1)->findAll();
            $cajas = $this->cajas->where('activo',1)->findAll();
            $data = [ 
                'titulo' => 'Usuarios',
                'roles' => $roles,
                'cajas' => $cajas,
                'datos' => $resultado
            ];
            echo view('plantilla/inicio');
            echo view('usuarios/usuarios',$data);
            echo view('plantilla/final');
        }

        public function nuevo(){
            $roles = $this->roles->where('activo',1)->findAll();
            $cajas = $this->cajas->where('activo',1)->findAll();
            $data =[ 
                'titulo' => 'Usuarios - Nuevo',
                'roles' => $roles,
                'cajas' => $cajas
            ];
            echo view('plantilla/inicio');
            echo view('usuarios/nuevo',$data);
            echo view('plantilla/final');
        }
        
        public function insertar(){
            $valores=[
                'usuario' => $this->request->getPost('usuario'),
                'nombre' => $this->request->getPost('nombre'),
                'password' => $this->request->getPost('password'),
                'idrol' => $this->request->getPost('idrol'),
                'idcaja' => $this->request->getPost('idcaja'),
            ];
            $this->usuarios->save($valores);
            return redirect()->to(base_url()."/public/Usuarios");
            
        }

        public function editar($id, $valid = null){
            $resultado = $this->usuarios->where('idusuario',$id)->first();
            $roles = $this->roles->where('activo',1)->findAll();
            $cajas = $this->cajas->where('activo',1)->findAll();
            $data = [ 
                'titulo' => 'Usuarios - Editar',
                'datos' => $resultado,
                'roles' => $roles,
                'cajas' => $cajas
            ];
            echo view('plantilla/inicio');
            echo view('usuarios/editar',$data);
            echo view('plantilla/final');
        }

        public function actualizar(){
            $id = $this->request->getPost('idusuario');
            $valores = [
                'usuario' => $this->request->getPost('usuario'),
                'nombre' => $this->request->getPost('nombre'),
                'password' => $this->request->getPost('password'),
                'idcaja' => $this->request->getPost('idcaja'),
                'idrol' => $this->request->getPost('idrol')
            ];
            $this->usuarios->update($id, $valores);
            return redirect()->to(base_url()."/public/Usuarios");
        }

        public function eliminar($id){
            $valores = [
                'activo' => 0
            ];
            $this->usuarios->update($id, $valores);

            return redirect()->to(base_url()."/public/Usuarios");
        }

        public function eliminados()
        {
            $resultado = $this->usuarios->where('activo',0)->findAll();
            $roles = $this->roles->where('activo',1)->findAll();
            $cajas = $this->cajas->where('activo',1)->findAll();
            $data = [ 
                'titulo' => 'Usuarios eliminadas',
                'roles' => $roles,
                'cajas' => $cajas,
                'datos' => $resultado
            ];
            echo view('plantilla/inicio');
            echo view('usuarios/eliminados',$data);
            echo view('plantilla/final');
        }

        public function restaurar($id){
            $valores = [
                'activo' => 1
            ];
            $this->usuarios->update($id, $valores);

            return redirect()->to(base_url()."/public/Usuarios/eliminados");
        }
    }