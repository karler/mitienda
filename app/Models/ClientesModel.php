<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class ClientesModel extends Model
    {
        protected $table      = 'clientes';
        protected $primaryKey = 'idcliente';

        protected $returnType = 'array';
        protected $useSoftDeletes = false; //true

        protected $allowedFields = ['nombre','direccion','telefono','email','activo'];

        protected $useTimestamps = true;
        protected $createdField  = 'fecha_create'; //created_at
        protected $updatedField  = 'fecha_update'; //updated_at
        protected $deletedField  = 'fecha_delete'; //deleted_at

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;
    } 