<?php namespace App\Models;

use CodeIgniter\Model;

class CategoriaModel extends Model
{
    protected $table                = 'categoria';
    protected $primaryKey           = 'id';

    protected $returnType           = 'array';
    protected $useSoftDeletes       = true;

    protected $allowedFields        = ['nombre'];

    protected $useTimestamps        = false;
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    protected $validationRules      = ['nombre'=>'required'];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
}
