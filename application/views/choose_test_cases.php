<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Smart Grid Testing Suite</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/reset.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/visualize.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/datatables.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/buttons.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/checkboxes.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/inputtags.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/main.css" />

  </head>
  <body>
    <div id="gradient">
      <div id="stars">
        <div id="container">
        
          <header>
          
            <!-- Logo -->
            <a href="<?php echo site_url(); ?>/testing_suite/dashboard/"><h1 id="logo">Smart Grid Testing Suite</h1></a>
          
            <!-- User info -->
            <div id="userinfo">
              <img src="<?php echo base_url(); ?>files/img/avatar.png" alt="" />
              <div class="intro">
                Testing Suite Dashboard<br />
                <a href="#">Manage Profile</a>
              </div>
            </div>
          </header>
        
          <!-- The application "window" -->
          <div id="application">
          
            <br/><br/>
			<section id="content">
			<h1 style="text-align:center">TEST ID : PITC/INTR/LB/<?php echo str_pad($this->session->userdata('test_id'),6,"0",STR_PAD_LEFT); ?></h1>
			</section>
			
            <!-- Secondary navigation -->
            <nav id="secondary">
              <ul>
                <li class="current"><a href="#">Choose Test Cases</a></li>
              </ul>
            </nav>
          
            <!-- The content -->
            <section id="content">


<div class="column left">
<h2>Data Reading Test Cases</h2>
    <section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Reading Stored Instantaneous Data
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
	<section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Reading Stored Billing Data
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
	<section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Reading Stored Monthly Billing Data
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
	<section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Reading Stored Events Data
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
	<section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Reading Stored Load Profile Data
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
	<section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Reading Meter Clock
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
	<section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Reading Meter Visuals
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
	<section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Reading ON Demand Instantaneous Data
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
	<section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Reading ON Demand Billing Data
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
	<section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Reading ON Demand Monthly Billing Data
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
	<section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Reading ON Demand Events Data
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
	<section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Reading ON Demand Load Profile Data
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
	<section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Transaction Status Read
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
	<div class="clear"></div>
 </div>
<div class="column right">
<h2>Data Writing Test Cases</h2>
    <section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Authorization Service
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
	<section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Create Device / Meter
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
	<section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Operate Aux Relay - Turn ON
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
	<section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Operate Aux Relay - Turn OFF
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
	<section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Time Synchronization
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
	<section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Sanctioned Load Control
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
	<section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Load Shedding Scheduling
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
	<section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Time of Use Change
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
	<section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Update IP & Port
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
	<section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Meter Data Sampling
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
	<section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Wakeup SIM Number Update
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
	<section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Meter Status Update
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
	<section>
		<div>
			<a href="#" class="button opener" style="width:80%;font-size:19px;text-align:center;letter-spacing:1.5px;text-align:left">
			Transaction Cancel
			<br/><span class="test-status">Status: <span id="t1">Not Initialized</span></span></a>
		</div>
    </section>
	<br/>
<p style="float:right">
    <input type="button" class="button opener" style="color:white;background:#900;font-size:15px;border:0px;font-weight:0px;text-shadow:0px 0px 0 #fff" value="Finish - Generate Certificate" />
    
  </p>
		<div class="clear"></div>
 </div>

<h4>Note: After performing tests Click finish to generate Certificate</h4>
		</div>    
    <footer id="copyright">Design &amp; Developed by PITC</footer>
  </div>
</div>

    <!-- JavaScript -->
    <script src="<?php echo base_url(); ?>files/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>files/js/jquery.ui.js"></script>
	
	<!-- Jquery Modal -->
	<div class="md" id="dialog" style="width:600px">	
	<div id="info" style="display: none;">
		<fieldset disabled="disabled">
			<legend>Meter Information</legend>

			<div class="col-md-6">
				TEST ID: <b>PITC/INTR/LB/<?php echo str_pad($this->session->userdata('test_id'),6,"0",STR_PAD_LEFT); ?></b>
			</div>

			<div class="col-md-6 text-right">
				MSN: <b>3797011417</b>
			</div>
		</fieldset>
	</div>
<table class="table table-bordered wizard-table" id="info2" style="display: none;">
	<thead>
		<tr style="background-color: #c1c1c1;">
			<th class="text-center">Status</th>
			<th>Process</th>
			<th class="text-center">Duration</th>
		</tr>
	</thead>

	<tbody>
				<tr>
			<td id="status_1" class="col-md-1 text-center"><i class="fa fa-check-square-o" aria-hidden="true"></i></td>

			<td>Command processing started by Testing Suite</td>

			<td id="duration_1" class="col-md-3 text-center duration">1 sec</td>
		</tr>
				<tr>
			<td id="status_2" class="col-md-1 text-center"><i class="fa fa-check-square-o" aria-hidden="true"></i></td>

			<td>Command sent to MDC</td>

			<td id="duration_2" class="col-md-3 text-center duration">4 secs</td>
		</tr>
				<tr>
			<td id="status_3" class="col-md-1 text-center"><i class="fa fa-check-square-o" aria-hidden="true"></i></td>

			<td>Command / SMS sent to Meter</td>

			<td id="duration_3" class="col-md-3 text-center duration">1 sec</td>
		</tr>
				<tr>
			<td id="status_4" class="col-md-1 text-center"><i class="fa fa-check-square-o" aria-hidden="true"></i></td>

			<td>Connection established</td>

			<td id="duration_4" class="col-md-3 text-center duration">1 sec</td>
		</tr>
				<tr>
			<td id="status_5" class="col-md-1 text-center"><i class="fa fa-check-square-o" aria-hidden="true"></i></td>

			<td>Fetching data / Command execution</td>

			<td id="duration_5" class="col-md-3 text-center duration">47 secs</td>
		</tr>
			</tbody>
</table>
</div>

<script type="text/javascript">
/*
	$(document).ready(function(){

		//$("table.on-demand-response-table-5c611ed7270d2").parents(".modal-dialog").css({'width': '80%', 'max-width': '1350px'});
		if ( $('table.on-demand-response-table-5c611ed7270d2').hasClass('dataTable') ) {
			$('table.on-demand-response-table-5c611ed7270d2').destroy();
		}

		if( $('table.on-demand-response-table-5c611ed7270d2 th').length == 0 )
		{
			alert('Error: No <th> found in response table.');
		}
		else
		{
			$('table.on-demand-response-table-5c611ed7270d2').DataTable( {
				data: [{"data_item":"Active energy(+) total","name_of_child_data_item":"Active Energy Total","status":"Success","reading_result":"235.050","unit":"kWh"},{"data_item":"Active energy (+) tariff1","name_of_child_data_item":"Active Energy Peak","status":"Success","reading_result":"235.050","unit":"kWh"},{"data_item":"Reactive energy(+) total","name_of_child_data_item":"Reactive Energy Total","status":"Success","reading_result":"130.920","unit":"kvarh"},{"data_item":"Reactive energy(+) tariff1","name_of_child_data_item":"Reactive Energy Peak","status":"Success","reading_result":"130.920","unit":"kvarh"},{"data_item":"Active energy(-) total","name_of_child_data_item":"Active energy(-) total","status":"Success","reading_result":"0.015","unit":"kWh"},{"data_item":"Reactive energy(-) total","name_of_child_data_item":"Reactive energy(-) total","status":"Success","reading_result":"30.875","unit":"kvarh"},{"data_item":"Voltage in phase L1","name_of_child_data_item":"Voltage in phase L1","status":"Success","reading_result":"230.51","unit":"V"},{"data_item":"Current in phase L1","name_of_child_data_item":"Current in phase L1","status":"Success","reading_result":"0.25","unit":"A"},{"data_item":"Total active power (+)","name_of_child_data_item":"Total active power (+)","status":"Success","reading_result":"0.056","unit":"kW"},{"data_item":"Total active power (-)","name_of_child_data_item":"Total active power (-)","status":"Success","reading_result":"0.000","unit":"kW"}],
																// Monthly Billing
							columns: [

								{ "data": "name_of_child_data_item" },
								{ "data": "reading_result" },
								{ "data": "unit" }

							],
																			// "scrollX": true,
				// "scrollY": true,
				paging: false,
				searching: false,
				responsive: true,
			});
			$('table.on-demand-response-table-5c611ed7270d2').css({"width": "100%"});
		}

	});
*/

</script>
</div>


	<div class="text-right btn-container " style="display: none;">
		<button id="btn-cancel" class="btn btn-danger" style="display: none;">Cancel Execution</button>
	</div>

	<script type="text/javascript">
	
		$(document).ready(function(){

			$('#btn-cancel').click(function(){

				swal({
				  title: "",
				  text: "Are you sure you want to cancel execution of this operation?",
				  type: "warning",
				  showCancelButton: true,
				  confirmButtonColor: "#DD6B55",
				  confirmButtonText: "Yes",
				  cancelButtonText: "No",
				  closeOnConfirm: false
				},
				function(){

				  ajx({
				  	type: 'post',
				  	url: "http://116.0.54.229/cosmos/423/public/admin/cancel-on-demand-operation",
				  	data: {
				  		'id': 'aGVp',
				  	},

				  }).done(function(data){

				  	if ( data.success == true ) {
					  	$('#btn-cancel').hide('fast');
					  	swalAutoClose("", data.message, "success");
					} else {
						swal("", data.message, "error");
					}

				  }).fail(function(jqXHR, exception){
				        ajax_errors_sweetalert_func(jqXHR, exception);
				  });
				});
			});
		});
	</script>


<script id="my-script" type="text/javascript">

	var is_response_shown = false;

	var wait_time = '57';
	var wait_time_interval = 0;
	var refresh_time_interval = 0;
	var time_elapsed = '3';

	var on_demand_read_response_timeout = '3';
	on_demand_read_response_timeout *= 60; // convert it into seconds.
	var timeoutFunction;

	function startWizard() {

		$('#my-script').closest('.modal').find('.header-right-side').empty().prepend( $('.time-elapsed-container') );

		refreshOdOpStatus();

		wait_time_interval = setInterval(function(){

			if(wait_time > 0) {
				wait_time--;
			}

			$('#wait_time').text( secondsToHumanTime(wait_time) );

			if(wait_time <= 0){
				// $('#wait_alert').hide('fast');
				$("#wait_alert").html("Now you can make new on demand request.");
				clearInterval(wait_time_interval);
			}

		}, 1000);

		$('#my-script').closest('.modal').on('hidden.bs.modal', function () {
			clearInterval(wait_time_interval);
			clearTimeout(timeoutFunction);
		});

					time_elapsed_interval = setInterval(function() {
				time_elapsed++;

				$('#time_elapsed').text( secondsToHumanTime(time_elapsed) );

				statuses_time = 0;
				$('.duration').each(function(index){
					statuses_time += $(this).data('duration_time');
				});

				$('.duration.active-status').text( secondsToHumanTime(time_elapsed - statuses_time) );

			}, 1000);


			$('#my-script').closest('.modal').on('hidden.bs.modal', function () {
				clearInterval(time_elapsed_interval);
				clearTimeout(timeoutFunction);
			});
		

		refresh_time_interval = setInterval(function(){
			refreshOdOpStatus();
		},3000);

		timeoutFunction = setTimeout(function(){


			clearInterval(refresh_time_interval);
			clearInterval(time_elapsed_interval);

			$("table.wizard-table").parent().html('<p class="text-bold">Request Timeout</p>');

			ajx({

				type: 'post',
				url: "http://116.0.54.229/cosmos/423/public/admin/on-demand-operation-timeout",
				data: {
					'id': 'aGVp',
				},

			});

		}, on_demand_read_response_timeout * 1000);

		$('#my-script').closest('.modal').on('hidden.bs.modal', function () {
			clearInterval(refresh_time_interval);
			clearTimeout(timeoutFunction);
		});

				startOnDemandOperationJob();
		
	}

	function startOnDemandOperationJob()
	{

		ajx({
			type: 'post',
			url: "http://116.0.54.229/cosmos/423/public/admin/start-on-demand-job",
			data: {
				'id': 'aGVp',
				'implementation_group_idt': 'HEX007',
			},
		}).done(function(data){

		});
	}


	startWizard();


	function refreshOdOpStatus()
	{
		window.do_ajax_loading = false;
		ajx({
			type: 'post',
			url: "http://116.0.54.229/cosmos/423/public/admin/get-od-op-data",
		  	data: {
		  		'id': 'aGVp',
		  	},

		}).done(function(response){

			if( response.success == null )
				return;

			var data = response.log;

			data.created_at = Math.round(new Date(data.created_at).getTime() / 1000)

			active_status_number = 1;
			var is_completed = false;
			total_time = 0;

			var num_of_statuses = 5;

			for(var i = 1; i <= num_of_statuses; i++)
			{
				data['status_'+i+'_time'] = data['status_'+i+'_time'] ? Math.round(new Date(data['status_'+i+'_time']).getTime() / 1000) : 0;

				if(data['status_'+i+'_time'] != 0)
				{
					active_status_number++;

					var duration_time = data['status_'+i+'_time'] - data.created_at;

					if(i > 1)
						duration_time = data['status_'+i+'_time'] - data['status_'+ (i-1) +'_time'];

					duration_time = duration_time < 1 ? 1 : duration_time;
					total_time += duration_time;
					$('#duration_'+i).text( secondsToHumanTime( duration_time ) );
					$('#duration_'+i).data( 'duration_time', duration_time );
					$('#status_'+i).html('<i class="fa fa-check-square-o" aria-hidden="true"></i>');

					if(i == num_of_statuses)
					{
						is_completed = true;
					}

					// Hide cancel execution button after completion of
					// command sent to MDC
					if ( i == 2 ) {
						$("#btn-cancel").hide();
					}

				}
				else
				{
					if(i != active_status_number)
						$('#duration_'+i).text( '-' );

					$('#duration_'+i).data( 'duration_time', 0 );
					$('#status_'+i).html('<i class="fa fa-square-o" aria-hidden="true"></i>');
				}

				$('#duration_'+i).removeClass('active-status');
			}

			// if ( ! is_hex1_read_request_sent && active_status_number == 2 && ( data['idt'] == 'HEX1' || data['idt'] == 'HEX007' ) ) {
			// 	is_hex1_read_request_sent = true;
			// 	var form_params = {
			// 		'id': 'aGVp',
			// 		'request_type': data['idt']
			// 	};

			// 				// 		var form_url = "http://116.0.54.229/cosmos/423/public/admin/on-demand-daily-read-send-request";
			// 	if ( $log->jb_in->jb_req_type->idt == 'ONIRRR' )
			// 		var form_url = "http://116.0.54.229/cosmos/423/public/admin/on-demand-instant-read-send-request";
			// 	
			// 	ajx({
			// 		type: 'post',
			// 		url: form_url,
			// 	  	data: form_params,
			// 	}).done(function(data){

			// 	});
			//}

			if(data.is_cancelled == false) {
				$('#status_'+active_status_number).html('<i class="fa fa-spinner fa-spin"></i>');
				$('#duration_'+active_status_number).addClass('active-status');
			} else {
				$('#duration_'+active_status_number).html( '<span class="label label-danger">'+__('Cancelled')+'</span>' );
			}

			if(is_completed == true || data.is_cancelled == true) {
				$('#time_elapsed').text( secondsToHumanTime( total_time ) );

				if(typeof time_elapsed_interval != 'undefined') {
					clearInterval(time_elapsed_interval);
					clearTimeout(timeoutFunction);
				}
			}

			if ( data.response != '' && data.response != null ) {
				console.log(data.response);
				var dt = JSON.parse( data.response );

				// in case if this is just a message.
				if ( typeof dt.status != 'undefined' && dt.status == false ) {
					clearInterval(refresh_time_interval);
					clearTimeout(timeoutFunction);
					setTimeout(function() {
						$("table.wizard-table").slideUp();
						$('#info5c611ea3a14fd').hide();
						$("table.wizard-table").parent().html('<p class="text-bold">' + dt.msg + '</p>');
					}, 1000);
					return false;
				}

				// if request is success and response received.
				if ( is_completed == true && typeof dt.status != 'undefined' && dt.status == true && ! is_response_shown ) {
					dt = JSON.parse( dt.msg );

					var new_dt = [];

					clearInterval(refresh_time_interval);
					clearTimeout(timeoutFunction);
					setTimeout(function() {
						$("table.wizard-table").slideUp();
						$('#info5c611ea3a14fd').hide();
						$(".time-elapsed-container").hide();
						$(".btn-container").hide();

						$(".on-demand-response-container").css('width', '100%').removeClass('hidden').html('Loading...');

						ajx({
							type: 'get',
							url: "http://116.0.54.229/cosmos/423/public/admin/on-demand-job-response/aGVp",
						}).done(function(data){
							$(".on-demand-response-container").html(data);
							$(".on-demand-response-container").find('h4').first().remove();
						});
					}, 1000);
					is_response_shown = true;
				}
			} else {
				if ( is_completed == true ) {
					setTimeout(function() {console.log()
						$("table.wizard-table").slideUp();
						$('#info5c611ea3a14fd').hide();
						$("table.wizard-table").parent().html('<p class="text-bold">Your command have been successfully executed.</p>');
					}, 1000);
				}
			}
		}).fail(function(jqXHR, exception){

	        ajax_errors_sweetalert_func(jqXHR, exception);
		}).always(function(){
			window.do_ajax_loading = true;
		});
	}
	*/
</script>
</div>
</div>
	
  </body>
  	<script type="text/javascript">
	$( function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
	  modal: true,
	  width: 600,
	  
	  show: {
        effect: "blind",
        duration: 500
      },
      hide: {
        effect: "explode",
        duration: 500
      },
	  beforeClose: function(event, ui) {
		$("#gradient").removeClass('ui-widget-overlay');
	}
    });
 
    $( ".opener" ).on( "click", function() {
      $( "#dialog" ).dialog( "open" );
	  $("#info").show();
	  $("#info2").show();
	  $("#gradient").addClass('ui-widget-overlay');
	  
    });
  });
	</script>
</html>