(function() {
    "use strict";

    var regalo = document.getElementById('regalo');
    
    document.addEventListener('DOMContentLoaded', function() {

        //Datos de Usuarios
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');

        // Campos Pases
        var pase_dia = document.getElementById('pase_dia');
        var pase_dosdias = document.getElementById('pase_dosdias');
        var pase_completo = document.getElementById('pase_completo');

        //Botones y Divs
        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var productList = document.getElementById('lista-producto');
        
        var suma = document.getElementById('suma-total');
        
        
        
        //Extras 
        var camisas = document.getElementById('camisa_evento');
        var etiquetas = document.getElementById('etiquetas');

        if(document.getElementById('calcular')) {
            var botonRegistro = document.getElementById('btnRegistro');
                botonRegistro.disabled = true;
        }

            

        if(document.getElementById('calcular')) {


            //Eventos
            calcular.addEventListener('click', calcularMontos);
            pase_dia.addEventListener('blur', mostrarDias);
            pase_dosdias.addEventListener('blur', mostrarDias);
            pase_completo.addEventListener('blur', mostrarDias);

            // Aviso para que rellene el campo de registro
            // Validaciones

            nombre.addEventListener('blur', validarCampos);
            apellido.addEventListener('blur', validarCampos);
            email.addEventListener('blur', validarCampos);
            email.addEventListener('blur', validarMail);

            function validarCampos() {
                if(this.value == '') {
                    errorDiv.style.display= 'block';
                    errorDiv.innerHTML = "Los campos con * son obligatorios";
                    this.style.border = '1px solid red';
                    errorDiv.style.border = '1px solid red';
                } else {
                    errorDiv.style.display = 'none';
                    this.style.border = '1px solid #cccccc';
                }
            }

            function validarMail(){
                if(this.value.indexOf("@") > -1) {
                    errorDiv.style.display = 'none';
                    this.style.border = '1px solid #cccccc'; 
                } else {
                    errorDiv.style.display= 'block';
                    errorDiv.innerHTML = "Inserte un correo válido";
                    this.style.border = '1px solid red';
                    errorDiv.style.border = '1px solid red';
                }
            }


            function calcularMontos(event){
                event.preventDefault();
                if(regalo.value === '') {
                    alert("Debes elegir un regalo");
                    regalo.focus();
                } else {
                    var boletosDia = parseInt(pase_dia.value, 10) || 0,
                        boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,  
                        boletoCompleto = parseInt(pase_completo.value, 10) || 0, 
                        cantCamisas = parseInt(camisas.value, 10) || 0, 
                        cantEtiquetas = parseInt(etiquetas.value, 10) || 0;

                    var totalPagar = (boletosDia * 30) + (boletos2Dias * 45) + (boletoCompleto * 60) + ((cantCamisas * 18) * .93) + (cantEtiquetas * 8);

                    var listadoProductos = [];
                    
                    if(boletosDia >= 1) {
                        listadoProductos.push(boletosDia + ' Pase por dias');  
                    }
                    if(boletos2Dias >= 1) {
                        listadoProductos.push(boletos2Dias + ' Pase por 2 dias');
                    }
                    if(boletoCompleto >= 1) {
                    listadoProductos.push(boletoCompleto + ' Pases Completos');   
                    }
                    if(cantCamisas >= 1) {
                        listadoProductos.push(cantCamisas + ' Camisas');   
                    }
                    if(cantEtiquetas >= 1) {
                        listadoProductos.push(cantEtiquetas + ' Etiquetas');   
                    }
                    //Resumen Calcular
                    productList.style.display ="block";
                    productList.innerHTML = '';
                    for (var i = 0; i < listadoProductos.length; i++) {
                        productList.innerHTML += listadoProductos[i] + '<br/>';
                    }     
                    if(nombre.value == '' || apellido.value == '' || email.value == '') {
                        alert('Debes llenar todos los campos');
                        nombre.focus();
                    } else {
                        suma.innerHTML = totalPagar.toFixed(2) + " €";
                        document.getElementById('suma-total').value = totalPagar;
                    }
                    botonRegistro.disabled= false;
                    document.getElementById('total_pedido').value = totalPagar;
                }
            }
            function mostrarDias(){
                var boletosDia = parseInt(pase_dia.value, 10) || 0,
                    boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,  
                    boletoCompleto = parseInt(pase_completo.value, 10) || 0;

                var diasElegidos = [];

                if (boletosDia > 0) {
                    diasElegidos.push('viernes');
                }
                if (boletos2Dias > 0) {
                    diasElegidos.push('viernes', 'sabado');
                }
                if (boletoCompleto > 0) {
                    diasElegidos.push('viernes', 'sabado', 'domingo');
                }

                for (var i = 0; i < diasElegidos.length; i ++) {
                    document.getElementById(diasElegidos[i]).style.display = 'block';
                }
            }

        }
            //MAPA
        if(document.getElementById('mapa')) {

            var map = L.map('mapa').setView([40.347476, -3.696213], 16);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
            
            L.marker([40.347476, -3.696213]).addTo(map)
                // .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
                // .openPopup()
                .bindTooltip('CiberWebCamp 2020 <br> Entradas Disponibles')
                .openTooltip();
        }

    }); //DOM CONTENT LOADED
})();


$(function() {


    //Lettering 

    $('.nombre-sitio').lettering();

    //Agregar clase a menú

    $('body.conferencia .navegacion-principal a:contains("Conferencia")').addClass('activo');
    $('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
    $('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');

    // Menu fijo
    var windowHeight = $(window).height();
    var barraAltura = $('.barra').innerHeight();

    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll > windowHeight) {
            $('.barra').addClass('fixed');
            $('body').css({'margin-top': barraAltura +'px'});
        } else {
            $('.barra').removeClass('fixed');
            $('body').css({'margin-top': '0px'});
        }
    });

    // Menu Responsive

    $('.menu-movil').on('click', function(){
        $('.navegacion-principal').slideToggle();
    });


    //Programa de conferencia

    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');

    $('.menu-programa a').on('click', function(){
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();
        var enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);
        return false;
    });

    // Animaciones para los numeros 
    var resumenLista = jQuery('.resumen-evento');
    if(resumenLista.length > 0) {
        $('.resumen-evento').waypoint(function(){

            $('.resumen-evento li:nth-child(1) p').animateNumber({number: 6}, 1200);
            $('.resumen-evento li:nth-child(2) p').animateNumber({number: 16}, 1200);
            $('.resumen-evento li:nth-child(3) p').animateNumber({number: 3}, 1500);
            $('.resumen-evento li:nth-child(4) p').animateNumber({number: 9}, 1200);
        }, {
            offset: '60%'
        });
    }



    //Animaciones Cuenta regresiva
    $('.cuenta-regresiva').countdown('2020/1/24 09:00:00', function(event){
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));

    });
    // Colorbox

    $('.invitado-info').colorbox({inline:true, width:"50%"});

});