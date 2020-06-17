<?php namespace App\Controllers;

use App\Models\CategoriaModel;

class categoria extends BaseController
{
	public function index()
	{
        $model = new CategoriaModel($db);
        $datos = $model->findAll();
        $datos = array('datos' => $datos);
		return view('layouts/header') . view('categoria/index', $datos) . view('layouts/footer');
	}

	//--------------------------------------------------------------------

    public function crear()
	{
        
		return view('layouts/header') . view('categoria/crear') . view('layouts/footer');
	}

    //--------------------------------------------------------------------
    
    public function guardar()
	{
        $model = new CategoriaModel($db);
        $data = array(
            'nombre'=> $this->request->getPostGet('nombre')
        );
        if(!($model->insert($data))){
            var_dump($model->errors);
        }else
		    return redirect()->to(base_url() . '/categoria');
	}

    //--------------------------------------------------------------------
    
    public function editar($id)
	{
        $model = new CategoriaModel($db);
        $datos = $model->find([$id]);
        $datos = array('datos' => $datos);
		return view('layouts/header') . view('categoria/editar', $datos) . view('layouts/footer');
	}

    //--------------------------------------------------------------------
    
    public function actualizar()
	{
        $model = new CategoriaModel();
        $id = $this->request->getPost('id');
        $data = array(
            'nombre'=> $this->request->getPostGet('nombre')
        );
        $model->update($id, $data);
        return redirect()->to( base_url() . '/categoria');
	}

    //--------------------------------------------------------------------
    
    public function borrar($id)
	{
        $model = new CategoriaModel();
        $model->delete(array('id'=>$id), false);
        return redirect()->to( base_url() . '/categoria');
	}

	//--------------------------------------------------------------------
}
