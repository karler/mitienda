<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class UsuariosModel extends Model
    {
        protected $table      = 'usuarios';
        protected $primaryKey = 'idusuario';

        protected $returnType = 'array';
        protected $useSoftDeletes = false; //true

        protected $allowedFields = ['usuario','password','nombre','idcaja','idrol','activo','fecha_create','fecha_update'];

        protected $useTimestamps = true;
        protected $createdField  = 'fecha_create'; //created_at
        protected $updatedField  = 'fecha_update'; //updated_at
        protected $deletedField  = 'fecha_delete'; //deleted_at

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;
    } 