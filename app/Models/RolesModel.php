<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class RolesModel extends Model
    {
        protected $table      = 'roles';
        protected $primaryKey = 'idrol';

        protected $returnType = 'array';
        protected $useSoftDeletes = false; //true

        protected $allowedFields = ['nombre','activo','fecha_create','fecha_update'];

        protected $useTimestamps = true;
        protected $createdField  = 'fecha_create'; //created_at
        protected $updatedField  = 'fecha_update'; //updated_at
        protected $deletedField  = 'fecha_delete'; //deleted_at

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;
    } 