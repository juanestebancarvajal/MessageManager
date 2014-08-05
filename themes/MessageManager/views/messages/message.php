<?php
/*Importando Librerias JS*/
Yii::app()->getClientScript()->registerCoreScript('jquery',CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/Librerias/stomp.js',CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/Messages/messages.js',CClientScript::POS_END);
?>
<script src="http://cdn.sockjs.org/sockjs-0.3.min.js"></script>
<h2>Mensajeria</h2></br>
<div class="row">
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#sectionGeneralMessages">General</a></li>
        <li><a href="#sectionScheduler">Programacion</a></li>
        <li><a href="#sectionFilter">Filtos</a></li>
    </ul>
    <div class="tab-content"><!--Start Tab Content-->
        
        <!--Start Tab 1-->
        <div id="sectionGeneralMessages" class="tab-pane fade in active">
            <form action="<?php echo Yii::app()->createUrl("messages/send")?>">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-8">
                            <h3>Titulo</h3>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Titulo Del Mensaje">
                            <h3>Mensajes</h3>
                            <textarea id="message_text_area" class="form-control" rows="5"></textarea>
                        </div>

                        <div class="col-lg-4">
                            <h3>Plataforma</h3>
                            <select class="form-control input-sm">
                                <option value="volvo">LG</option>
                                <option value="saab">Samsumg</option>
                                <option value="mercedes">Smart Play</option>
                                <option value="audi">IOS</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    </br>
                    <button type="submit" id="bnt-message-send" class="btn btn-primary">Enviar</button>
                </div>
            </form>
       
        </div>
        <!--END Tab 1-->
        
        <!--End Tab 2-->
        <div id="sectionScheduler" class="tab-pane fade in active">
            
        </div>
        <!--End Tab 2-->
        
        <!--End Tab 3-->
        <div id="sectionFilter" class="tab-pane fade in active">
            
        </div>
        <!--End Tab 3-->
        


    </div><!--End TabContent-->
</div>


