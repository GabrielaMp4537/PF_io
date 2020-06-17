<?php namespace App\Controllers;

use App\Models\EntradaModel;

class entrada extends BaseController
{
	public function index()
	{
        $entradasModel = new EntradaModel($db);
        $entradas = $entradasModel->findAll();
        $entradas = array('entradas' => $entradas);
		return view('layouts/header') . view('entrada/index', $entradas) . view('layouts/footer');
	}

	//--------------------------------------------------------------------

    public function crear()
	{
        
		return view('layouts/header') . view('entrada/crear') . view('layouts/footer');
	}

    //--------------------------------------------------------------------
    
    public function guardar()
	{
        $request = \Config\Services::request();
        $entradasModel = new EntradaModel($db);
        $data = array(
            'titulo'=> $request->getPostGet('titulo'),
            'contenido'=> $request->getPostGet('contenido')
        );
        if(!($entradasModel->insert($data))){
            var_dump($entradasModel->errors);
        }else
		    return redirect()->to(base_url() . '/entrada');
	}

    //--------------------------------------------------------------------
    
    public function editar($id)
	{
        $entradasModel = new EntradaModel($db);
        $entradas = $entradasModel->find([$id]);
        $entradas = array('entradas' => $entradas);
		return view('layouts/header') . view('entrada/editar', $entradas) . view('layouts/footer');
	}

    //--------------------------------------------------------------------
    
    public function actualizar()
	{
        $model = new EntradaModel();
        $id = $this->request->getPost('id');
        $data = array(
            'titulo'  => $this->request->getPost('titulo'),
            'contenido' => $this->request->getPost('contenido'),
        );
        $model->update($id, $data);
        return redirect()->to( base_url() . '/entrada');
	}

    //--------------------------------------------------------------------
    
    public function borrar($id)
	{
        $model = new EntradaModel();
        //$id = $this->request->getPost('id');
        //var_dump($id);
        $model->delete(array('id'=>$id), false);
        //var_dump($model);
        return redirect()->to( base_url() . '/entrada');
	}

	//--------------------------------------------------------------------
}
