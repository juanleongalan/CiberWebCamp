<?php include_once 'include/templates/header.php'; ?>
   <section class="seccion contenedor">
       <h2>Registro de Usuarios</h2>
       <form id="registro" class="registro" action="validar_registro.php" method="POST" >
            <div id="datos_usuarios" class="registro caja clearfix" >
                <div class="campo">
                    <label for="nombre">*Nombre:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="tu Nombre" >  
                </div>
                <div class="campo">
                    <label for="apellido">*Apellido:</label>
                    <input type="text" id="apellido" name="apellido" placeholder="tu Apellido" >  
                </div>
                <div class="campo">
                    <label for="email">*Email:</label>
                    <input type="text" id="email" name="email" placeholder="tu Email" >  
                </div> 
                <div id="error"></div>
            </div><!--#Final_datos_Usuarios-->
            
            <div id="paquetes" class="paquetes">
                <h3>Elige el tipo de entrada</h3>

                <ul class="lista-precios clearfix">
                    <li>
                        <div class="tabla-precio">
                            <h3>Pase por día (Viernes)</h3>
                            <p class="numero">30€</p>
                            <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                            </ul>
                            <div class="orden">
                                <label for="pase_dia">Entradas deseadas</label>
                                <input type="number" min="0" id="pase_dia" size="3" name="boletos[]" placeholder="0">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="tabla-precio">
                            <h3>Pase por 2 días (Viernes y Sábado)</h3>
                            <p class="numero">45€</p>
                            <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                            </ul>
                            <div class="orden">
                                <label for="pase_dosdias">Entradas deseadas</label>
                                <input type="number" min="0" id="pase_dosdias" size="3" name="boletos[]" placeholder="0">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="tabla-precio">
                            <h3>Todos los días</h3>
                            <p class="numero">60€</p>
                            <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                            </ul>
                            <div class="orden">
                                <label for="pase_completo">Entradas deseadas</label>
                                <input type="number" min="0" id="pase_completo" size="3" name="boletos[]" placeholder="0">
                            </div>
                        </div>
                    </li>
                </ul>
            </div><!--paquetes-->

            <div id="eventos" class="eventos clearfix">
                    <h3>Elige tus talleres</h3>
                    <div class="caja">
                        <div id="viernes" class="contenido-dia clearfix">
                            <h4>Viernes</h4>
                                <div>
                                    <p>Talleres:</p>
                                    <label><input type="checkbox" name="registro[]" id="taller_01" value="taller_01"><time>10:00</time> Ataques DDOS</label>
                                    <label><input type="checkbox" name="registro[]" id="taller_02" value="taller_02"><time>12:00</time> MSF</label>
                                    <label><input type="checkbox" name="registro[]" id="taller_03" value="taller_03"><time>14:00</time> SQLInjection</label>
                                    <label><input type="checkbox" name="registro[]" id="taller_04" value="taller_04"><time>17:00</time> Burp Suite</label>
                                    <label><input type="checkbox" name="registro[]" id="taller_05" value="taller_05"><time>19:00</time> DFIR en Windows</label>
                                </div>
                                <div>
                                    <p>Conferencias:</p>
                                    <label><input type="checkbox" name="registro[]" id="conf_01" value="conf_01"><time>10:00</time> Explotación de leaks de WhatsApp Web</label>
                                    <label><input type="checkbox" name="registro[]" id="conf_02" value="conf_02"><time>17:00</time> Analisis Forensis</label>
                                    <label><input type="checkbox" name="registro[]" id="conf_03" value="conf_03"><time>19:00</time> Seguridad en la Web</label>
                                </div>
                                <div>
                                    <p>Seminarios:</p>
                                    <label><input type="checkbox" name="registro[]" id="sem_01" value="sem_01"><time>10:00</time> Simulando ciberataques con Cymulate</label>
                                </div>
                        </div> <!--#viernes-->
                        <div id="sabado" class="contenido-dia clearfix">
                            <h4>Sábado</h4>
                            <div>
                                <p>Talleres:</p>
                                <label><input type="checkbox" name="registro[]" id="taller_06" value="taller_06"><time>10:00</time> Radioescucha y SDR</label>
                                <label><input type="checkbox" name="registro[]" id="taller_07" value="taller_07"><time>12:00</time> Jugando a los CTFs</label>
                                <label><input type="checkbox" name="registro[]" id="taller_08" value="taller_08"><time>14:00</time> Desarrolla tu BadUSB con WiFi y almacenamiento</label>
                                <label><input type="checkbox" name="registro[]" id="taller_09" value="taller_09"><time>17:00</time> Seguridad Wireless</label>
                                <label><input type="checkbox" name="registro[]" id="taller_10" value="taller_10"><time>19:00</time> Linux Server</label>
                                <label><input type="checkbox" name="registro[]" id="taller_11" value="taller_11"><time>21:00</time> Haching con PHP</label>
                            </div>
                            <div>
                                <p>Conferencias:</p>
                                <label><input type="checkbox" name="registro[]" id="conf_04" value="conf_04"><time>10:00</time> Caso Quebec DFIR </label>
                                <label><input type="checkbox" name="registro[]" id="conf_05" value="conf_05"><time>17:00</time> Packet Wars: Journey to Scapy</label>
                                <label><input type="checkbox" name="registro[]" id="conf_06" value="conf_06"><time>19:00</time> Introducción a la ingeniería inversa de Android Apps</label>
                            </div>
                            <div>
                                <p>Seminarios:</p>
                                <label><input type="checkbox" name="registro[]" id="sem_02" value="sem_02"><time>10:00</time> Inicio a la programación</label>
                                <label><input type="checkbox" name="registro[]" id="sem_03" value="sem_03"><time>17:00</time> La importancia de los Captcha</label>
                            </div>
                        </div> <!--#sabado-->
                        <div id="domingo" class="contenido-dia clearfix">
                            <h4>Domingo</h4>
                            <div>
                                <p>Talleres:</p>
                                <label><input type="checkbox" name="registro[]" id="taller_12" value="taller_12"><time>10:00</time> Seguridad WPA3</label>
                                <label><input type="checkbox" name="registro[]" id="taller_13" value="taller_13"><time>12:00</time> Creacion de API</label>
                                <label><input type="checkbox" name="registro[]" id="taller_14" value="taller_14"><time>14:00</time> JavaScript de 0 a 100</label>
                                <label><input type="checkbox" name="registro[]" id="taller_15" value="taller_15"><time>17:00</time> Hacking WordPress</label>
                                <label><input type="checkbox" name="registro[]" id="taller_16" value="taller_16"><time>19:00</time> Carding</label>
                            </div>
                            <div>
                                <p>Conferencias:</p>
                                <label><input type="checkbox" name="registro[]" id="conf_07" value="conf_07"><time>10:00</time> Navega Seguro con una VPN</label>
                                <label><input type="checkbox" name="registro[]" id="conf_08" value="conf_08"><time>17:00</time> Firewalls OpenSource</label>
                                <label><input type="checkbox" name="registro[]" id="conf_09" value="conf_09"><time>19:00</time> Phishing, Pharming, Vishing, and Smishing</label>
                            </div>
                            <div>
                                <p>Seminarios:</p>
                                <label><input type="checkbox" name="registro[]" id="sem_04" value="sem_04"><time>14:00</time> Creando una Botnet en una mañana</label>
                                <label><input type="checkbox" name="registro[]" id="sem_05" value="sem_05"><time>17:00</time> Creando un Portal Cautivo en una tarde</label>
                            </div>
                        </div> <!--#domingo-->
                    </div><!--.caja-->
            </div> <!--#eventos-->
            <div id="resumen" class="resumen" >
                <h3>Pago y Extras</h3>
                <div class="caja clearfix">
                    <div class="extras">
                        <div class="orden">
                            <label for="camisa_evento">Camiseta del Evento 18€ <small>(promoción 7% dto.)</small></label>
                            <input type="number"  min="0" id="camisa_evento" name="pedido_camisas" size="3" placeholder="0">
                        </div><!--.orden-->
                        <div class="orden">
                            <label for="etiquetas">Paquete de 10 etiquetas 8€ <small>(MSF. XPLOIT, HxC, Malware)</small></label>
                            <input type="number"  min="0" id="etiquetas" name="pedido_etiquetas" size="3" placeholder="0">
                        </div><!--.orden-->
                        <div class="orden">
                            <label for="regalo">Seleccione un regalo</label><br><br>
                            <select id="regalo" name="regalo" required>
                                <option value="">-- Seleccione un regalo --</option>
                                <option value="1">Pegatina</option>
                                <option value="2">Llavero</option>
                                <option value="3">Gorra</option>
                            </select>
                        </div><!--.orden-->
                        <input id="calcular" type="button" class="button" value="Calcular" ><br>
                    </div><!--extras-->
                    
                    <div class="total">
                        <p>Resumen:</p>
                        <div id="lista-producto">

                        </div>
                        <p>Total:</p>
                        <div id="suma-total" >

                        </div>
                        <input type="hidden" name="total_pedido" id="total_pedido">
                        <input id="btnRegistro" type="submit" name="submit" class="button" value="Pagar">
                    </div><!--Total-->
                </div><!--Caja-->
            </div><!--Resumen-->
       </form>
   </section>

<?php include_once 'include/templates/footer.php'; ?>