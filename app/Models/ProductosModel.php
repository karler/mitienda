<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class ProductosModel extends Model
    {
        protected $table      = 'productos';
        protected $primaryKey = 'idproducto';

        protected $returnType = 'array';
        protected $useSoftDeletes = false; //true

        protected $allowedFields = [
            'codigo',
            'nombre',
            'precio_venta',
            'precio_compra',
            'existencias',
            'stock_minimo',
            'inventariable',
            'idunidad',
            'idcategoria',
            'activo'
        ];

        protected $useTimestamps = true;
        protected $createdField  = 'fecha_create'; //created_at
        protected $updatedField  = 'fecha_update'; //updated_at
        protected $deletedField  = 'fecha_delete'; //deleted_at

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;
    } 