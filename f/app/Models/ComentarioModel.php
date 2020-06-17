<?php namespace App\Models;

use CodeIgniter\Model;

class ComentarioModel extends Model
{
    protected $table                = 'comentario';
    protected $primaryKey           = 'id';

    protected $returnType           = 'array';
    protected $useSoftDeletes       = true;

    protected $allowedFields        = ['usuario_id', 'pagina_id', 'contenido'];

    protected $useTimestamps        = false;
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    protected $validationRules      = ['usuario_id'=>'required', 'pagina_id'=>'required', 'contenido'=>'required'];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
}
