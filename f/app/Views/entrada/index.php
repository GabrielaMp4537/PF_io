<section class="content mx-3" style="width:98%">
        <!-- Default box -->
        <div class="card mt-3" style="width:100%">
            <div class="card-header">
                <h3 class="card-title" >Entradas</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Reducir">
                        <i class="fas fa-minus"></i>
                    </button>
                    <a href="<?php echo base_url(); ?>/entrada/crear">
                    <button  type="button" class="btn btn-tool" data-toggle="tooltip" title="Añadir">
                        <i class="fas fa-folder-plus"></i>
                    </button></a>
                </div>
            </div>
            <div class="card-body p-0 table-responsive" style="display: block;">
                <table class="table table-striped projects ">
                    <thead>
                        <tr>
                            <th style="width:  1%">#</th>
                            <th style="width: 20%" > Titulo </th>
                            <th style="width: 59%" > Contenido </th>
                            <th style="width: 20%" ></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $a = 1;
                            foreach ($entradas as $entrada){
                                echo '<tr>
                                    <td>'
                                        .($a++).
                                    '</td>
                                    <td>
                                        <font _mstmutation="1" _msthash="2935465" _msttexthash="457158"><a _mstmutation="1" _istranslated="1">'. $entrada['titulo'].'</a> <br _mstmutation="1" _istranslated="1"></font>
                                    </td>
                                    <td >
                                        <font _mstmutation="1" _msthash="2935465" _msttexthash="457158"><a _mstmutation="1" _istranslated="1">' . $entrada['contenido'] . '</a> <br _mstmutation="1" _istranslated="1"></font>
                                    </td>
                                    <td class="project-actions text-right d-flex flex-wrap bd-highlight mb-3">
                                        <div class="p-2 bd-highlight mb-0 p-0">
                                            <a class="btn btn-info btn-sm" href="'. base_url() .'/entrada/editar/'.$entrada['id'].'">
                                                <i class="fas fa-pencil-alt"></i>
                                                <font class="d-none d-sm-inline-block" _mstmutation="1" _msthash="3215953" _msttexthash="75699"> Editar </font>
                                            </a>
                                        </div>
                                        <div class="p-2 bd-highlight mb-0 p-0">
                                            <a class="btn btn-danger btn-sm" href="'. base_url() .'/entrada/borrar/'.$entrada['id'].'">
                                                <i class="fas fa-trash"></i>
                                                <font class="d-none d-sm-inline-block"> Eliminar </font>
                                            </a>
                                        </div>
                                    </td>
                                </tr>';
                            }
                        ?>

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>