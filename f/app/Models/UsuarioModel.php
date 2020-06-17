<?php namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table                = 'usuario';
    protected $primaryKey           = 'id';

    protected $returnType           = 'array';
    protected $useSoftDeletes       = true;

    protected $allowedFields        = ['nombre', 'correo', 'contraseña', 'permisos'];

    protected $useTimestamps        = false;
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    protected $validationRules      = ['nombre'=>'required', 'correo'=>'required', 'contraseña'=>'required', 'permisos'=>'require'];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
}
