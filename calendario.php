<?php include_once 'include/templates/header.php'; ?>
 
  <section class="seccion contenedor">
    <h2>Calendario de Eventos</h2>

        <?php
            try {
                require_once('include/funciones/bd_conexion.php');
                $sql = " SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `icono`, `nombre_invitado`, `apellido_invitado` ";
                $sql .=  " FROM `eventos` ";
                $sql .=  " INNER JOIN categoria_evento ";
                $sql .=  " ON eventos.id_categoria_evento = categoria_evento.id_categoria ";
                $sql .=  " INNER JOIN `invitados` ";
                $sql .=  " ON eventos.id_inv = invitados.invitado_id ";
                $sql .=  " ORDER BY `evento_id` ";
                $resultado = $conn->query($sql);
            } catch (\Exception $e) {
                echo $e->getMessage();    
            }
        ?>
    <div class="calendario">
        <?php
            $calendario = array();
             while ($eventos = $resultado->fetch_assoc() ) { 

                //Obtiene la fecha del evento
                
                $fecha = $eventos['fecha_evento'];

                $evento = array(
                    'titulo' => $eventos['nombre_evento'],
                    'fecha' => $eventos['fecha_evento'],
                    'hora' => $eventos['hora_evento'],
                    'categoria' => $eventos['cat_evento'],
                    'icono' =>  $eventos ['icono'],
                    'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']
                );
                $calendario[$fecha][] = $evento;
            ?>

        <?php  } // While de fetch_assoc()   ?> 

        <?php 
            //Imprime todos los Eventos
            foreach($calendario as $dia => $lista_eventos) { ?>
                <h3>
                    <i class= "fa fa-calendar"></i>
                    <?php
                        //Unix
                        setlocale(LC_TIME, 'es_ES.utf-8');
                        //Windows
                        setlocale(LC_TIME, 'spanish.utf-8');

                    echo strftime("%A %d de %B del %Y", strtotime($dia) ); ?>
                </h3>
                <?php foreach($lista_eventos as $evento) { ?>
                <div class="dia">
                    <p class="titulo">
                        <?php echo $evento['titulo']; ?> 
                    </p>
                    <p class="hora">
                        <i class="fa fa-clock" arial-hidden="true"></i> 
                        <?php echo $evento['fecha'] . " " . $evento['hora']; ?>
                    </p>
                    <p>
                        <i class="fa <?php echo $evento['icono']; ?> " arial-hidden="true"></i>
                        <?php echo $evento['categoria']; ?>
                    </p>
                    <p>
                        <i class="fa fa-user" arial-hidden="true"></i> 
                        <?php echo $evento['invitado']; ?>
                    </p>
                </div>
            <?php } // Fin ForeEach Eventos ?>
        <?php }  // Fin ForEach de dias ?>
            
    
        <?php 
            $conn->close(); 
        ?>
    </div> <!-- .calendario -->
  </section>

<?php include_once 'include/templates/footer.php'; ?>
