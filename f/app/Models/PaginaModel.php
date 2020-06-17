<?php namespace App\Models;

use CodeIgniter\Model;

class PaginaModel extends Model
{
    protected $table                = 'pagina';
    protected $primaryKey           = 'id';

    protected $returnType           = 'array';
    protected $useSoftDeletes       = true;

    protected $allowedFields        = ['titulo', 'contenido', 'categoria_id'];

    protected $useTimestamps        = false;
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    protected $validationRules      = ['titulo'=>'required', 'contenido'=>'required', 'categoria_id'=>'required'];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
}
