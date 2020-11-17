<?php 
    namespace App\Controllers;

    use CodeIgniter\Controller;
    use App\Models\ProductosModel;
    use App\Models\UnidadesModel;
    use App\Models\CategoriasModel;

    class Productos extends BaseController
    {
        protected $productos;
        protected $unidades;
        protected $categorias;
        
        public function __construct(){
            $this->productos = new ProductosModel();
            $this->unidades = new UnidadesModel();
            $this->categorias = new CategoriasModel();
        }

        public function index($activo = 1)
        {
            $resultado = $this->productos->where('activo',$activo)->findAll();
            $data =[ 
                'titulo' => 'Productos',
                'datos' => $resultado
            ];
            echo view('plantilla/inicio');
            echo view('productos/productos',$data);
            echo view('plantilla/final');
        }

        //Carga el formulario Nuevo
        public function nuevo(){
            $unidades = $this->unidades->where('activo',1)->findAll();
            $categorias = $this->categorias->where('activo',1)->findAll();
            $data = [
                'titulo' => 'Producto - Nuevo',
                'unidades' => $unidades,
                'categorias' => $categorias
            ];
            echo view('plantilla/inicio');
            echo view('productos/nuevo',$data);
            echo view('plantilla/final');
        }

        //Agrega los datos del formulario Nuevo a la Tabla Unidades
        public function insertar(){
            $valores = [
                'codigo' => $this->request->getPost('codigo'),
                'nombre' => $this->request->getPost('nombre'),
                'precio_venta' => $this->request->getPost('precio_venta'),
                'precio_compra' => $this->request->getPost('precio_compra'),
                'existencias' => $this->request->getPost('existencias'),
                'stock_minimo' => $this->request->getPost('stock_minimo'),
                'inventariable' => $this->request->getPost('inventariable'),
                'idunidad' => $this->request->getPost('idunidad'),
                'idcategoria' => $this->request->getPost('idcategoria')

            ];
            $this->productos->save($valores);

            return redirect()->to(base_url()."/public/Productos");
        }

        //Recoge el Id, busca los datos en la tabla y los envía al formulario editar
        public function editar($id){
            $resultado = $this->productos->where('idproducto',$id)->first();
            $unidades = $this->unidades->where('activo',1)->findAll();
            $categorias = $this->categorias->where('activo',1)->findAll();
            $data = [
                'titulo' => 'Productos - Editar',
                'datos' => $resultado,
                'unidades' => $unidades,
                'categorias' => $categorias
            ];
            echo view('plantilla/inicio');
            echo view('productos/editar',$data);
            echo view('plantilla/final');
        }

        //Recibe los datos del formulario editar y los actualiza en la tabla
        public function actualizar(){
            $id = $this->request->getPost('idproducto');
            $valores = [
                'codigo' => $this->request->getPost('codigo'),
                'nombre' => $this->request->getPost('nombre'),
                'precio_venta' => $this->request->getPost('precio_venta'),
                'precio_compra' => $this->request->getPost('precio_compra'),
                'existencias' => $this->request->getPost('existencias'),
                'stock_minimo' => $this->request->getPost('stock_minimo'),
                'inventariable' => $this->request->getPost('inventariable'),
                'idproducto' => $this->request->getPost('idproducto'),
                'idcategoria' => $this->request->getPost('idcategoria')
            ];
            $this->productos->update($id, $valores);
            
            return redirect()->to(base_url()."/public/Productos");
        }


        //Recoge el Id, y lo actualiza en la tabla en el campo activo = 0
        public function eliminar($id){
            $valores = [
                'activo' => 0
            ];
            $this->productos->update($id, $valores);

            return redirect()->to(base_url()."/public/Productos");

        }

        //Muestra el view eliminados, que se parece mucho al unidades, pero con el filtro activo=0
        public function vereliminados($activo = 0){
            $resultado = $this->productos->where('activo',$activo)->findAll();
            $data =[ 
                'titulo' => 'Productos eliminadas',
                'datos' => $resultado
            ];
            echo view('plantilla/inicio');
            echo view('productos/eliminados',$data);
            echo view('plantilla/final');
        }

        //Recoge el Id, y lo actualiza en la tabla en el campo activo = 1
        public function restaurar($id){
            $valores = [
                'activo' => 1
            ];
            $this->productos->update($id, $valores);

            return redirect()->to(base_url()."/public/Productos/vereliminados");
        }
    }