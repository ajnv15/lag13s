<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="es-ES">
 <head>
   <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
   <script>//hacer prueba para interno y externo
   $(document).ready(function(){
           $("#u747").click(function(){
              var user = $("#widgetu748_input").val();
              var pass = $("#widgetu754_input").val();
              var confirmapass = $("#widgetu759_input").val();

              if (pass==confirmapass){
                $.ajax({
                  method: "post",
                  url: "postInterno",
                  data: "&matricula="+user+"&pass="+pass,
                  success: function(data){
                    $("#u753-4").html(data);
                  }
         });
       }
       else {
         $("#u753-4").html("tu password y confirmar password no coinciden");
       }

       });


       $("#u2205").click(function(){
          var nombre = $("#widgetu2201_input").val();
          var email = $("#widgetu2192_input").val();
          var pass = $("#widgetu2222_input").val();
          var confirmapass = $("#widgetu2214_input").val();
          if(pass==confirmapass){
            $.ajax({
              method: "post",
              url: "postExterno",
              data: "&email="+email+"&nombre="+nombre+"&pass="+pass,
              success: function(data){
                $("#u2186-4").html(data);
              }
       });
       }
       else {
         $("#u2186-4").html("tu password y confirmar password no coinciden");
       }
       });

       $('#u2406').click(function(){
         var user=$("#widgetu2400_input").val();
         var pass=$("#widgetu2408_input").val();

         $.ajax({
           method: "post",
           url: "iniciarSesion",
           data: "&user="+user+"&pass="+pass,
           success: function(data){
             if(data==="ingreso"){
               window.location=("<?php echo site_url().'/sesion/index';?>");

             }
             else if(data=="error"){

               $("#login_error").html("Error en usuario y/o contraseña");

             }
           }
         });
       });



   });
   </script>


  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2017.0.1.363"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "webpro.js", "musewpslideshow.js", "jquery.museoverlay.js", "touchswipe.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "require.js", "index.css"], "outOfDate":[]};
</script>

  <title>Inicio</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/site_global.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/index.css?crc=424855575" id="pagesheet"/>
   </head>
 <body>

  <div class="clearfix borderbox" id="page"><!-- group -->
   <div class="shadow clip_frame grpelem" id="u94"><!-- image -->
    <img class="block" id="u94_img" src="<?php echo base_url()."assets/";?>images/fondo%20pagina.jpg?crc=3796698041" alt="" width="1200" height="860"/>
   </div>
   <div class="clearfix grpelem" id="pu452"><!-- group -->
    <div id="u452-wrapper">
     <div id="u452"><!-- simple frame --></div>
    </div>
    <div class="clip_frame" id="u442"><!-- image -->
     <img class="block" id="u442_img" src="<?php echo base_url()."assets/";?>images/barra%20menu.png?crc=284180041" alt="" width="302" height="600"/>
    </div>
   </div>
   <div class="clearfix grpelem" id="pu262"><!-- column -->
    <div class="shadow clearfix colelem" id="u262"><!-- column -->
     <div class="clearfix colelem" id="pu224-4"><!-- group -->
      <img class="grpelem" id="u224-4" alt="MISIÓN" width="82" height="42" src="<?php echo base_url()."assets/";?>images/u224-4.png?crc=425192248"/><!-- rasterized frame -->
      <img class="grpelem" id="u237-4" alt="visión" width="82" height="42" src="<?php echo base_url()."assets/";?>images/u237-4.png?crc=229243265"/><!-- rasterized frame -->
      <img class="grpelem" id="u240-4" alt="valores" width="96" height="42" src="<?php echo base_url()."assets/";?>images/u240-4.png?crc=271736722"/><!-- rasterized frame -->
      <div class="transition clip_frame grpelem" id="u243"><!-- image -->
       <img class="block" id="u243_img" src="<?php echo base_url()."assets/";?>images/iconos%20conocenos.png?crc=52953513" alt="" width="748" height="176"/>
      </div>
     </div>
     <div class="clearfix colelem" id="pu211-4"><!-- group -->
      <img class="grpelem" id="u211-4" alt="Posicionar la semana de administración y gestión como un evento de calidad para los espectadores, realizando actividades y conferencias atractivas para nuestro público, creando en los asistentes una enseñanza y conocimientos en el ámbito administrativo." width="204" height="153" src="<?php echo base_url()."assets/";?>images/u211-4.png?crc=3981719045"/><!-- rasterized frame -->
      <img class="grpelem" id="u215-4" alt="Crear una imagen de compromiso y buena organización asegurando la satisfacción de los asistentes en su totalidad, dando herramientas innovadoras de gran utilidad en el mercado laboral actual." width="204" height="114" src="<?php echo base_url()."assets/";?>images/u215-4.png?crc=400338803"/><!-- rasterized frame -->
      <img class="grpelem" id="u221-12" alt="Constancia Compromiso Calidad Respeto Trabajo en equipo" width="204" height="114" src="<?php echo base_url()."assets/";?>images/u221-12.png?crc=4289313011"/><!-- rasterized frame -->
     </div>
    </div>
    <div class="shadow clip_frame colelem" id="u265"><!-- image -->
     <img class="block" id="u265_img" src="<?php echo base_url()."assets/";?>images/fondo%20ponentes.jpg?crc=4159135618" alt="" width="1200" height="860"/>
    </div>
    <div class="shadow colelem" id="u508"><!-- simple frame --></div>
    <div class="shadow clip_frame colelem" id="u682"><!-- image -->
     <img class="block" id="u682_img" src="<?php echo base_url()."assets/";?>images/fondo%20patrocinadores.jpg?crc=4126248490" alt="" data-image-width="1200" data-image-height="494"/>
    </div>
   </div>
   <a class="nonblock nontext MuseLinkActive" id="u155-4" href="<?php  base_url()."assets/";?>index.html"><!-- rasterized frame --><img id="u155-4_img" alt="INICIO" width="105" height="22" src="<?php echo base_url()."assets/";?>images/u155-4-a.png"/></a>
   <div class="clearfix grpelem" id="ppu165"><!-- column -->
    <a class="nonblock nontext anim_swing transition pinned-colelem" id="u165" href="index.html#conocenos"><!-- state-based BG images --><img id="u165_states" alt="CONÓCENOS" src="<?php echo base_url()."assets/";?>images/blank.gif"/></a>
    <a class="nonblock nontext anim_swing transition pinned-colelem" id="u170" href="index.html#ponentes"><!-- state-based BG images --><img id="u170_states" alt="PONENTES" src="<?php echo base_url()."assets/";?>images/blank.gif"/></a>
    <a class="nonblock nontext anim_swing transition pinned-colelem" id="u173" href="index.html#programa"><!-- state-based BG images --><img id="u173_states" alt="PROGRAMA" src="<?php echo base_url()."assets/";?>images/blank.gif"/></a>
    <a class="nonblock nontext anim_swing transition pinned-colelem" id="u176" href="index.html#patrocinadores"><!-- state-based BG images --><img id="u176_states" alt="PATROCINADORES" src="<?php echo base_url()."assets/";?>images/blank.gif"/></a>
    <a class="nonblock nontext anim_swing transition pinned-colelem" id="u179" href="index.html#regristro"><!-- state-based BG images --><img id="u179_states" alt="REGISTRO" src="<?php echo base_url()."assets/";?>images/blank.gif"/></a>
   </div>
   <div class="clearfix grpelem" id="pu927"><!-- column -->
    <a class="nonblock nontext colelem" id="u927" href="<?php echo base_url()."assets/";?>https://www.facebook.com/"><!-- simple frame --></a>
    <img class="colelem" id="u495" alt="" src="<?php echo base_url()."assets/";?><?php echo base_url()."assets/";?>images/ponentes-u495.png" data-image-width="1206"/><!-- rasterized frame -->
   </div>
   <div class="clearfix grpelem" id="pinicio"><!-- column -->
    <a class="anchor_item colelem" id="inicio"></a>
    <a class="anchor_item colelem" id="conocenos"></a>
   </div>
   <a class="nonblock nontext grpelem" id="u800" href="<?php echo base_url()."assets/";?>CONOCENOS"><!-- simple frame --></a>
   <a class="anchor_item grpelem" id="ponentes"></a>
   <div class="clip_frame grpelem" id="u2136"><!-- image -->
    <img class="block" id="u2136_img" src="<?php echo base_url()."assets/";?>images/programa.jpg?crc=3847541906" alt="" data-image-width="1046" data-image-height="1343"/>
   </div>
   <div class="clearfix grpelem" id="pprograma"><!-- column -->
    <a class="anchor_item colelem" id="programa"></a>
    <a class="anchor_item colelem" id="patrocinadores"></a>
    <a class="anchor_item colelem" id="regristro"></a>
   </div>
   <div class="PamphletWidget clearfix grpelem" id="pamphletu1458"><!-- none box -->
    <div class="popup_anchor" id="u1467popup">
     <div class="ContainerGroup clearfix" id="u1467"><!-- none box -->
      <div class="Container invi shadow clearfix grpelem" id="u1478"><!-- group -->
       <img class="grpelem" id="u2082-12" alt="&nbsp;• Empresario mexicano, creador de la empresa Omnilife. • Poseedor de Equipo de primera división de futbol en México. • Durante su incursión en la industria cinematográfica ha co-producido películas de fama internacional como Y tu mamá también, El espinazo del diablo, El asesinato de Richard Nixon y Crónicas. " src="<?php echo base_url()."assets/";?>images/u2082-12.png?crc=456031646" data-image-width="391"/><!-- rasterized frame -->
      </div>
      <div class="Container invi shadow clearfix grpelem" id="u1600"><!-- group -->
       <div class="clearfix grpelem" id="u1660-5"><!-- content -->
        <p id="u1660">&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
       </div>
      </div>
      <div class="Container invi shadow clearfix grpelem" id="u1608"><!-- group -->
       <div class="clearfix grpelem" id="u2085-9"><!-- content -->
        <p id="u2085-2">• Director General de Borghino Consultores que se especializa en el desarrollo de ejecutivos y personal de las empresas.</p>
        <p id="u2085-4">• Conferencista, Investigador, Escritor, Consejero, Asesor, experto en temas de Planeación Estratégica, Liderazgo, y Rescate de negocios.</p>
        <p id="u2085-5">&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
       </div>
      </div>
      <div class="Container invi shadow clearfix grpelem" id="u1702"><!-- group -->
       <img class="grpelem" id="u1710-10" alt="• Director general de la agencia Virket Group • Se ha desempeñado e como Business Analyst, liderando proyectos en Disney, MasterCard, Arcor, Santander y Peugeot. • Profesor de marketing interactivo, marketing en buscadores y marketing político en el ITESM. " src="<?php echo base_url()."assets/";?>images/u1710-10.png?crc=45442382" data-image-width="313"/><!-- rasterized frame -->
      </div>
      <div class="Container invi shadow clearfix grpelem" id="u1758"><!-- group -->
       <img class="grpelem" id="u2050-9" alt="• Licenciado en Ciencias de la comunicación por la Universidad Anáhuac. • Conductor y productor de TV " src="<?php echo base_url()."assets/";?>images/u2050-9.png?crc=4197863584" data-image-width="258"/><!-- rasterized frame -->
      </div>
      <div class="Container invi shadow clearfix grpelem" id="u1750"><!-- group -->
       <img class="grpelem" id="u2062-13" alt="&nbsp;• Lic. en Administración de empresas ITAM y su formación en producción de impresos, diseño gráfico y mercadotecnia editorial se ha desarrollado principalmente en la ciudad de Nueva York. • Lanzó en 2002 la revista Merca 2.0 en donde actualmente es Director General. • Es profesor certificado de universidades extranjeras University of Texas en Austin, University of San Diego y California State University San Marcos. • Ha sido instructor para empresas como El Universal, Aeroméxico, Home Depot, Colgate Palmolive, Liverpool, Bayer, Mead Johnson, entre otras. " src="<?php echo base_url()."assets/";?>images/u2062-13.png?crc=350538233" data-image-width="531"/><!-- rasterized frame -->
      </div>
      <div class="Container invi shadow clearfix grpelem" id="u1578"><!-- group -->
       <img class="grpelem" id="u1644-15" alt="• Raquetbolista Profesional Mexicana, tres veces campeona mundial por la Federación Internacional de Racquetball. • Racquetbolista #1 del Women's Professional Racquetball Organization • En 2013, la revista Forbes México la listó como una de las 50 mujeres más influyentes de México en la actualidad. • Considerada como una de las lideres mas jóvenes de nuestro pais • Estudio Ingeniería en Administración y Sistemas en la Universidad Autónoma de Nuevo León - UANL. " src="<?php echo base_url()."assets/";?>images/u1644-15.png?crc=336862232" data-image-width="475"/><!-- rasterized frame -->
      </div>
     </div>
    </div>
    <div class="ThumbGroup clearfix grpelem" id="u1459"><!-- none box -->
     <div class="popup_anchor" id="u1462popup">
      <div class="Thumb popup_element rounded-corners" id="u1462"><!-- simple frame --></div>
     </div>
     <div class="popup_anchor" id="u1604popup">
      <div class="Thumb popup_element rounded-corners" id="u1604"><!-- simple frame --></div>
     </div>
     <div class="popup_anchor" id="u1612popup">
      <div class="Thumb popup_element rounded-corners" id="u1612"><!-- simple frame --></div>
     </div>
     <div class="popup_anchor" id="u1707popup">
      <div class="Thumb popup_element rounded-corners" id="u1707"><!-- simple frame --></div>
     </div>
     <div class="popup_anchor" id="u1761popup">
      <div class="Thumb popup_element rounded-corners" id="u1761"><!-- simple frame --></div>
     </div>
     <div class="popup_anchor" id="u1755popup">
      <div class="Thumb popup_element rounded-corners" id="u1755"><!-- simple frame --></div>
     </div>
     <div class="popup_anchor" id="u1596popup">
      <div class="Thumb popup_element rounded-corners" id="u1596"><!-- simple frame --></div>
     </div>
    </div>
   </div>
   <div class="clearfix grpelem" id="ppu930"><!-- column -->
    <div class="clearfix colelem" id="pu930"><!-- group -->
     <a class="nonblock nontext grpelem" id="u930" href="<?php echo base_url()."assets/";?>https://twitter.com/?lang=es"><!-- simple frame --></a>
     <a class="nonblock nontext grpelem" id="u933" href="<?php echo base_url()."assets/";?>https://www.instagram.com/"><!-- simple frame --></a>
     <a class="nonblock nontext grpelem" id="u936" href="<?php echo base_url()."assets/";?>https://www.youtube.com/"><!-- simple frame --></a>
    </div>
    <img class="colelem" id="u2088" alt="" src="<?php echo base_url()."assets/";?>images/16910930_10212528847446910_907668818_o-u2088.png?crc=3818873844" data-image-width="240"/><!-- rasterized frame -->
    <div class="clearfix colelem" id="pu939"><!-- group -->
     <div class="grpelem" id="u939"><!-- rasterized frame --></div>
     <div class="museBGSize grpelem" id="u947"><!-- simple frame --></div>
    </div>
    <img class="colelem" id="u2076-4" alt="ADMINISTRACIÓN Y GESTIÓN" src="<?php echo base_url()."assets/";?>images/u2076-4.png?crc=4195895121" data-image-width="393"/><!-- rasterized frame -->
    <div class="PamphletWidget clearfix widget_invisible colelem" id="pamphletu2323"><!-- none box -->
     <div class="ThumbGroup clearfix grpelem" id="u2337"><!-- none box -->
      <div class="popup_anchor" id="u2338popup">
       <div class="Thumb popup_element rounded-corners clearfix" id="u2338"><!-- group -->
        <div class="grpelem" id="u2446"><!-- state-based BG images -->
         <img alt="INICIAR SESIÓN" src="<?php echo base_url()."assets/";?>images/blank.gif?crc=4208392903"/>
         <div class="fluid_height_spacer"></div>
        </div>
       </div>
      </div>
     </div>
     <div class="popup_anchor" id="u2330popup">
      <div class="ContainerGroup rgba-background rounded-corners clearfix" id="u2330"><!-- stack box -->
       <div class="Container rounded-corners clearfix grpelem" id="u2331"><!-- group -->
        <form class="form-grp clearfix grpelem" id="widgetu2395" method="post" enctype="multipart/form-data" action="scripts/form-u2395.php"><!-- none box -->
         <div class="fld-grp clearfix grpelem" id="widgetu2400" data-required="true"><!-- none box -->
          <label class="fld-label grpelem" id="u2402" for="widgetu2400_input"><!-- state-based BG images --></label>
          <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u2403-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu2400_input" name="custom_U2400" tabindex="1"/><label class="wrapped-input fld-prompt" id="widgetu2400_prompt" for="widgetu2400_input"><span class="actAsPara">Introducir usuario</span></label></span>
         </div>
         <div class="fld-grp clearfix grpelem" id="widgetu2408" data-required="true" data-type="email"><!-- none box -->
          <label class="fld-label grpelem" id="u2409" for="widgetu2408_input"><!-- state-based BG images --></label>
          <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u2410-4"><!-- content --><input class="wrapped-input" type="password" spellcheck="false" id="widgetu2408_input" name="Email" tabindex="2"/><label class="wrapped-input fld-prompt" id="widgetu2408_prompt" for="widgetu2408_input"><span class="actAsPara">Introducir password</span></label></span>
         </div>
         <div class="clearfix grpelem" id="u2407-4"><!-- content -->
          <p>Enviando formulario...</p>
         </div>
         <div class="clearfix grpelem" id="u2405-4"><!-- content -->
          <p>El servidor ha detectado un error.</p>
         </div>
         <div class="clearfix grpelem" id="u2404-3"><!-- content -->
          <p>&nbsp;</p>
         </div>
         <button class="submit-btn NoWrap grpelem" id="u2406" alt="ENTRAR" src="<?php echo base_url()."assets/";?>images/blank.gif?crc=4208392903" type="submit" value="" tabindex="3"><!-- state-based BG images --></button>
        </form>
       </div>
      </div>
     </div>
     <div class="popup_anchor" id="u2324popup">
      <div class="PamphletCloseButton PamphletLightboxPart popup_element rounded-corners clearfix" id="u2324"><!-- group -->
       <div class="clearfix grpelem" id="u2325-4"><!-- content -->
        <p>x</p>
       </div>
      </div>
     </div>
    </div>
    <img class="colelem" id="u455-4" alt="PONENTES" src="<?php echo base_url()."assets/";?>images/u455-4.png?crc=223936177" data-image-width="206"/><!-- rasterized frame -->
    <div class="colelem" id="u713"><!-- simple frame --></div>
    <div class="clearfix colelem" id="pu1648-4"><!-- group -->
     <img class="grpelem" id="u1648-4" alt="Jorge Vergara" src="<?php echo base_url()."assets/";?>images/u1648-4.png" data-image-width="145"/><!-- rasterized frame -->
     <img class="grpelem" id="u1656-4" alt="paola longoria" src="<?php echo base_url()."assets/";?>images/u1656-4.png" data-image-width="145"/><!-- rasterized frame -->
     <img class="grpelem" id="u2079-4" alt="DR. BOB" src="<?php echo base_url()."assets/";?>images/u2079-4.png" data-image-width="68"/><!-- rasterized frame -->
     <img class="grpelem" id="u1669-4" alt="Mario Borghino " src="<?php echo base_url()."assets/";?>images/u1669-4.png" data-image-width="183"/><!-- rasterized frame -->
    </div>
    <div class="clearfix colelem" id="pu1747-4"><!-- group -->
     <img class="grpelem" id="u1747-4" alt="Sergio Sepúlveda " src="<?php echo base_url()."assets/";?>images/u1747-4.png" data-image-width="183"/><!-- rasterized frame -->
     <img class="grpelem" id="u1675-4" alt="Nicolás Maslo " src="<?php echo base_url()."assets/";?>images/u1675-4.png" data-image-width="183"/><!-- rasterized frame -->
     <img class="grpelem" id="u1724-4" alt="Álvaro Rattinger " src="<?php echo base_url()."assets/";?>images/u1724-4.png" data-image-width="183"/><!-- rasterized frame -->
    </div>
    <img class="colelem" id="u704-4" alt="Patrocinadores" src="<?php echo base_url()."assets/";?>images/u704-4.png" data-image-width="324"/><!-- rasterized frame -->
    <div class="colelem" id="u707"><!-- simple frame --></div>
    <img class="colelem" id="u719-4" alt="registro" src="<?php echo base_url()."assets/";?>images/u719-4.png?crc=4238419597" data-image-width="324"/><!-- rasterized frame -->
    <div class="colelem" id="u722"><!-- simple frame --></div>
    <form class="form-grp clearfix colelem" id="widgetu746" method="post" enctype="multipart/form-data" action="scripts/form-u746.php"><!-- none box -->
     <div class="fld-grp clearfix grpelem" id="widgetu748" data-required="true"><!-- none box -->
      <label class="fld-label grpelem" id="u751" for="widgetu748_input"><!-- state-based BG images --></label>
      <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u749-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" placeholder="MATRICULA" id="widgetu748_input" name="custom_U748" tabindex="4"/><label class="wrapped-input fld-prompt" id="widgetu748_prompt" for="widgetu748_input" ></label></span>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu754" data-required="true" data-type="email"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u756-4"><!-- content --><input class="wrapped-input" type="email" spellcheck="false" id="widgetu754_input" name="Email" tabindex="5"/><label class="wrapped-input fld-prompt" id="widgetu754_prompt" for="widgetu754_input"><span class="actAsPara">PASSWORD</span></label></span>
     </div>
     <div class="clearfix grpelem" id="u758-4"><!-- content -->
      <p>Enviando formulario...</p>
     </div>
     <div class="clearfix grpelem" id="u753-4"><!-- content -->
      <p>El servidor ha detectado un error.</p>
     </div>
     <img class="grpelem" id="u752" alt="LISTO!" src="<?php echo base_url()."assets/";?>images/blank.gif?crc=4208392903"/><!-- state-based BG images -->
     <button class="submit-btn NoWrap grpelem" id="u747" alt="Enviar" src="<?php echo base_url()."assets/";?>images/blank.gif?crc=4208392903" type="submit" value="" tabindex="7"><!-- state-based BG images --></button>
     <div class="fld-grp clearfix grpelem" id="widgetu759" data-required="false"><!-- none box -->
      <span class="fld-textarea actAsDiv clearfix grpelem" id="u761-4"><!-- content --><textarea class="wrapped-input" id="widgetu759_input" name="custom_U759" tabindex="6"></textarea><label class="wrapped-input fld-prompt" id="widgetu759_prompt" for="widgetu759_input"><span class="actAsPara">CONFIRMAR PASSWORD</span></label></span>
     </div>
    </form>
    <div class="clearfix colelem" id="pu2155"><!-- group -->
     <div class="clip_frame grpelem" id="u2155"><!-- image -->
      <img class="block" id="u2155_img" src="<?php echo base_url()."assets/";?>images/16833444_10212529333659065_26340105_o.png?crc=49223469" alt="" data-image-width="339" data-image-height="411"/>
     </div>
     <form class="form-grp clearfix grpelem" id="widgetu2185" method="post" enctype="multipart/form-data" action="scripts/form-u2185.php"><!-- none box -->
      <div class="fld-grp clearfix grpelem" id="widgetu2201" data-required="true"><!-- none box -->
       <label class="fld-label grpelem" id="u2204" for="widgetu2201_input"><!-- state-based BG images --></label>
       <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u2203-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu2201_input" name="custom_U2201" tabindex="8"/><label class="wrapped-input fld-prompt" id="widgetu2201_prompt" for="widgetu2201_input"><span class="actAsPara">NOMBRE</span></label></span>
       <div class="fld-message clearfix grpelem" id="u2202-4"><!-- content -->
        <p>Obligatorio</p>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu2192" data-required="true" data-type="email"><!-- none box -->
       <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u2194-4"><!-- content --><input class="wrapped-input" type="email" spellcheck="false" id="widgetu2192_input" name="Email" tabindex="9"/><label class="wrapped-input fld-prompt" id="widgetu2192_prompt" for="widgetu2192_input"><span class="actAsPara">EMAIL</span></label></span>
       <div class="fld-message clearfix grpelem" id="u2193-4"><!-- content -->
        <p>Obligatorio</p>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu2222" data-required="true"><!-- none box -->
       <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u2224-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu2222_input" name="custom_U2222" tabindex="10"/><label class="wrapped-input fld-prompt" id="widgetu2222_prompt" for="widgetu2222_input"><span class="actAsPara">PASSWORD</span></label></span>
       <div class="fld-message clearfix grpelem" id="u2225-4"><!-- content -->
        <p>Obligatorio</p>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu2214" data-required="true"><!-- none box -->
       <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u2215-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu2214_input" name="custom_U2214" tabindex="11"/><label class="wrapped-input fld-prompt" id="widgetu2214_prompt" for="widgetu2214_input"><span class="actAsPara">CONFIRMAR PASSWORD</span></label></span>
      </div>
      <div class="clearfix grpelem" id="u2187-4"><!-- content -->
       <p>Enviando formulario...</p>
      </div>
      <div class="clearfix grpelem" id="u2186-4"><!-- content -->
       <p>El servidor ha detectado un error.</p>
      </div>
      <img class="grpelem" id="u2196" alt="LISTO!" src="<?php echo base_url()."assets/";?>images/blank.gif?crc=4208392903"/><!-- state-based BG images -->
      <button class="submit-btn NoWrap grpelem" id="u2205" alt="Enviar" src="<?php echo base_url()."assets/";?>images/blank.gif?crc=4208392903" type="submit" value="" tabindex="12"><!-- state-based BG images --></button>
     </form>
    </div>
   </div>
   <div class="verticalspacer" data-offset-top="4691" data-content-above-spacer="4690" data-content-below-spacer="151"></div>
   <div class="clearfix grpelem" id="u2308"><!-- group -->
    <img class="grpelem" id="u2146-8" alt="URBANO VILLALÓN #500 COLONIA LA LADRILLERA SAN LUIS POTOSÍ, S.L.P. MÉXICO C.P. 78363" src="<?php echo base_url()."assets/";?>images/u2146-8.png?crc=68069873" data-image-width="526"/><!-- rasterized frame -->
    <div class="clip_frame grpelem" id="u2175"><!-- image -->
     <img class="block" id="u2175_img" src="<?php echo base_url()."assets/";?>images/16832741_10212529346099376_301287500_o.png?crc=508663022" alt="" data-image-width="39" data-image-height="53"/>
    </div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u165_states-r.png?crc=4235072383" alt=""/>
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u165_states-a.png?crc=243098867" alt=""/>
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u170_states-r.png?crc=510439595" alt=""/>
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u170_states-a.png?crc=3851528810" alt=""/>
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u173_states-r.png?crc=392325594" alt=""/>
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u173_states-a.png?crc=4247416607" alt=""/>
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u176_states-r.png?crc=232389557" alt=""/>
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u176_states-a.png?crc=4213490312" alt=""/>
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u179_states-r.png?crc=4187497851" alt=""/>
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u179_states-a.png?crc=230084285" alt=""/>
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u2446-a.png?crc=3844970886" alt=""/>
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u2402-ferr.png?crc=3930622606" alt=""/>
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u2409-ferr.png?crc=4034257650" alt=""/>
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u2406-r.png?crc=4207799883" alt=""/>
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u2406-m.png?crc=3844476074" alt=""/>
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u2406-fs.png?crc=4079048744" alt=""/>
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u751-ferr.png?crc=3826454915" alt=""/>
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u752-fss.png?crc=372073270" alt=""/>
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u747-r.png?crc=4149332376" alt=""/>
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u747-m.png?crc=4131967109" alt=""/>
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u747-fs.png?crc=3919529923" alt=""/>
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u2204-ferr.png?crc=329939442" alt=""/>
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u2196-fss.png?crc=372073270" alt=""/>
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u2205-r.png?crc=483431590" alt=""/>
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u2205-m.png?crc=4221646616" alt=""/>
   <img class="preload" src="<?php echo base_url()."assets/";?>images/u2205-fs.png?crc=449769523" alt=""/>
  </div>
  <!-- Other scripts -->

  <!-- RequireJS script -->
  <script src="<?php echo base_url()."assets/";?>scripts/require.js" type="text/javascript" async data-main="scripts/museconfig.js" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>
