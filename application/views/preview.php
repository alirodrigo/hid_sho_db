<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Customize Theme</title>
	<link href="/hid_sho_db/v4/css/bootstrap.css" rel="stylesheet">
	<link href="/hid_sho_db/v4/css/style.css" rel="stylesheet">
  <link href="/hid_sho_db/v4/css/item_template_1.css" rel="stylesheet">
  <link href="/hid_sho_db/v4/css/jquery.miniColors.css" rel="stylesheet">
  <link href="/hid_sho_db/v4/css/bootstrapSwitch.css" rel="stylesheet">
  <link href="/hid_sho_db/v4/css/jquery.miniColors.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.3/bootstrapSwitch.min.js" type="text/javascript"></script>
  <script src="/hid_sho_db/v4/js/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
  <script src="/hid_sho_db/v4/js/bootstrap.js" type="text/javascript"></script>
  <script src="/hid_sho_db/v4/js/jquery.infinitescroll.js" type="text/javascript"></script>
  <script src="/hid_sho_db/v4/js/jquery.miniColors.js" type="text/javascript"></script>
</head>
<body>
        
<div class="body_cont"><!-- body_cont -->
<div class="content bottom-rounded">
  <div class="container_int">
    <? if($header){ ?>
    <div class="imageCover" >
            <img src="http://placehold.it/940x240" width="940" height="240" alt="imgHeader" />
          </div>
    <? } ?>
  </div><!-- /container imagen_cover -->
  <div class="container_int"><!-- nombre_marca -->
    <div class="row">
              <? if($logo){ ?>
      <div class="span3">
        <div class="store_logo">
          <img class="thumbnail artdos" src="http://placehold.it/160x160"/>
        </div>
      </div>
      <? } ?>
      <div class="span9 rec">
                <? if($store_name){ ?>
        <div class="store_data">
          <h1 class="tipouno">Tienda Piloto</h1>
        </div>
                    <? } ?>
        <div style="width:283px;float:right" class="navbar navbar-static">
               
          <ul class="nav pull-right">
            <li class="divider-vertical"></li>
            <li><a href="#">Tienda</a></li>
            <li class="divider-vertical"></li>
                        <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">Categor&iacute;as<b class="caret"></b></a>
            </li>
            <li class="divider-vertical"></li>
                        <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">Cuenta<b class="caret"></b></a>
                              <ul id="login_form" class="dropdown-menu">
                  <form method="post" action="" class="form-stacked">
                      <div id="msg_container">
                        <div id="error_msg"></div>
                      </div>
                      <div class="clearfix">
                        <label for="username">Email</label>
                        <div class="input">
                          <input type="text" name="username" class="span3" id="login_username" />
                        </div>
                      </div><!-- /clearfix -->
                     
                      <div class="clearfix">
                        <label for="username">Contraseña</label>
                        <div class="input">
                          <input type="password" name="password" class="span3" id="login_password" />
                        </div>
                      </div><!-- /clearfix -->
                     
                      <a href="https://www.kichink.com/login/requestPass">&iquest;Olvidaste tu contrase&ntilde;a?</a> 
                      <br />
                      <input type="submit" class="btn primary large span3" id="login_button" value="Login" />
                      <br />
                      <input type="button" id="register_button" class="btn success large span3" value="Reg&iacute;strate" />
                      <br/><br/><br/><br/>                
                  </form>
                </ul>
              </li>
            <li class="divider-vertical"></li>
          </ul>
        </div>

        <div class="row">
          <? if($store_description){ ?>
         <div class="span9">
           <h1 class="tipodos">Tienda de Prueba . Tienda de Prueba . Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, atque, consequatur voluptate ex id expedita odio qui autem ea harum vitae sequi omnis repudiandae dignissimos deserunt quos pariatur. Quam, veritatis!</h1>
         </div>
         <? } ?>
        </div>
      </div>
  
    </div>
  </div><!-- /container nombre_marca -->
<div class="container_int">
  <div class="row">
          <div class="span7">
            <ul class="nav nav-pills botonesdos">
              <li class="active"><a href="#">Categor&iacute;a</a></li>
              <li ><a href="#">Categor&iacute;a</a></li>
              <li ><a href="#">Categor&iacute;a</a></li>
              <li ><a href="#">Categor&iacute;a</a></li>
              <li ><a href="#">Categor&iacute;a</a></li>
            </ul>
          </div>
    <div class="span5">
      <div class="btn-group botones">
                        <a href="#" class="btn">Contactar</a>
      </div>
      <ul class="share_controls" id="btnshare" style="float:right">
        <!-- AddThis Button BEGIN -->
        <li><a href="#" id="popoverLoQuiero" rel="popover"><img src="/hid_sho_db/v4/img/star.png" alt="Favoritos"></a></li>
        <li><a href="http://www.addthis.com/bookmark.php"class="addthis_button_facebook"><img src="/hid_sho_db/v4/img/facebook.png" alt=""></a></li>
        <li><a href="http://www.addthis.com/bookmark.php" class="addthis_button_twitter" addthis:description="Tienda Piloto"><img src="/hid_sho_db/v4/img/twitter.png" alt=""></a></li>
        <li><a href="http://www.addthis.com/bookmark.php"class="addthis_button_email"><img src="/hid_sho_db/v4/img/mail.png" alt=""></a></li>
        <script type="text/javascript" src="https://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-504918e96b99753c"></script>
        <!--AddThis Button END -->         
      </ul>
    </div>
  </div>
</div>
<div class="banner">
    <div id="wrapper">
      <div id="carousel">
        <img src="http://placehold.it/940x300" alt="#" width="940" height="300" />
        <img src="http://placehold.it/940x300" alt="#" width="940" height="300" />
        <img src="http://placehold.it/940x300" alt="#" width="940" height="300" />
        <img src="http://placehold.it/940x300" alt="#" width="940" height="300" />
        <img src="http://placehold.it/940x300" alt="#" width="940" height="300" />
        <img src="http://placehold.it/940x300" alt="#" width="940" height="300" />
      </div>
      <div id="prev"></div>
      <div id="next"></div>
      <div id="pager"></div>
    </div>
    Ali Rodrigo Lopez Fernandez
    <script type="text/javascript">
      $(function() {
        $('#carousel').carouFredSel({
          width: '100%',
          items: {
            visible: 3,
            start: -1
          },
          scroll: {
            items: 1,
            duration: 1000,
            timeoutDuration: 3000
          },
          pagination: {
            container: '#pager',
            deviation: 1
          }
        });
      });
</script>
</div>
  <div class="container_int centers"><!-- Articulos -->
    <div class="row">
      <div class="span12 cent" id="items-grid"><!-- Productos -->
               <div class="items" style="width:900px; height:330px;  no-repeat; float:left; margin:15px; position:relative;">
                <div class="items_price_ribbon">                                                  
                  <p style="text-align:center;padding:0px;margin:0">$ 100.00</p>
                </div>  
                  <a href="#">
                    <img style="position:absolute; top:15px; left:15px; width:870px; height:250px" width="870" height="250" src="http://placehold.it/870x250"/>
                  </a>                   
                  <div class="items-name_large">
                    Summer Tote Bag
                  </div>
              </div>
              <div class="items" style="width:900px; height:330px;  no-repeat; float:left; margin:15px; position:relative;">
                <div class="items_price_ribbon">                                                  
                  <p style="text-align:center;padding:0px;margin:0">$ 100.00</p>
                </div>  
                  <a href="#">
                  <img style="position:absolute; top:15px; left:15px; width:870px; height:250px" width="870" height="250" src="http://placehold.it/870x250" />
                </a>
                <div class="items-name_large">
                  Summer Tote Bag
                </div>
              </div>
          </div><!-- /Productos -->
        </div><!--/row-->
      </div><!-- /Articulos -->
    </div><!-- / content -->
  </div><!-- body_cont -->
</div><!-- preview_board -->



</body>
</html>