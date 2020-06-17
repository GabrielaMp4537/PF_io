<?php namespace App\Models;

use CodeIgniter\Model;

class EntradaModel extends Model
{
    protected $table                = 'entrada';
    protected $primaryKey           = 'id';

    protected $returnType           = 'array';
    protected $useSoftDeletes       = true;

    protected $allowedFields        = ['titulo', 'contenido'];

    protected $useTimestamps        = false;
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    protected $validationRules      = [
                                        'titulo'=>   'required|alpha_numeric_space|min_length[3]|is_unique[entrada.titulo]',
                                        'contenido'=>'required'
                                    ];
    protected $validationMessages   = [
                                        'titulo'=> [
                                            'required' => 'El titulo es requerido.',
                                            'is_unique' => 'Este titulo ya fue registrado.',
                                            'alpha_numeric_space' => 'Solo se aceptan caracteres alpha numericos.'
                                        ],
                                        'contenido'=>[
                                            'required' => 'Debe ingresar el contenido.'
                                        ]
                                    ];
    protected $skipValidation       = false;

}
