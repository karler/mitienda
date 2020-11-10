<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class CategoriasModel extends Model
    {
        protected $table      = 'categorias';
        protected $primaryKey = 'idcategoria';

        protected $returnType = 'array';
        protected $useSoftDeletes = false; //true

        protected $allowedFields = ['nombre','activo'];

        protected $useTimestamps = false;
        protected $createdField  = 'fecha_create'; //created_at
        protected $updatedField  = 'fecha_update'; //updated_at
        protected $deletedField  = 'fecha_delete'; //deleted_at

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;
    } 