<div class="row">
   <div class="col-md-12">
      <div class="box box-solid">
         <div class="box-header with-border">
            <h3 class="box-title">Not Mapped Events</h3>
         </div><!-- /.box-header -->
         
         <div class="box-body">
            <table id="exchange_events" class="table table-boarderd dataTable display" cellspacing="0" width="100%">
               <thead>
                  <tr>
                     <th>Exchange EventID</th>
                     <th>Event Name</th>
                     <th>Event Date</th>
                     <th>Event Time</th>
                     <th>Event TimeStamp</th>
                     <th>Venue name</th>
                     <th>Local EventID</th>
                     <th>Source</th>
                     <th>Exchange</th>
                     <th>User</th>
                     <th>Approve</th>
                  </tr>
               </thead>
               <tbody id="events"></tbody>
            </table>
         </div><!-- /.box-body -->
      </div><!-- /.box -->
   </div>
</div>

<div id="confirmEventMapping" class="modal fade" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Confirm Event Mapping</h4>
         </div>
         <div class="modal-body">
            <p>Are you sure to proceed approval?</p>
         </div>
         <div class="modal-footer">
            
         </div>
      </div>

  </div>
</div>
<!-- 
<script type="text/javascript">
   $(function(){
      getExchangeEvents();
   });
        
        var events;
        function getExchangeEvents() {
            var content = "";
            var url = 'v1/exchange/event/get_by_status?approve_status=' + 0;
            $.ajax({
                url: url,
                headers: {
                    'Broker-key': 'd63c6883bf3fc97a8da96384a514dac0'
                }
            }).done(function (data) {
                if(data.success) {
                    events = data.success
                    for(i in events) {
                        content += "<tr>";
                        content += "<td id='event_"+events[i].exchange_event_id+"'><label onclick='inlineExchangeEventID("+i+")'>"+events[i].exchange_event_id+"</label></td>";
                        content += "<td>"+events[i].event_name+"</td>";
                        content += "<td>"+events[i].event_date+"</td>";
                        content += "<td>"+events[i].event_time+"</td>";
                        content += "<td>"+events[i].event_timestamp+"</td>";
                        content += "<td>"+events[i].venue_name+"</td>";
                        content += "<td>"+events[i].local_event_id+"</td>";
                        content += "<td>"+events[i].source+"</td>";
                        content += "<td>"+events[i].exchange_id+"</td>";
                        content += "<td>"+events[i].user+"</td>";
                        content += "<td><input type='button' value='Approve' onclick='approveEvent(i)'</td>";

                        content += "</tr>";
                    }
                    $("#events").html(content);
                }
            });
        }

        function inlineExchangeEventID(id) {
            var content = '<input type="text" value="'+events[id].exchange_event_id+'" id="eventID" /><input type="button" onclick="updateExchangeEventID('+id+')" value="ok" /><input type="button" onclick="cancelExchangeEventID('+id+')" value="cancel" />';
            $("#event_"+events[id].exchange_event_id).html(content);
        }

        function updateExchangeEventID(id) {
            var new_event_id = $("#eventID").val();
            var mongo_id = events[id]._id.$id;
            var url = 'v1/exchange/event/update_id?_id=' + mongo_id +'&exchange_event_id=' + new_event_id;
            $.ajax({
                url: url,
                headers: {
                    'Broker-key': 'd63c6883bf3fc97a8da96384a514dac0'
                }
            }).done(function (data) {
                if(data.success) {
                    events[id].exchange_event_id = new_event_id;
                    var label = "<label onclick='inlineExchangeEventID("+id+")'>"+new_event_id+"</label>";
                    $("#event_"+events[id].exchange_event_id).html(label);
                }
            });
        }

        function cancelExchangeEventID(id) {
            var label = "<label onclick='inlineExchangeEventID("+id+")'>"+events[id].exchange_event_id+"</label>";
            $("#event_"+events[id].exchange_event_id).html(label);
        }

        function approveEvent(id) {
            var mongo_id = events[id]._id.$id;
            var url = 'v1/exchange/event/update_status?_id=' + mongo_id +'&approve_status=1';
            $.ajax({
                url: url,
                headers: {
                    'Broker-key': 'd63c6883bf3fc97a8da96384a514dac0'
                }
            }).done(function (data) {
                if(data.success) {
                    getExchangeEvents();
                }
            });
        }
    </script> -->