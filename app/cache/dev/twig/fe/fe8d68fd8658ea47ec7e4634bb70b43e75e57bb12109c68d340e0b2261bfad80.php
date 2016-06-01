<?php

/* paquete/constructorpaquete.html.twig */
class __TwigTemplate_94e08e147799c3bd629a6898eba1b613fc2c48e11345c503c74bf1dc86990b20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f273ae1882929825133590c257e4102a1a91b898f15d938ccb0081fc2ccb544c = $this->env->getExtension("native_profiler");
        $__internal_f273ae1882929825133590c257e4102a1a91b898f15d938ccb0081fc2ccb544c->enter($__internal_f273ae1882929825133590c257e4102a1a91b898f15d938ccb0081fc2ccb544c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "paquete/constructorpaquete.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\">
<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">


<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/angular/bower_components/jquery/dist/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/angular/bower_components/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/angular/bower_components/angular/angular.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/angular/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/angular/bower_components/angular-material/angular-material.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>



<!-- Angular Material Library -->
<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/angular/bower_components/angular-material/angular-material.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>


 <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/angular/bower_components/angular-animate/angular-animate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

 <link rel=\"stylesheet\" href=\"https://cdn.rawgit.com/angular-ui/bower-ui-grid/master/ui-grid.min.css\"> 
<script src=\"https://cdn.rawgit.com/angular-ui/bower-ui-grid/master/ui-grid.min.js\"></script>

 <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/angular/bower_components/angular-messages/angular-messages.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
  <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/angular/bower_components/angular-aria/angular-aria.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
  
  <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/angular/bower_components/angular-ui-grid/ui-grid.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
  <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/angular/bower_components/angular-ui-grid/ui-grid.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
  
 
  <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/angular-ui-tinymce/dist/tinymce.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
 

  <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/angular-ui-tinymce/src/tinymce.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
 



 

  
<script  type=\"text/javascript\"  >
 var dep=['ngMaterial','ui.grid','ui.tinymce'];
    var app = angular.module(\"myApp\",dep);
    app.config(function(\$interpolateProvider){
    \$interpolateProvider.startSymbol('/.').endSymbol('./');
    
})
</script>


<link href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/estilos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

 
 
  


<script>

app.controller(\"myCtrl\", function(\$scope,\$http) {
   
    \$scope.actualizartabs=function(index,provedorselecinados){ if(index==provedorselecinados.length-1){ \$('#contentab'+index).trigger('click');    } 
        
        
    };
    \$scope.paquete={};
        \$scope.paquete.rutas=[];
         \$scope.paquete.incluyes=[];
        \$scope.paquete.lugarnuevo='';
            
        \$scope.provedorselecinados=[];
       
         \$scope.plantillasdis=[];
       \$scope.plantillaselec={};

    
   
        
         \$scope.getlistadehoteles=function(){
             
              \$http.get(\"";
        // line 88
        echo $this->env->getExtension('routing')->getUrl("listadehotelesjson");
        echo "\")
                            .success(function(respuesta){
                                console.log ( respuesta );
                            \$scope.paquete.hoteles=   respuesta;
                            });
         };
         
         \$scope.getlistadeproveedores=function(){
             
              \$http.get(\"";
        // line 97
        echo $this->env->getExtension('routing')->getUrl("listadeproveedoresjson");
        echo "\")
                            .success(function(respuesta){
                                console.log ( respuesta );
                            \$scope.proveedores=   respuesta;
                            });
         };
         
             \$scope.getlistadeplantillas=function(){
             
              \$http.get(\"";
        // line 106
        echo $this->env->getExtension('routing')->getUrl("listadeplantillasjson");
        echo "\")
                            .success(function(respuesta){
                                console.log ( respuesta );
                            \$scope.plantillasdis=   respuesta;
                            });
         };
        
         
         \$scope.configurarEnvio=function(){
             \$scope.getlistadeproveedores();
              \$scope.getlistadeplantillas();
         };
         
         
        \$scope.paquete.estancias=[];
       \$scope.paquete.nuevaestancia={};
        \$scope.paquete.duraciones=[];
        
        
         \$scope.paquete.nuevaduracion={};
        \$scope.paquete.anadirlugar=function (){
        
        if(\$scope.paquete.lugarnuevo==''){
        alert(\"El campo lugar no puede ser vacio\");}
        else{
        if(\$scope.paquete.rutas.length==0){
           \$scope.paquete.rutas.push({'numero':\$scope.paquete.rutas.length+1,'lugares':[],'texto':''});
           \$scope.paquete.rutaselec=\$scope.paquete.rutas[0];
        }
        
        \$scope.paquete.rutas[ \$scope.paquete.rutas.indexOf(\$scope.paquete.rutaselec)].lugares.push({'nombre':\$scope.paquete.lugarnuevo})
        \$scope.paquete.lugarnuevo=\"\";
        }
        }
    \$scope.paquete.anadirruta=function (){
       \$scope.paquete.rutaselec ={'numero':\$scope.paquete.rutas.length+1,'lugares':[],'texto':''}
        \$scope.paquete.rutas.push(\$scope.paquete.rutaselec);
        
    };
    
    
    
     \$scope.paquete.anadirnuevoincluye=function (){
            \$scope.paquete.incluyes.push(\$scope.paquete.nuevoincluye);
            \$scope.paquete.nuevoincluye={};
      
    };
     \$scope.paquete.eliminarlugar=function (lugar,ruta){
        
       var pos= \$scope.paquete.rutas[\$scope.paquete.rutas.indexOf(\$scope.paquete.rutaselec)].lugares.indexOf(lugar);
        \$scope.paquete.rutas[\$scope.paquete.rutas.indexOf(\$scope.paquete.rutaselec)].lugares.splice(pos,1);
    }
    
     \$scope.paquete.cambiarrutaselec=function (ruta){
        
       \$scope.paquete.rutaselec=ruta;
    };
    
     \$scope.paquete.anadirhotelestancia=function (){
         
     \$scope.paquete.nuevaestancia.hotel=\$scope.paquete.hotelselec;
     \$scope.paquete.estancias.push(\$scope.paquete.nuevaestancia);
     
    };
    
 
    \$scope.paquete.anadirestancia=function(){
        
          \$scope.getlistadehoteles();
         \$scope.paquete.nuevaestancia={};
          \$scope.paquete.nuevohotel={};
        
    };
    \$scope.paquete.anadirhotel= function(){
        
        \$scope.paquete.hoteles.push( \$scope.paquete.nuevohotel);
    };
    
    
    
     \$scope.paquete.anadirduracion= function(){
        
        \$scope.paquete.duraciones.push( \$scope.paquete.nuevaduracion);
        
        \$scope.paquete.nuevaduracion={};
     };
     
     \$scope.agregar_proveedor= function(proveedor){
         if(\$scope.provedorselecinados.indexOf(proveedor)<0 ){
             proveedor.plantilla={textoenriquecido:''};
         \$scope.provedorselecinados.push(proveedor);
       
           
  }
     }
     
     
    
     \$scope.quitar_proveedor= function(proveedor){
         var pro=\$scope.provedorselecinados.indexOf(proveedor);
         if(pro>=0 ){
          \$scope.provedorselecinados.splice(pro,1);
          \t

  }
     };
      \$scope.proveedorvisto={plantilla:{textoenriquecido:''}};
      
   
\$scope.tinymceOptions = {
  setup: function(editor) {
      //Focus the editor on load
     
      editor.on(\"init\", function() {
    alert(\"hello\");
      });
      editor.on(\"click\", function() {
       
      });
  },
  toolbar : \"miBoton,code,bold,italic,underline,separator,strikethrough,justifyleft,justifycenter,justifyright, justifyfull,bullist,numlist,undo,redo,link,unlink\"
};




/*
      tinyMCE.init({
            selector:'#visorplantilla',                
            toolbar : \"miBoton,code,bold,italic,underline,separator,strikethrough,justifyleft,justifycenter,justifyright, justifyfull,bullist,numlist,undo,redo,link,unlink\",
            body_id: 'my_id',
               setup : function(ed) {



            ed.addButton('miBoton', {
            title : 'Un botón personalizado',
            id:'botons',
          text: 'mi botonazo',
            onclick : function() {
        ed.focus();
                ed.selection.setContent('Hola mundo! ');
            }
             });
         


ed.onChange.add(function(ed, l) {
                  console.debug('Editor contents was modified. Contents: ' + l.content);
                  \$scope.proveedorvisto.plantilla.textoenriquecido=ed.getContent();
          });
   }






         }
  ); */
   
     
       \$scope.cambiarplantilla= function(){


/*tinyMCE.get('visorplantilla').setContent('<div ng-model=\"/.proveedorvisto.plantilla.textoenriquecido./\">'+ \$scope.proveedorvisto.plantilla.textoenriquecido+'</div>');
  
     */    

           
  
     };

     \$scope.cambiarplantillapost= function(){

      /*  */

     }
     
      \$scope.cambiarproveedorvisto= function(proveedor){
          \$scope.proveedorvisto = proveedor;
         
        
       
       
        
       /* if(proveedor.plantilla!=null){
       proveedor.plantilla.textoenriquecido=tinyMCE.get('visorplantilla').getContent();
                 
           }*/
     };
     
     \$scope.tinymceModel=\"holas\";
     
     \$scope.paquete.guardar=function(){
         
                

                \$http.post(\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("paqueteconstructormay", array("idcliente" => (isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")))), "html", null, true);
        echo "\", \$scope.paquete)
                            .success(function(respuesta){
                                console.log(respuesta);
                               
                     
                            });
  
         
        
    
};




});


  

</script>

    



<div id=\"construirpaquete\" ng-app=\"myApp\" ng-controller=\"myCtrl\">
    
    <form ng-submit=\"paquete.guardar()\">   
  <div class=\"panel-group\" id=\"accordion\">
      
      
      
           
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h4 class=\"panel-title\">
        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse4\">
        Duracion del paquete</a>
      </h4>
    </div>
    <div id=\"collapse4\" class=\"panel-collapse collapse in\">
        <div class=\"panel-body\">
            
            
      
          <table class=\"table table-bordered table-striped\">
            <thead>
              <tr>
                <th>Dias</th>
                <th>Noches</th>
                <th>Fecha Inicio</th>
                 <th>Fecha Fin</th>
              </tr>
            </thead>
            <tbody>
              <tr ng-repeat=\"duracion in paquete.duraciones\">
                  
                  
                <td>/.duracion.dias./</td>
                <td>/.duracion.noches./</td>
                <td>/.duracion.fechainicio./</td>
                <td>/.duracion.fechafin./</td>
              </tr>

            </tbody>
          </table> 
            
          
            <div class=\" md-inline-form inputdemoBasicUsage\">
                
                 <md-input-container>
                 <label>Dias</label>
                    <input ng-model=\"paquete.nuevaduracion.dias\">
                  </md-input-container>
         
                 <md-input-container>
                 <label>Noches</label>
             <input  type=\"text\" ng-model=\"paquete.nuevaduracion.noches\"></input>
             
              </md-input-container>
                Fecha de inicio
                 <md-datepicker ng-model=\"paquete.nuevaduracion.fechainicio\" md-placeholder=\"Fecha de inicio\"></md-datepicker>
          Fecha de fin 
             <md-datepicker ng-model=\"paquete.nuevaduracion.fechafin\" md-placeholder=\"Fecha de inicio\"></md-datepicker>
             
          
             
               <div></div>
               </div>
          <div id='anadirduracion' ng-click='paquete.anadirduracion()' class=\"btn btn-primary\"  >Añadir duracion</div>  
       
        </div>
    </div>
  </div>
      
      
      
      
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h4 class=\"panel-title\">
        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse1\">
        Lugares</a>
      </h4>
    </div>
    <div id=\"collapse1\" class=\"panel-collapse collapse \">
        <div class=\"panel-body\">
            
            
           <div id=\"rutas\" >
    
    <h1 class=\"page-header\"> Lugares para el Paquete
        <div >
    <table  class=\"table table-striped table-bordered table-hover col-md-4\" draggable=\"true\">
        <tr class=\"col-md-2\">
            <td class=\"col-md-1\">NOMBRE DEL LUGAR</td>
            <td class=\"col-md-1\"></td></tr>
            <tr id='lugar/. lugar.nombre ./' ng-repeat='lugar in paquete.rutaselec.lugares' class=\"col-md-2\" >
                                        <td class=\"col-md-1\">/. lugar.nombre  ./</td> 
                <td class=\"col-md-1\"> 
                <a href=\"\" ng-click=\"eliminarlugar( paquete.lugar,paquete.rutaselec )\" >Eliminar</a>
                </td>
            </tr>
        </table>
        </div>
    <input type=\"text\" name=\"lugar\" ng-model='paquete.lugarnuevo' >
    
    
    <div id='anadirruta' ng-click='paquete.anadirlugar()' class=\"btn btn-primary\" >Añadir lugar</div>
    
    
    
    <ul class=\"nav nav-tabs\">

        <li ng-repeat=\"ruta in paquete.rutas\" ng-click='paquete.cambiarrutaselec(ruta)'><a href=\"#ruta/.ruta.numero./\">Ruta /.ruta.numero ./</a></li>
        <li ng-click='paquete.anadirruta()'><a href=\"#\" >+</a></li>
  
    </ul>
    
    <div class=\"tab-content\" >
        
    <div id=\"rutaselec/.paquete.ruta.numero./\" class=\"tab-pane fade in active\" >
    <h3>HOME</h3>
    <p>/.paquete.rutaselec.numero./</p>
    Ruta <input type=\"text\" name=\"lugar\" ng-model='paquete.rutaselec.texto' ondrop=\"drop(event)\" >
    </div>
  
    </div>
    
    
    <button class=\"btn btn-primary\" >Siguiente</button>
       </div>
    </div>
  </div>
      
      <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h4 class=\"panel-title\">
        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse3\">
        Estancia</a>
      </h4>
    </div>
    <div id=\"collapse3\" class=\"panel-collapse collapse\">
        <div class=\"panel-body\">
            
            
            <table class=\"table table-bordered table-striped\">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nombre de Hotel</th>
                    <th>Categoria</th>
                    <th>Email</th>
                     <th>Dias de Permanencia</th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat=\"estancia in paquete.estancias\">
                    <td>/.\$index+1./</td>
                    <td>/.estancia.hotel.nombre./</td>
                    <td>/.estancia.hotel.categoria./</td>
                    <td>rockybalboa@mail.com</td>
                    <td>/.estancia.diaspermanencia./</td>
                </tr>
              
            </tbody>
        </table>
            
            <div id='anadirestancia' ng-click='paquete.anadirestancia()' class=\"btn btn-primary\"  data-toggle=\"modal\" data-target=\"#myhotel\">Añadir Estancia</div>
            
            
            <div class=\"modal fade\" id=\"myhotel\" role=\"dialog\">
    <div class=\"modal-dialog\">
    
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
          <h4 class=\"modal-title\">Hoteles disponibles</h4>
        </div>
        <div class=\"modal-body\">
          <p>
              
                <table class=\"table table-bordered table-striped\">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nombre de Hotel</th>
                    <th>Categoria</th>
                    <th>Email</th>
                     <th></th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat=\"hotel in paquete.hoteles\">
                    <td>/.\$index./</td>
                    <td>/.hotel.nombre./</td>
                    <td>/.hotel.categoria./</td>
                    <td>rockybalboa@mail.com</td>
                    <td > <input name=\"hotel\" ng-model=\"paquete.hotelselec\" type=\"radio\"   ng-value=\"hotel\"  > </td>
                </tr>
                <tr> <td >Hotel  <input type=\"text\" class=\"form-control\" placeholder=\"Ingrese nombre de hotel\" ng-model=\"paquete.nuevohotel.nombre\">  </td>
                
                    <td> Categoria <input type=\"text\" class=\"form-control\" placeholder=\"Ingrese categoria del hotel\" ng-model=\"paquete.nuevohotel.categoria\"> </td>
                    <td> Descripcion <input type=\"text\" class=\"form-control\" placeholder=\"Ingrese descripcion del hotel\" ng-model=\"paquete.nuevohotel.descripcion\"> </td>
                    <td> <div id='anadirhotel' ng-click='paquete.anadirhotel()' class=\"btn btn-primary\"  >Añadir hotel a la lista de hoteles</div></td>
                    <td></td>
                </tr>
              
            </tbody>
        </table>
          
          <input type=\"text\" class=\"form-control\" placeholder=\"Ingrese los dias de permanencia\" ng-model=\"paquete.nuevaestancia.diaspermanencia\"> 
          
          
          </p>
        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" ng-click=\"paquete.anadirhotelestancia()\">Seleccionar</button>
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>
  
            
            
            
            
        </div>
    </div>
  </div>
      
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h4 class=\"panel-title\">
        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse2\">
        Incluye</a>
      </h4>
    </div>
    <div id=\"collapse2\" class=\"panel-collapse collapse\">
        <div class=\"panel-body\">
            
      
            
           
              <table class=\"table table-bordered  \" >
                  <thead>
                    <tr >
                        <th class=\"col-md-2\">Nombre</th><th ></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr ng-repeat=\"incluye in paquete.incluyes\" >
                        <td class=\"col-md-2 \">/.incluye.nombre./</td><td >/.incluye.valor./</td>
                    </tr>
                    </tbody>
                    
                </table>
            
          Nombre  <textarea class=\"form-control\" rows=\"3\" ng-model=\"paquete.nuevoincluye.nombre\"></textarea> 
          valor <input type=\"text\" class=\"form-control\" placeholder=\"Campo de texto\" ng-model=\"paquete.nuevoincluye.valor\"> 
          <a href=\"#\" class=\"btn btn btn-primary \" ng-click=\"paquete.anadirnuevoincluye()\">Añadir nuevo incluye</a>
        </div>
    </div>
  </div>
      
      
      
  
</div> 
    
    
    
    
    
    
    
    
    
    
    

      
    
</div>
    
        <div class=\"modal-footer\">
            
          <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#configuracionenvio\" ng-click=\"configurarEnvio()\">Guardar y hacer correo</button>
     
        </div>
        
        
        
        
        <div id=\"configuracionenvio\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
           <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                      <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Configure los mayoristas a enviar </h4>
                  </div>
                  <div class=\"modal-body\">
                      
                      <select name=\"prevedorselec\" ng-options=\"proveedor as proveedor.nombre for proveedor in proveedores \" ng-model=\"prevedorselec\"></select>
                      <button type=\"button\" class=\"btn btn-default\" ng-click=\"agregar_proveedor(prevedorselec)\">Agregar a la lista</button>
                      <table class=\"table table-bordered  \" >
                           <thead>
                                <tr >
                                    <th class=\"col-md-2\">Nombre proveedor</th><th >Correo electronico </th><th ></th>
                                </tr>
                          </thead>
                          <tbody>
                          <tr ng-repeat=\"proveedors in provedorselecinados\" >
                              <td class=\"col-md-2 \">/.proveedors.nombre./</td><td >/.proveedors.email./</td><td > <button type=\"button\" class=\"btn btn-default\" ng-click=\"quitar_proveedor(proveedors)\">Quitar de la lista</button></td>
                          </tr>
                          </tbody>
                    
                        </table>
                      
                      
                      
                      
                      
                      
                         <ul class=\"nav nav-tabs\">
                             
                        <li class=\"active\"><a data-toggle=\"tab\" href=\"#home\">Home</a></li>
                        <li  class=\"/.prueba(\$index,provedorselecinados) ./\" ng-repeat=\"proveedors in provedorselecinados\" ><a data-toggle=\"tab\" href=\"#contentab/.\$index./\" ng-mousedown=\"cambiarproveedorvisto(proveedors)\" ng-mouseup='actualizartabs(\$index,provedorselecinados)'>/.proveedors.nombre./</a>
                        
                        </li>
                       
                       
                        
                          </ul>

                      <div class=\"tab-content\">
                          
                          
                        <div id=\"home\" class=\"tab-pane fade in active\">
                          <h3>HOME</h3>
                          <p>Some content.</p>
                        </div>
                          
                          
                        <div id=\"contentab/.\$index./\" class=\"tab-pane tab-pane fade in active\"  ng-repeat=\"proveedors in provedorselecinados\">
                            
                            
                          <h3>Seleccione una plantilla para el proveedor /.proveedors.nombre./</h3>
                          
                          
                                    <p>
                                        <select name=\"plantillaselec/.\$index./\" ng-options=\"plantilla as plantilla.nombre for plantilla in plantillasdis \" ng-model=\"proveedors.plantilla\"        
                                            ng-change=\"cambiarplantilla()\" ng-mouseleave=\"cambiarplantillapost()\">
                                        </select>
                                    </p>
                              
                                
                        
                      </div>
                      
                          <textarea  ui-tinymce  ng-model=\"tinymceModel\">  </textarea>
                     
                         
                        </div>              
                      
                                                  
                    
                      
                                          
                      
                                       
                      
                      

                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <button type=\"button\" class=\"btn btn-primary\">Guardar y enviar</button>
                  </div>
                </div>
              </div>  
            
        </div>
        
         
     
     
</form>
  
</div>
    
 
    
  
";
        
        $__internal_f273ae1882929825133590c257e4102a1a91b898f15d938ccb0081fc2ccb544c->leave($__internal_f273ae1882929825133590c257e4102a1a91b898f15d938ccb0081fc2ccb544c_prof);

    }

    public function getTemplateName()
    {
        return "paquete/constructorpaquete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 304,  177 => 106,  165 => 97,  153 => 88,  120 => 58,  99 => 40,  93 => 37,  87 => 34,  83 => 33,  78 => 31,  74 => 30,  66 => 25,  60 => 22,  52 => 17,  47 => 15,  42 => 13,  37 => 11,  32 => 9,  22 => 1,);
    }
}
/* <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">*/
/* <!-- Latest compiled and minified CSS -->*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* */
/* <!-- Optional theme -->*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">*/
/* */
/* */
/* <script src="{{asset('bundles/angular/bower_components/jquery/dist/jquery.js')}}" type="text/javascript"></script>*/
/* */
/* <script src="{{asset('bundles/angular/bower_components/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>*/
/* */
/* <script src="{{asset('bundles/angular/bower_components/angular/angular.min.js')}}" type="text/javascript"></script>*/
/* */
/* <script src="{{asset('bundles/angular/bower_components/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>*/
/* */
/* <script src="{{asset('bundles/angular/bower_components/angular-material/angular-material.min.js')}}" type="text/javascript"></script>*/
/* */
/* */
/* */
/* <!-- Angular Material Library -->*/
/* <link href="{{asset('bundles/angular/bower_components/angular-material/angular-material.min.css')}}" rel="stylesheet" type="text/css"/>*/
/* */
/* */
/*  <script src="{{asset('bundles/angular/bower_components/angular-animate/angular-animate.min.js')}}" type="text/javascript"></script>*/
/* */
/*  <link rel="stylesheet" href="https://cdn.rawgit.com/angular-ui/bower-ui-grid/master/ui-grid.min.css"> */
/* <script src="https://cdn.rawgit.com/angular-ui/bower-ui-grid/master/ui-grid.min.js"></script>*/
/* */
/*  <script src="{{asset('bundles/angular/bower_components/angular-messages/angular-messages.min.js')}}" type="text/javascript"></script>*/
/*   <script src="{{asset('bundles/angular/bower_components/angular-aria/angular-aria.min.js')}}" type="text/javascript"></script>*/
/*   */
/*   <link href="{{asset('bundles/angular/bower_components/angular-ui-grid/ui-grid.min.css')}}" rel="stylesheet" type="text/css"/>*/
/*   <script src="{{asset('bundles/angular/bower_components/angular-ui-grid/ui-grid.min.js')}}" type="text/javascript"></script>*/
/*   */
/*  */
/*   <script src="{{asset('bower_components/angular-ui-tinymce/dist/tinymce.min.js')}}" type="text/javascript"></script>*/
/*  */
/* */
/*   <script src="{{asset('bower_components/angular-ui-tinymce/src/tinymce.js')}}" type="text/javascript"></script>*/
/*  */
/* */
/* */
/* */
/*  */
/* */
/*   */
/* <script  type="text/javascript"  >*/
/*  var dep=['ngMaterial','ui.grid','ui.tinymce'];*/
/*     var app = angular.module("myApp",dep);*/
/*     app.config(function($interpolateProvider){*/
/*     $interpolateProvider.startSymbol('/.').endSymbol('./');*/
/*     */
/* })*/
/* </script>*/
/* */
/* */
/* <link href="{{asset('bundles/css/estilos.css')}}" rel="stylesheet" type="text/css"/>*/
/* */
/*  */
/*  */
/*   */
/* */
/* */
/* <script>*/
/* */
/* app.controller("myCtrl", function($scope,$http) {*/
/*    */
/*     $scope.actualizartabs=function(index,provedorselecinados){ if(index==provedorselecinados.length-1){ $('#contentab'+index).trigger('click');    } */
/*         */
/*         */
/*     };*/
/*     $scope.paquete={};*/
/*         $scope.paquete.rutas=[];*/
/*          $scope.paquete.incluyes=[];*/
/*         $scope.paquete.lugarnuevo='';*/
/*             */
/*         $scope.provedorselecinados=[];*/
/*        */
/*          $scope.plantillasdis=[];*/
/*        $scope.plantillaselec={};*/
/* */
/*     */
/*    */
/*         */
/*          $scope.getlistadehoteles=function(){*/
/*              */
/*               $http.get("{{url('listadehotelesjson')}}")*/
/*                             .success(function(respuesta){*/
/*                                 console.log ( respuesta );*/
/*                             $scope.paquete.hoteles=   respuesta;*/
/*                             });*/
/*          };*/
/*          */
/*          $scope.getlistadeproveedores=function(){*/
/*              */
/*               $http.get("{{url('listadeproveedoresjson')}}")*/
/*                             .success(function(respuesta){*/
/*                                 console.log ( respuesta );*/
/*                             $scope.proveedores=   respuesta;*/
/*                             });*/
/*          };*/
/*          */
/*              $scope.getlistadeplantillas=function(){*/
/*              */
/*               $http.get("{{url('listadeplantillasjson')}}")*/
/*                             .success(function(respuesta){*/
/*                                 console.log ( respuesta );*/
/*                             $scope.plantillasdis=   respuesta;*/
/*                             });*/
/*          };*/
/*         */
/*          */
/*          $scope.configurarEnvio=function(){*/
/*              $scope.getlistadeproveedores();*/
/*               $scope.getlistadeplantillas();*/
/*          };*/
/*          */
/*          */
/*         $scope.paquete.estancias=[];*/
/*        $scope.paquete.nuevaestancia={};*/
/*         $scope.paquete.duraciones=[];*/
/*         */
/*         */
/*          $scope.paquete.nuevaduracion={};*/
/*         $scope.paquete.anadirlugar=function (){*/
/*         */
/*         if($scope.paquete.lugarnuevo==''){*/
/*         alert("El campo lugar no puede ser vacio");}*/
/*         else{*/
/*         if($scope.paquete.rutas.length==0){*/
/*            $scope.paquete.rutas.push({'numero':$scope.paquete.rutas.length+1,'lugares':[],'texto':''});*/
/*            $scope.paquete.rutaselec=$scope.paquete.rutas[0];*/
/*         }*/
/*         */
/*         $scope.paquete.rutas[ $scope.paquete.rutas.indexOf($scope.paquete.rutaselec)].lugares.push({'nombre':$scope.paquete.lugarnuevo})*/
/*         $scope.paquete.lugarnuevo="";*/
/*         }*/
/*         }*/
/*     $scope.paquete.anadirruta=function (){*/
/*        $scope.paquete.rutaselec ={'numero':$scope.paquete.rutas.length+1,'lugares':[],'texto':''}*/
/*         $scope.paquete.rutas.push($scope.paquete.rutaselec);*/
/*         */
/*     };*/
/*     */
/*     */
/*     */
/*      $scope.paquete.anadirnuevoincluye=function (){*/
/*             $scope.paquete.incluyes.push($scope.paquete.nuevoincluye);*/
/*             $scope.paquete.nuevoincluye={};*/
/*       */
/*     };*/
/*      $scope.paquete.eliminarlugar=function (lugar,ruta){*/
/*         */
/*        var pos= $scope.paquete.rutas[$scope.paquete.rutas.indexOf($scope.paquete.rutaselec)].lugares.indexOf(lugar);*/
/*         $scope.paquete.rutas[$scope.paquete.rutas.indexOf($scope.paquete.rutaselec)].lugares.splice(pos,1);*/
/*     }*/
/*     */
/*      $scope.paquete.cambiarrutaselec=function (ruta){*/
/*         */
/*        $scope.paquete.rutaselec=ruta;*/
/*     };*/
/*     */
/*      $scope.paquete.anadirhotelestancia=function (){*/
/*          */
/*      $scope.paquete.nuevaestancia.hotel=$scope.paquete.hotelselec;*/
/*      $scope.paquete.estancias.push($scope.paquete.nuevaestancia);*/
/*      */
/*     };*/
/*     */
/*  */
/*     $scope.paquete.anadirestancia=function(){*/
/*         */
/*           $scope.getlistadehoteles();*/
/*          $scope.paquete.nuevaestancia={};*/
/*           $scope.paquete.nuevohotel={};*/
/*         */
/*     };*/
/*     $scope.paquete.anadirhotel= function(){*/
/*         */
/*         $scope.paquete.hoteles.push( $scope.paquete.nuevohotel);*/
/*     };*/
/*     */
/*     */
/*     */
/*      $scope.paquete.anadirduracion= function(){*/
/*         */
/*         $scope.paquete.duraciones.push( $scope.paquete.nuevaduracion);*/
/*         */
/*         $scope.paquete.nuevaduracion={};*/
/*      };*/
/*      */
/*      $scope.agregar_proveedor= function(proveedor){*/
/*          if($scope.provedorselecinados.indexOf(proveedor)<0 ){*/
/*              proveedor.plantilla={textoenriquecido:''};*/
/*          $scope.provedorselecinados.push(proveedor);*/
/*        */
/*            */
/*   }*/
/*      }*/
/*      */
/*      */
/*     */
/*      $scope.quitar_proveedor= function(proveedor){*/
/*          var pro=$scope.provedorselecinados.indexOf(proveedor);*/
/*          if(pro>=0 ){*/
/*           $scope.provedorselecinados.splice(pro,1);*/
/*           	*/
/* */
/*   }*/
/*      };*/
/*       $scope.proveedorvisto={plantilla:{textoenriquecido:''}};*/
/*       */
/*    */
/* $scope.tinymceOptions = {*/
/*   setup: function(editor) {*/
/*       //Focus the editor on load*/
/*      */
/*       editor.on("init", function() {*/
/*     alert("hello");*/
/*       });*/
/*       editor.on("click", function() {*/
/*        */
/*       });*/
/*   },*/
/*   toolbar : "miBoton,code,bold,italic,underline,separator,strikethrough,justifyleft,justifycenter,justifyright, justifyfull,bullist,numlist,undo,redo,link,unlink"*/
/* };*/
/* */
/* */
/* */
/* */
/* /**/
/*       tinyMCE.init({*/
/*             selector:'#visorplantilla',                */
/*             toolbar : "miBoton,code,bold,italic,underline,separator,strikethrough,justifyleft,justifycenter,justifyright, justifyfull,bullist,numlist,undo,redo,link,unlink",*/
/*             body_id: 'my_id',*/
/*                setup : function(ed) {*/
/* */
/* */
/* */
/*             ed.addButton('miBoton', {*/
/*             title : 'Un botón personalizado',*/
/*             id:'botons',*/
/*           text: 'mi botonazo',*/
/*             onclick : function() {*/
/*         ed.focus();*/
/*                 ed.selection.setContent('Hola mundo! ');*/
/*             }*/
/*              });*/
/*          */
/* */
/* */
/* ed.onChange.add(function(ed, l) {*/
/*                   console.debug('Editor contents was modified. Contents: ' + l.content);*/
/*                   $scope.proveedorvisto.plantilla.textoenriquecido=ed.getContent();*/
/*           });*/
/*    }*/
/* */
/* */
/* */
/* */
/* */
/* */
/*          }*/
/*   ); *//* */
/*    */
/*      */
/*        $scope.cambiarplantilla= function(){*/
/* */
/* */
/* /*tinyMCE.get('visorplantilla').setContent('<div ng-model="/.proveedorvisto.plantilla.textoenriquecido./">'+ $scope.proveedorvisto.plantilla.textoenriquecido+'</div>');*/
/*   */
/*      *//*     */
/* */
/*            */
/*   */
/*      };*/
/* */
/*      $scope.cambiarplantillapost= function(){*/
/* */
/*       /*  *//* */
/* */
/*      }*/
/*      */
/*       $scope.cambiarproveedorvisto= function(proveedor){*/
/*           $scope.proveedorvisto = proveedor;*/
/*          */
/*         */
/*        */
/*        */
/*         */
/*        /* if(proveedor.plantilla!=null){*/
/*        proveedor.plantilla.textoenriquecido=tinyMCE.get('visorplantilla').getContent();*/
/*                  */
/*            }*//* */
/*      };*/
/*      */
/*      $scope.tinymceModel="holas";*/
/*      */
/*      $scope.paquete.guardar=function(){*/
/*          */
/*                 */
/* */
/*                 $http.post("{{url('paqueteconstructormay',{'idcliente':cliente})}}", $scope.paquete)*/
/*                             .success(function(respuesta){*/
/*                                 console.log(respuesta);*/
/*                                */
/*                      */
/*                             });*/
/*   */
/*          */
/*         */
/*     */
/* };*/
/* */
/* */
/* */
/* */
/* });*/
/* */
/* */
/*   */
/* */
/* </script>*/
/* */
/*     */
/* */
/* */
/* */
/* <div id="construirpaquete" ng-app="myApp" ng-controller="myCtrl">*/
/*     */
/*     <form ng-submit="paquete.guardar()">   */
/*   <div class="panel-group" id="accordion">*/
/*       */
/*       */
/*       */
/*            */
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*       <h4 class="panel-title">*/
/*         <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">*/
/*         Duracion del paquete</a>*/
/*       </h4>*/
/*     </div>*/
/*     <div id="collapse4" class="panel-collapse collapse in">*/
/*         <div class="panel-body">*/
/*             */
/*             */
/*       */
/*           <table class="table table-bordered table-striped">*/
/*             <thead>*/
/*               <tr>*/
/*                 <th>Dias</th>*/
/*                 <th>Noches</th>*/
/*                 <th>Fecha Inicio</th>*/
/*                  <th>Fecha Fin</th>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*               <tr ng-repeat="duracion in paquete.duraciones">*/
/*                   */
/*                   */
/*                 <td>/.duracion.dias./</td>*/
/*                 <td>/.duracion.noches./</td>*/
/*                 <td>/.duracion.fechainicio./</td>*/
/*                 <td>/.duracion.fechafin./</td>*/
/*               </tr>*/
/* */
/*             </tbody>*/
/*           </table> */
/*             */
/*           */
/*             <div class=" md-inline-form inputdemoBasicUsage">*/
/*                 */
/*                  <md-input-container>*/
/*                  <label>Dias</label>*/
/*                     <input ng-model="paquete.nuevaduracion.dias">*/
/*                   </md-input-container>*/
/*          */
/*                  <md-input-container>*/
/*                  <label>Noches</label>*/
/*              <input  type="text" ng-model="paquete.nuevaduracion.noches"></input>*/
/*              */
/*               </md-input-container>*/
/*                 Fecha de inicio*/
/*                  <md-datepicker ng-model="paquete.nuevaduracion.fechainicio" md-placeholder="Fecha de inicio"></md-datepicker>*/
/*           Fecha de fin */
/*              <md-datepicker ng-model="paquete.nuevaduracion.fechafin" md-placeholder="Fecha de inicio"></md-datepicker>*/
/*              */
/*           */
/*              */
/*                <div></div>*/
/*                </div>*/
/*           <div id='anadirduracion' ng-click='paquete.anadirduracion()' class="btn btn-primary"  >Añadir duracion</div>  */
/*        */
/*         </div>*/
/*     </div>*/
/*   </div>*/
/*       */
/*       */
/*       */
/*       */
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*       <h4 class="panel-title">*/
/*         <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">*/
/*         Lugares</a>*/
/*       </h4>*/
/*     </div>*/
/*     <div id="collapse1" class="panel-collapse collapse ">*/
/*         <div class="panel-body">*/
/*             */
/*             */
/*            <div id="rutas" >*/
/*     */
/*     <h1 class="page-header"> Lugares para el Paquete*/
/*         <div >*/
/*     <table  class="table table-striped table-bordered table-hover col-md-4" draggable="true">*/
/*         <tr class="col-md-2">*/
/*             <td class="col-md-1">NOMBRE DEL LUGAR</td>*/
/*             <td class="col-md-1"></td></tr>*/
/*             <tr id='lugar/. lugar.nombre ./' ng-repeat='lugar in paquete.rutaselec.lugares' class="col-md-2" >*/
/*                                         <td class="col-md-1">/. lugar.nombre  ./</td> */
/*                 <td class="col-md-1"> */
/*                 <a href="" ng-click="eliminarlugar( paquete.lugar,paquete.rutaselec )" >Eliminar</a>*/
/*                 </td>*/
/*             </tr>*/
/*         </table>*/
/*         </div>*/
/*     <input type="text" name="lugar" ng-model='paquete.lugarnuevo' >*/
/*     */
/*     */
/*     <div id='anadirruta' ng-click='paquete.anadirlugar()' class="btn btn-primary" >Añadir lugar</div>*/
/*     */
/*     */
/*     */
/*     <ul class="nav nav-tabs">*/
/* */
/*         <li ng-repeat="ruta in paquete.rutas" ng-click='paquete.cambiarrutaselec(ruta)'><a href="#ruta/.ruta.numero./">Ruta /.ruta.numero ./</a></li>*/
/*         <li ng-click='paquete.anadirruta()'><a href="#" >+</a></li>*/
/*   */
/*     </ul>*/
/*     */
/*     <div class="tab-content" >*/
/*         */
/*     <div id="rutaselec/.paquete.ruta.numero./" class="tab-pane fade in active" >*/
/*     <h3>HOME</h3>*/
/*     <p>/.paquete.rutaselec.numero./</p>*/
/*     Ruta <input type="text" name="lugar" ng-model='paquete.rutaselec.texto' ondrop="drop(event)" >*/
/*     </div>*/
/*   */
/*     </div>*/
/*     */
/*     */
/*     <button class="btn btn-primary" >Siguiente</button>*/
/*        </div>*/
/*     </div>*/
/*   </div>*/
/*       */
/*       <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*       <h4 class="panel-title">*/
/*         <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">*/
/*         Estancia</a>*/
/*       </h4>*/
/*     </div>*/
/*     <div id="collapse3" class="panel-collapse collapse">*/
/*         <div class="panel-body">*/
/*             */
/*             */
/*             <table class="table table-bordered table-striped">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>N°</th>*/
/*                     <th>Nombre de Hotel</th>*/
/*                     <th>Categoria</th>*/
/*                     <th>Email</th>*/
/*                      <th>Dias de Permanencia</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 <tr ng-repeat="estancia in paquete.estancias">*/
/*                     <td>/.$index+1./</td>*/
/*                     <td>/.estancia.hotel.nombre./</td>*/
/*                     <td>/.estancia.hotel.categoria./</td>*/
/*                     <td>rockybalboa@mail.com</td>*/
/*                     <td>/.estancia.diaspermanencia./</td>*/
/*                 </tr>*/
/*               */
/*             </tbody>*/
/*         </table>*/
/*             */
/*             <div id='anadirestancia' ng-click='paquete.anadirestancia()' class="btn btn-primary"  data-toggle="modal" data-target="#myhotel">Añadir Estancia</div>*/
/*             */
/*             */
/*             <div class="modal fade" id="myhotel" role="dialog">*/
/*     <div class="modal-dialog">*/
/*     */
/*       <!-- Modal content-->*/
/*       <div class="modal-content">*/
/*         <div class="modal-header">*/
/*           <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*           <h4 class="modal-title">Hoteles disponibles</h4>*/
/*         </div>*/
/*         <div class="modal-body">*/
/*           <p>*/
/*               */
/*                 <table class="table table-bordered table-striped">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>N°</th>*/
/*                     <th>Nombre de Hotel</th>*/
/*                     <th>Categoria</th>*/
/*                     <th>Email</th>*/
/*                      <th></th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 <tr ng-repeat="hotel in paquete.hoteles">*/
/*                     <td>/.$index./</td>*/
/*                     <td>/.hotel.nombre./</td>*/
/*                     <td>/.hotel.categoria./</td>*/
/*                     <td>rockybalboa@mail.com</td>*/
/*                     <td > <input name="hotel" ng-model="paquete.hotelselec" type="radio"   ng-value="hotel"  > </td>*/
/*                 </tr>*/
/*                 <tr> <td >Hotel  <input type="text" class="form-control" placeholder="Ingrese nombre de hotel" ng-model="paquete.nuevohotel.nombre">  </td>*/
/*                 */
/*                     <td> Categoria <input type="text" class="form-control" placeholder="Ingrese categoria del hotel" ng-model="paquete.nuevohotel.categoria"> </td>*/
/*                     <td> Descripcion <input type="text" class="form-control" placeholder="Ingrese descripcion del hotel" ng-model="paquete.nuevohotel.descripcion"> </td>*/
/*                     <td> <div id='anadirhotel' ng-click='paquete.anadirhotel()' class="btn btn-primary"  >Añadir hotel a la lista de hoteles</div></td>*/
/*                     <td></td>*/
/*                 </tr>*/
/*               */
/*             </tbody>*/
/*         </table>*/
/*           */
/*           <input type="text" class="form-control" placeholder="Ingrese los dias de permanencia" ng-model="paquete.nuevaestancia.diaspermanencia"> */
/*           */
/*           */
/*           </p>*/
/*         </div>*/
/*         <div class="modal-footer">*/
/*             <button type="button" class="btn btn-default" data-dismiss="modal" ng-click="paquete.anadirhotelestancia()">Seleccionar</button>*/
/*           <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>*/
/*         </div>*/
/*       </div>*/
/*       */
/*     </div>*/
/*   </div>*/
/*   */
/*             */
/*             */
/*             */
/*             */
/*         </div>*/
/*     </div>*/
/*   </div>*/
/*       */
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*       <h4 class="panel-title">*/
/*         <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">*/
/*         Incluye</a>*/
/*       </h4>*/
/*     </div>*/
/*     <div id="collapse2" class="panel-collapse collapse">*/
/*         <div class="panel-body">*/
/*             */
/*       */
/*             */
/*            */
/*               <table class="table table-bordered  " >*/
/*                   <thead>*/
/*                     <tr >*/
/*                         <th class="col-md-2">Nombre</th><th ></th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     <tr ng-repeat="incluye in paquete.incluyes" >*/
/*                         <td class="col-md-2 ">/.incluye.nombre./</td><td >/.incluye.valor./</td>*/
/*                     </tr>*/
/*                     </tbody>*/
/*                     */
/*                 </table>*/
/*             */
/*           Nombre  <textarea class="form-control" rows="3" ng-model="paquete.nuevoincluye.nombre"></textarea> */
/*           valor <input type="text" class="form-control" placeholder="Campo de texto" ng-model="paquete.nuevoincluye.valor"> */
/*           <a href="#" class="btn btn btn-primary " ng-click="paquete.anadirnuevoincluye()">Añadir nuevo incluye</a>*/
/*         </div>*/
/*     </div>*/
/*   </div>*/
/*       */
/*       */
/*       */
/*   */
/* </div> */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/* */
/*       */
/*     */
/* </div>*/
/*     */
/*         <div class="modal-footer">*/
/*             */
/*           <button type="button" class="btn btn-default" data-toggle="modal" data-target="#configuracionenvio" ng-click="configurarEnvio()">Guardar y hacer correo</button>*/
/*      */
/*         </div>*/
/*         */
/*         */
/*         */
/*         */
/*         <div id="configuracionenvio" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*            <div class="modal-dialog" role="document">*/
/*                 <div class="modal-content">*/
/*                   <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*                       <span aria-hidden="true">&times;</span>*/
/*                     </button>*/
/*                     <h4 class="modal-title" id="myModalLabel">Configure los mayoristas a enviar </h4>*/
/*                   </div>*/
/*                   <div class="modal-body">*/
/*                       */
/*                       <select name="prevedorselec" ng-options="proveedor as proveedor.nombre for proveedor in proveedores " ng-model="prevedorselec"></select>*/
/*                       <button type="button" class="btn btn-default" ng-click="agregar_proveedor(prevedorselec)">Agregar a la lista</button>*/
/*                       <table class="table table-bordered  " >*/
/*                            <thead>*/
/*                                 <tr >*/
/*                                     <th class="col-md-2">Nombre proveedor</th><th >Correo electronico </th><th ></th>*/
/*                                 </tr>*/
/*                           </thead>*/
/*                           <tbody>*/
/*                           <tr ng-repeat="proveedors in provedorselecinados" >*/
/*                               <td class="col-md-2 ">/.proveedors.nombre./</td><td >/.proveedors.email./</td><td > <button type="button" class="btn btn-default" ng-click="quitar_proveedor(proveedors)">Quitar de la lista</button></td>*/
/*                           </tr>*/
/*                           </tbody>*/
/*                     */
/*                         </table>*/
/*                       */
/*                       */
/*                       */
/*                       */
/*                       */
/*                       */
/*                          <ul class="nav nav-tabs">*/
/*                              */
/*                         <li class="active"><a data-toggle="tab" href="#home">Home</a></li>*/
/*                         <li  class="/.prueba($index,provedorselecinados) ./" ng-repeat="proveedors in provedorselecinados" ><a data-toggle="tab" href="#contentab/.$index./" ng-mousedown="cambiarproveedorvisto(proveedors)" ng-mouseup='actualizartabs($index,provedorselecinados)'>/.proveedors.nombre./</a>*/
/*                         */
/*                         </li>*/
/*                        */
/*                        */
/*                         */
/*                           </ul>*/
/* */
/*                       <div class="tab-content">*/
/*                           */
/*                           */
/*                         <div id="home" class="tab-pane fade in active">*/
/*                           <h3>HOME</h3>*/
/*                           <p>Some content.</p>*/
/*                         </div>*/
/*                           */
/*                           */
/*                         <div id="contentab/.$index./" class="tab-pane tab-pane fade in active"  ng-repeat="proveedors in provedorselecinados">*/
/*                             */
/*                             */
/*                           <h3>Seleccione una plantilla para el proveedor /.proveedors.nombre./</h3>*/
/*                           */
/*                           */
/*                                     <p>*/
/*                                         <select name="plantillaselec/.$index./" ng-options="plantilla as plantilla.nombre for plantilla in plantillasdis " ng-model="proveedors.plantilla"        */
/*                                             ng-change="cambiarplantilla()" ng-mouseleave="cambiarplantillapost()">*/
/*                                         </select>*/
/*                                     </p>*/
/*                               */
/*                                 */
/*                         */
/*                       </div>*/
/*                       */
/*                           <textarea  ui-tinymce  ng-model="tinymceModel">  </textarea>*/
/*                      */
/*                          */
/*                         </div>              */
/*                       */
/*                                                   */
/*                     */
/*                       */
/*                                           */
/*                       */
/*                                        */
/*                       */
/*                       */
/* */
/*                   </div>*/
/*                   <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>*/
/*                     <button type="button" class="btn btn-primary">Guardar y enviar</button>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>  */
/*             */
/*         </div>*/
/*         */
/*          */
/*      */
/*      */
/* </form>*/
/*   */
/* </div>*/
/*     */
/*  */
/*     */
/*   */
/* */
