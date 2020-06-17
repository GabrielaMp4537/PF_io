<section class="content mx-3">
        <!-- Default box -->
        <div class="card mt-3" style="width:100%">
            <div class="card-header">
                <h3 class="card-title" >Crear pagina</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse2">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0" style="display: block;">
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-12">
                                <!-- jquery validation -->
                                <!-- form start -->
                                <?php
                                    echo  form_open( base_url() . '/pagina/actualizar') .
                                    '<div class="container mb-4 mt-3">
                                    <div class="form-group">
                                        <label for="titulo">Titulo</label>'
                                        . form_input('titulo', ($datos['0'])['titulo'], array('type'=>'text','class'=>'form-control','id'=>'titulo','placeholder'=>'Titulo ...')) .
                                        '<!-- textarea -->
                                    </div>
                                    <div class="form-group">
                                        <label for="cont">Contenido</label>
                                        '. form_textarea('contenido', ($datos['0'])['contenido'], array('rows'=>'3','class'=>'form-control','id'=>'cont','placeholder'=>'Contenido ...')) .'
                                    </div>
                                    <div class="form-group">
                                        <select class="custom-select" name="categoria_id">
                                            <option>Seccione una categoria</option>';
                                    foreach($categorias as $categoria){
                                        if(($datos['0'])['categoria_id']===$categoria['id'])
                                            echo '<option value="' . $categoria['id'] .'" selected>'. $categoria['nombre'] .'</option>';
                                        else
                                            echo '<option value="' . $categoria['id'] .'">'. $categoria['nombre'] .'</option>';
                                    }
                                    echo '</select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>' .
                                form_hidden('id', ($datos['0'])['id']).
                                form_close();
                                ?>
                            </div>
                            <!--/.col (left) -->
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>}
