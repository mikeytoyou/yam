<?php

/* paquete/constructorpaquete.html.twig */
class __TwigTemplate_b974473fc6a22355ca7b2f4b8c0520878f49696e69e77fcaf01ac78e41665ca6 extends Twig_Template
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
        $__internal_be8df87a07bf4051e13507eb96d43bcd47e4c0299929ddb0bac90c96fc423098 = $this->env->getExtension("native_profiler");
        $__internal_be8df87a07bf4051e13507eb96d43bcd47e4c0299929ddb0bac90c96fc423098->enter($__internal_be8df87a07bf4051e13507eb96d43bcd47e4c0299929ddb0bac90c96fc423098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "paquete/constructorpaquete.html.twig"));

        // line 1
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js\"></script>
<script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js\"></script>
<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">


<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>


<script src=\"https://cdn.rawgit.com/angular-ui/bower-ui-grid/master/ui-grid.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://cdn.rawgit.com/angular-ui/bower-ui-grid/master/ui-grid.min.css\"> 
<script  type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/main.js"), "html", null, true);
        echo "\"  > </script>

 <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
 <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\">
 
 <link rel=\"stylesheet\" href=\"http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0-rc2/angular-material.min.css\">
<script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-animate.min.js\"></script>
  <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-aria.min.js\"></script>
  <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-messages.min.js\"></script>

  <!-- Angular Material Library -->
  <script src=\"http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0-rc2/angular-material.min.js\"></script>


<script>

app.controller(\"myCtrl\", function(\$scope,\$http) {
   
   
    \$scope.paquete={};
        \$scope.paquete.rutas=[];
         \$scope.paquete.incluyes=[];
        \$scope.paquete.lugarnuevo='';
         
         \$scope.gridDuraciones= { data:  [{'nombre':'carlos','apellido':'dos'}] };
        
         \$scope.getlistadehoteles=function(){
             
              \$http.get(\"";
        // line 43
        echo $this->env->getExtension('routing')->getUrl("listadehotelesjson");
        echo "\")
                            .success(function(respuesta){
                                console.log ( respuesta );
                            \$scope.paquete.hoteles=   respuesta;
                            });
         }
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
        
    }
    
    
    
     \$scope.paquete.anadirnuevoincluye=function (){
            \$scope.paquete.incluyes.push(\$scope.paquete.nuevoincluye);
            \$scope.paquete.nuevoincluye={};
      
    }
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
     
     \$scope.paquete.guardar=function(){
         
                

                \$http.post(\"";
        // line 126
        echo $this->env->getExtension('routing')->getUrl("paqueteconstructormay");
        echo "\", \$scope.paquete)
                            .success(function(respuesta){
                               \$( \"#resultados\" ).html(respuesta);
                            });
  
         
        
    
};
});
   \$(function() {
    \$( \"#fechainicio\" ).datepicker({ dateFormat: 'yy-mm-dd' });
    \$( \"#fechafin\" ).datepicker({ dateFormat: 'yy-mm-dd' });
    
  });
  

</script>

    



<div id=\"construirpaquete\" ng-app=\"myApp\" ng-controller=\"myCtrl\">
    <form action=\"";
        // line 150
        echo $this->env->getExtension('routing')->getUrl("paqueteconstructormay");
        echo "\">   
  <div class=\"panel-group\" id=\"accordion\">
      
      
      
           
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h4 class=\"panel-title\">
        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse4\">
        Duracion del paquete</a>
      </h4>
    </div>
    <div id=\"collapse4\" class=\"panel-collapse collapse\">
        <div class=\"panel-body\">
            
            <div  class=\"gridStyle\" ng-grid=\"gridDuraciones\">
            </div>
      
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
         
            Noches <input  type=\"text\" ng-model=\"paquete.nuevaduracion.noches\"></input>
            Fecha de Inicio 
            <div class='input-group date' style=\"width: 120px\" >
                    <input type='text' class=\"form-control \"  ng-model=\"paquete.nuevaduracion.fechainicio\" id='fechainicio'/>
                    <span class=\"input-group-addon\"> 
                        <span class=\"glyphicon glyphicon-calendar\"></span>
                    </span>
                </div>
             Fecha de fin 
            <div class='input-group date' style=\"width: 120px\" >
                    <input type='text' class=\"form-control \"  ng-model=\"paquete.nuevaduracion.fechafin\" id='fechafin'/>
                    <span class=\"input-group-addon\"> 
                        <span class=\"glyphicon glyphicon-calendar\"></span>
                    </span>
                </div>
             
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
    <div id=\"collapse1\" class=\"panel-collapse collapse in\">
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
            
      
            
            <div class=\"gridStyle\" ng-grid=\"gridOptions\"> 
            
                
                
                
              
            
            </div>
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
    
  
  <button type=\"button\"  ng-click=\"paquete.guardar()\">Guardar y hacer correo</button>
     
</form>
  
</div>
    
  <div id=\"resutados\"></div>
    
  
";
        
        $__internal_be8df87a07bf4051e13507eb96d43bcd47e4c0299929ddb0bac90c96fc423098->leave($__internal_be8df87a07bf4051e13507eb96d43bcd47e4c0299929ddb0bac90c96fc423098_prof);

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
        return array (  182 => 150,  155 => 126,  69 => 43,  38 => 15,  22 => 1,);
    }
}
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>*/
/* <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>*/
/* <!-- Latest compiled and minified CSS -->*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* */
/* <!-- Optional theme -->*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">*/
/* */
/* */
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/* */
/* */
/* <script src="https://cdn.rawgit.com/angular-ui/bower-ui-grid/master/ui-grid.min.js"></script>*/
/* <link rel="stylesheet" href="https://cdn.rawgit.com/angular-ui/bower-ui-grid/master/ui-grid.min.css"> */
/* <script  type="text/javascript" src="{{ asset('bundles/js/main.js') }}"  > </script>*/
/* */
/*  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>*/
/*  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">*/
/*  */
/*  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0-rc2/angular-material.min.css">*/
/* <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-animate.min.js"></script>*/
/*   <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-aria.min.js"></script>*/
/*   <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-messages.min.js"></script>*/
/* */
/*   <!-- Angular Material Library -->*/
/*   <script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0-rc2/angular-material.min.js"></script>*/
/* */
/* */
/* <script>*/
/* */
/* app.controller("myCtrl", function($scope,$http) {*/
/*    */
/*    */
/*     $scope.paquete={};*/
/*         $scope.paquete.rutas=[];*/
/*          $scope.paquete.incluyes=[];*/
/*         $scope.paquete.lugarnuevo='';*/
/*          */
/*          $scope.gridDuraciones= { data:  [{'nombre':'carlos','apellido':'dos'}] };*/
/*         */
/*          $scope.getlistadehoteles=function(){*/
/*              */
/*               $http.get("{{url('listadehotelesjson')}}")*/
/*                             .success(function(respuesta){*/
/*                                 console.log ( respuesta );*/
/*                             $scope.paquete.hoteles=   respuesta;*/
/*                             });*/
/*          }*/
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
/*     }*/
/*     */
/*     */
/*     */
/*      $scope.paquete.anadirnuevoincluye=function (){*/
/*             $scope.paquete.incluyes.push($scope.paquete.nuevoincluye);*/
/*             $scope.paquete.nuevoincluye={};*/
/*       */
/*     }*/
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
/*      $scope.paquete.guardar=function(){*/
/*          */
/*                 */
/* */
/*                 $http.post("{{url('paqueteconstructormay')}}", $scope.paquete)*/
/*                             .success(function(respuesta){*/
/*                                $( "#resultados" ).html(respuesta);*/
/*                             });*/
/*   */
/*          */
/*         */
/*     */
/* };*/
/* });*/
/*    $(function() {*/
/*     $( "#fechainicio" ).datepicker({ dateFormat: 'yy-mm-dd' });*/
/*     $( "#fechafin" ).datepicker({ dateFormat: 'yy-mm-dd' });*/
/*     */
/*   });*/
/*   */
/* */
/* </script>*/
/* */
/*     */
/* */
/* */
/* */
/* <div id="construirpaquete" ng-app="myApp" ng-controller="myCtrl">*/
/*     <form action="{{url('paqueteconstructormay')}}">   */
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
/*     <div id="collapse4" class="panel-collapse collapse">*/
/*         <div class="panel-body">*/
/*             */
/*             <div  class="gridStyle" ng-grid="gridDuraciones">*/
/*             </div>*/
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
/*           </table>  */
/*             <div class=" md-inline-form inputdemoBasicUsage">*/
/*                 */
/*                  <md-input-container>*/
/*                  <label>Dias</label>*/
/*                     <input ng-model="paquete.nuevaduracion.dias">*/
/*                   </md-input-container>*/
/*          */
/*             Noches <input  type="text" ng-model="paquete.nuevaduracion.noches"></input>*/
/*             Fecha de Inicio */
/*             <div class='input-group date' style="width: 120px" >*/
/*                     <input type='text' class="form-control "  ng-model="paquete.nuevaduracion.fechainicio" id='fechainicio'/>*/
/*                     <span class="input-group-addon"> */
/*                         <span class="glyphicon glyphicon-calendar"></span>*/
/*                     </span>*/
/*                 </div>*/
/*              Fecha de fin */
/*             <div class='input-group date' style="width: 120px" >*/
/*                     <input type='text' class="form-control "  ng-model="paquete.nuevaduracion.fechafin" id='fechafin'/>*/
/*                     <span class="input-group-addon"> */
/*                         <span class="glyphicon glyphicon-calendar"></span>*/
/*                     </span>*/
/*                 </div>*/
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
/*     <div id="collapse1" class="panel-collapse collapse in">*/
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
/*             <div class="gridStyle" ng-grid="gridOptions"> */
/*             */
/*                 */
/*                 */
/*                 */
/*               */
/*             */
/*             </div>*/
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
/*   */
/*   <button type="button"  ng-click="paquete.guardar()">Guardar y hacer correo</button>*/
/*      */
/* </form>*/
/*   */
/* </div>*/
/*     */
/*   <div id="resutados"></div>*/
/*     */
/*   */
/* */
