<?php namespace App\Controllers;

use App\Models\PaginaModel;
use App\Models\CategoriaModel;

class pagina extends BaseController
{
	public function index()
	{
        $model = new PaginaModel($db);
        $datos = $model->findAll();
        $datos = array('datos' => $datos);
		return view('layouts/header') . view('pagina/index', $datos) . view('layouts/footer');
	}

	//--------------------------------------------------------------------

    public function crear()
	{
        $model = new CategoriaModel($db);
        $categorias = $model->findAll();
        $categorias = array('categorias' => $categorias);
		return view('layouts/header') . view('pagina/crear', $categorias) . view('layouts/footer');
	}

    //--------------------------------------------------------------------
    
    public function guardar()
	{
        $model = new PaginaModel($db);
        $data = array(
            'titulo'=> $this->request->getPostGet('titulo'),
            'contenido'=> $this->request->getPostGet('contenido'),
            'categoria_id'=> $this->request->getPostGet('categoria_id')
        );
        if(!($model->insert($data))){
            var_dump($model->errors);
        }else
		    return redirect()->to(base_url() . '/pagina');
	}

    //--------------------------------------------------------------------
    
    public function editar($id)
	{
        $model = new PaginaModel($db);
        $datos = $model->find([$id]);
        $model2 = new CategoriaModel($db);
        $categorias = $model2->findAll();
        $datos = array('datos' => $datos,'categorias' => $categorias);
		return view('layouts/header') . view('pagina/editar', $datos) . view('layouts/footer');
	}

    //--------------------------------------------------------------------
    
    public function actualizar()
	{
        $model = new PaginaModel();
        $id = $this->request->getPost('id');
        $data = array(
            'titulo'  => $this->request->getPost('titulo'),
            'contenido' => $this->request->getPost('contenido'),
            'categoria_id'=> $this->request->getPostGet('categoria_id')
        );
        $model->update($id, $data);
        return redirect()->to( base_url() . '/pagina');
	}

    //--------------------------------------------------------------------
    
    public function borrar($id)
	{
        $model = new PaginaModel();
        $model->delete(array('id'=>$id), false);
        return redirect()->to( base_url() . '/pagina');
	}

	//--------------------------------------------------------------------
}
