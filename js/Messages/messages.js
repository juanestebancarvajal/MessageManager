$(document).ready(function() {
    $('#sectionGeneralMessages').hide();
    $('#sectionScheduler').hide();
    $('#sectionFilter').hide();
    
    $('.nav-tabs a').click(function(e) {
        $(this).tab('show');
        $('#sectionGeneralMessages').show();
        $('#sectionScheduler').show();
        $('#sectionFilter').show();
    });
});


/*
 * @autor Juan Esteban Carvajal
 * email juanesteban100@gmail.com
 * Inicializando Variables
 */
var has_had_focus = false;
        var pipe = function(el_name, send) {
            var div  = $(el_name + ' div');
            var inp  = $(el_name + ' input');
            var form = $(el_name + ' form');

            var print = function(m, p) {
                p = (p === undefined) ? '' : JSON.stringify(p);
                div.append($("<code>").text(m + '(' + el_name + ')' + p));
                div.scrollTop(div.scrollTop() + 10000);
            };

            if (send) {
                form.submit(function() {
                    send(inp.val());
                    inp.val('');
                    return false;
                });
            }
            return print;
        };

      // Stomp.js boilerplate
      var ws = new SockJS('http://190.248.48.5:15674/stomp');
      var client = Stomp.over(ws);

      // SockJS does not support heart-beat: disable heart-beats
      client.heartbeat.outgoing = 0;
      client.heartbeat.incoming = 0;
      client.debug = pipe('#second');
      
      var on_connect = function(x) {
        $("#bnt-message-send").click(function(){
                  var contenido = $("#message_text_area").val();
                  /*Exist un exchange llamado logs
                   * Cola logs
                   * Cola logsLG
                   * 
                   * 
                   */
                  /**Exchange logs*/
                  client.send('servicioalcliente',{"content-type":"text/plain"}, contenido);
                  id = client.subscribe("logsLG", function(d) {
                       print_first(d.body + 'vvvvvv');
                  });
        });
      };
      var on_error =  function() {
        console.log('error');
      };
      client.connect('smarttvLG', 'smarttvLG', on_connect, on_error, '/');

      $('#first input').focus(function() {
          if (!has_had_focus) {
              has_had_focus = true;
              $(this).val("");
          }
      });



/*
 * @autor Juan Esteban Carvajal
 * email juanesteban100@gmail.com
 * Listener del boton para enviar el mensaje
 
$("#bnt-message-send").click(function(){
          client.send('servicioalcliente', {"content-type":"text/plain"}, 'Juan Carvajal2');
          id = client.subscribe("logsLG", function(d) {
               print_first(d.body + 'vvvvvv');
          });
});
*/
