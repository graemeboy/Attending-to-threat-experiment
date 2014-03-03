<!DOCTYPE html>
<html>
  <head>
    <title>Experimental Environment</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  </head>
  <body>
  <div class="container-fluid">
	    <div class="hero-unit" style="text-align: center;">
	    	<h3><a href="/">Attending to Threat: Race-based Patterns of Selective Attention</a></h3>
	    	<p>A replication of Trawalter, Todd, Baird, & Richeson's (2008) design that includes a control for <strong><span style="color:#00a368">c</span><span style="color:#ffd300">o</span><span style="color:#c40233">l</span><span style="color:#0088bf">o</span><span style="color:#ce0064">r</span></strong> as a disjunctive feature</p>
	    	<p>Graeme Boy, 2012</p>
	    	<p>Grinnell College</p>
	    </div>

	    <div class="container">
	    	<div class="navbar">
		  <div class="navbar-inner">
		    <ul class="nav">	
		    	<?php
		    		if (isset($_GET['exp'])) {
		    			$exp = $_GET['exp'];
		    		} else {
		    			$exp = 'intro';
		    		}
		    	?>
		    	<li <?php if ($exp == 'intro') { echo 'class="active"'; }?>>	
		    		<a href="<?php echo $_SERVER['PHP_SELF']; ?>?exp=intro">Introduction</a>
		    	</li>
		      	<li <?php if ($exp == 'exp') { echo 'class="active"'; }?>>
		      		<a href="<?php echo $_SERVER['PHP_SELF']; ?>?exp=exp">Experiment</a>
		      	</li>
		      	<li <?php if ($exp == 'back') { echo 'class="active"'; }?>>
		      		<a href="<?php echo $_SERVER['PHP_SELF']; ?>?exp=back">Background and Significance</a>
		      	</li>
		    </ul>
		  </div>
		</div>
	    <?php
	    	if ($_SESSION['logged_in'] == 'yes') { ?>
			    <div class="btn-group pull-right">
				  <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> 
				  <?php echo $_SESSION['user_name']; ?></a>
				  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
				  <ul class="dropdown-menu">
				    <!-- <li><a href="#"><i class="icon-ok"></i> Save Data</a></li> -->
				    <li><a href="view_data.php"><i class="icon-list-alt"></i> View My Data</a></li>
				    <li class="divider"></li>
				    <li><a href="user_logout.php"><i class="i"></i> Log Out</a></li>
				  </ul>
				</div>
			<?php } ?>
		<div class="clearfix"></div>

<?php
if ($exp == 'intro') { ?>

<div class="row">
	<div class="span10 offset1" style="line-height:2em;">
	<p style="text-indent:22px;">There is overwhelming behavioral and physiological evidence that Black men are stereotyped as violent and dangerous (Cottrell & Neuberg, 2005; Maner, Kenrick, Neuberg, Becker, Robertson, Hofer, <em>et al.</em>, 2005). On this basis, Trawalter, Todd, Baird and Richeson (2008) hypothesized that if a Black man's face were flashed alongside a White man's face on a gray homogenous background, a subject would pay attention sooner to the Black man's face than the White man's face. The responses were measured using a dot-probe: After the images flashed, a dot appeared in the place of either one of the images, either on the left, or on the right. Subjects were asked to indicate, as quickly as possible, on which side the dot appeared. If the subject had been attending to one image more than the other, this would be reflected in a decreased response time when the dot appeared after that image. </p>
<p style="text-indent:22px;">In this study, the mean difference between the response times of both conditions in the first block, where the effect was found, was 10.4ms. The average standard deviation between these two conditions was 67ms. This yields a magnitude of effect of 0.16, which suggests a weak phenomenon (Cohen, 1992). This is surprising given the researchers' rationale for the hypothesis, which was that preattentive bias is adaptive for survival, and would occur in the Black male face condition due to the strong associations between black men and violence.</p>
<p style="text-indent:22px;">Attention researchers have argued that salience can be caused by single features, such as motion, color, etc., and is not caused by conjunctions of features (Treisman & Gelade, 1980; Itti, Koch, & Neibur, 1998). Therefore, this exposes an alternative interpretation for the data presented by Trawalter <em>et al.</em> (2008). An interpretation more harmonious with prevailing theories of attention would be that the disjunctive features of one stimulus, such as its color, was salient enough to draw more attention than the other. Since these researchers did not control for disjunctive features in their experiment, we can never know if this was indeed the source of the response differences. In my design, which can be accessed by clicking the "Experiment" tab above, I replicate their design with an added control for color.</p>
	
	<p style="text-align:center;">References</p>
	<ul class="unstyled hanging-indent" style="line-height: 200%;">
		<li>Itti, L., Koch, C. & Niebur, E. (1998). A model of saliency-based visual attention for rapid scene analysis. <em>IEEE Transactions on Pattern Analysis and Machine Intelligence, 20,</em> 1254-1259.</li>
		<li>Cottrell, C. A., & Neuberg, S. L. (2005). Different emotional reactions to different groups: A sociofunctional threat-based approached to "prejudice". <em>Journal of Personality and Social Psychology, 88,</em> 770-789.</li>
		<li>Maner, J. K., Kenrick, D. T., Neuberg, S. L., Becker, D. V., Robertson, T., Hofer, B., et al. (2005). Functional projection: How fundamental social motives can bias interpersonal perception. <em>Journal of Personality and Social Psychology, 88,</em> 63-78.</li>
		<li>Trawalter, S., Todd, A. R., Baird, A. A., & Richeson, J. A. (2008). Attending to threat: Race-based patterns of selective attention. <em>Journal of Experimental Social Psychology, 44,</em> 1322-1327.</li>
		<li>Treisman, A. M., & Gelade, G. (1980). A feature-integration theory of attention. <em>Cognitive Psychology, 12,</em> 97-136.</li>
	</ul>
	</div>
</div>
<style type="text/css">
.hanging-indent {
	padding-left: 22px;
    text-indent: -22px;
}
.hanging-indent li {
	line-height: 2em;
}
</style>

<?php } else if ($exp == 'back') { ?>

<div class="row">
	<div class="span10 offset1" style="line-height:2em;">
	<p style="text-indent:22px;">Attention is directed automatically to locations in the visual field, based on what is salient to the organism, in order to ensure rapid processing of new and important stimuli. In perception, there are many different feature dimensions of the visual field that need to be processed, including color, motion, and size. Itti, Koch & Neibur (1998) argued that salience occurs due to contrast in single dimensions. For example, if the majority of the visual field is gray, but one area is red, the red area will be salient and draw the organism's attention. This color salience will compete with salience in other dimensions, for instance motion, to determine the orientating of attention.</p>
	<p style="text-indent:22px;">Processing the dimensions of visual perception is distributed across different areas of the brain (Zeki, 1976). After processing, these features need to be combined into coherent percepts. Using a series of 9 experiments, Treisman and Gelade (1980) showed that when the organism attends to some location, the visual dimensions at that location are bound to form a percept. Therefore, before a stimulus is attended to, its dimensions (colors, texture, shape, etc.) are "free floating," and can be misattributed to other unattended objects in the surround. This theory opposes the Gestalt psychological view that percepts are decomposed into features <em>a posteriori</em>. Thus, it has implications for studies that assume a Gestalt view of object identification, such as those that assume stimuli can be identified preattentively. Treisman and Gelade (1980) used visual search tasks to demonstrate this phenomenon. Using a 2 x 3 repeated measures design, the researchers found that response times increased with the number of distractors in the search field, but only when targets contained two or more dimensions. This suggests that when search targets contained more than one dimension, subjects needed to attend to each item in the search field until the target was found, which increased search time. This supports the hypothesis that attention is required to bind features in object recognition. Since attention is required to bind conjunctions of features, the view of Treisman and Gelade (1980) implies that whole objects cannot cause salience before the organism attends to it. This supports the Itti, Koch and Neibur's (1998) hypothesis that attention is driven by the salience of single dimensions.</p>
	
	<p style="text-align:center;">References</p>
	<ul class="unstyled hanging-indent" style="line-height: 200%;">
		<li>Itti, L., Koch, C. & Niebur, E. (1998). A model of saliency-based visual attention for rapid scene analysis. <em>IEEE Transactions on Pattern Analysis and Machine Intelligence, 20,</em> 1254-1259.</li>
		<li>Trawalter, S., Todd, A. R., Baird, A. A., & Richeson, J. A. (2008). Attending to threat: Race-based patterns of selective attention. <em>Journal of Experimental Social Psychology, 44,</em> 1322-1327.</li>
		<li>Treisman, A. M., & Gelade, G. (1980). A feature-integration theory of attention. <em>Cognitive Psychology, 12,</em> 97-136.</li>
	</ul>
	</div>
</div>
<style type="text/css">
.hanging-indent {
	padding-left: 22px;
    text-indent: -22px;
}
.hanging-indent li {
	line-height: 2em;
}
</style>

<?php } else if ($exp == 'exp') { ?>

<script type="text/javascript" src="./jquery-timer/jquery.min.js"></script>
<script type="text/javascript" src="./jquery-timer/jquery.timer.js"></script>

<style type="text/css">
	.stimulus {
		display:none;
	}
	#fixation-point {
		position: absolute;
		left: 50%;
		margin-left: -10px;
		top: 50%;
		margin-top: -11px;
	}
</style>

<div class="row container">
	<div class="well" style="position:relative;background-color:#e2e2e2; width: 650px; margin: 0 auto; margin-top:15px;height:200px;">
		<img src="" id="stim-left" class="stimulus pull-left span2" />
		<img src="" id="stim-right" class="stimulus pull-right span2" />
		<img src="./img/fixation.png" id="fixation-point">
	</div>

	<p style="margin-top:15px;text-align:center;">Click the button below, then focus in the center of the area above. Press the left or right arrow key to indicate which side the dot-probe is appearing. Continue clicking for more trials.</p>
	<div style="text-align:center;">
		<button id="start" class="btn btn-success">Click to Start Trial</button>
	</div>
</div>



<div id="results" class="row" style="margin-top:40px;">
	<h2 style="text-align:center;">Results</h2>
	<p style="text-indent:22px;">Raw data and descriptive statistics are recorded below as trials are performed. Incorrect responses will be excluded.</p>
	<div class="span5">
	<h3>Raw Data</h3>
	<table class="table table-bordered table-striped">
		<thead>
			<th></th>
			<th>Experimental - White</th>
			<th>Experimental - Black</th>
			<th>Control - White</th>
			<th>Control - Black</th>
		</thead>
		<tr>
			<td></td>
			<td class="data-result" id="00"></td>
			<td class="data-result" id="01"></td>
			<td class="data-result" id="10"></td>
			<td class="data-result" id="11"></td>
		</tr>
		<tr>
			<th>Number of trials</th>
			<td class="data-result" id="trials-00"></td>
			<td class="data-result" id="trials-01"></td>
			<td class="data-result" id="trials-10"></td>
			<td class="data-result" id="trials-11"></td>
		</tr>
	</table>
	</div>
	<div class="span6 offset1">
	<h3>Descriptives</h3>
	<table class="table">
		<thead>
			<th></th>
			<th>Experimental - White</th>
			<th>Experimental - Black</th>
			<th>Control - White</th>
			<th>Control - Black</th>
		</thead>
		<tr>
			<th>Mean</th>
			<td id="mean-00"></td>
			<td id="mean-01"></td>
			<td id="mean-10"></td>
			<td id="mean-11"></td>
		</tr>
		<tr>
			<th>Standard Deviation</th>
			<td id="sd-00"></td>
			<td id="sd-01"></td>
			<td id="sd-10"></td>
			<td id="sd-11"></td>
		</tr>
	</table>
	</div>
</div>

<script type="text/javascript">
	jQuery(document).ready(function ($) {
		var right_choice = '';
		var num_cond;
		var cell_cond;
		var count;
		timer = $.timer(
				function() {
					count++;
				},
				0,
				false
			);
		
		var condition = new Array(); // 0 for exp. or control; 1 for white or black
		var position = new Array(); // 0 for left postion (white or black); and 1 for right position (white or black)
		
		// Materials
		var faces = new Array();
		faces [0] = './img/white_face.png';
		faces[1] = './img/black_face.png';
		var control = new Array();
		control[0] = './img/white_circle.png';
		control[1] = './img/black_circle.png';
		
		var stimuli = new Array();
		stimuli[0] = faces;
		stimuli[1] = control;
		
		var data_00 = new Array(); // control white
		var data_01 = new Array(); // control black
		var data_10 = new Array(); // experimental white
		var data_11 = new Array(); // experimental black
		
		var cond_left;
		var cond_right;
		
		var sums;
		
		$('#start').click(function () {
			// reset sources of stim1 and stim2
			$('#stim-left').attr('src', '');
			$('#stim-right').attr('src', '');
			
			// find out experimental or control
			num_cond = Math.floor(Math.random() * 2); // random number between 0 and 1;
			if (num_cond == 0) {
				condition[0] = 'experimental';
			} else {
				condition[0] = 'control';
			}
			
			var set = stimuli[num_cond]; // condition 0 or 1 (exp. or control)
			while (cond_left == cond_right) { // don't present both at same time
				var cond_left = Math.floor(Math.random() * 2); // random num, 0 or 1 (white or black)
				var cond_right = Math.floor(Math.random() * 2); // random num, 0 or 1 (white or black)
			}
			
			// Handle left side
			if (cond_left) {
				position[0] = 'black';
			} else {
				position[0] = 'white';
			}
			$('#stim-left').attr('src', set[cond_left]);
			
			// Handle right side
			if (cond_right) {
				position[1] = 'black';
			} else {
				position[1] = 'white';
			}
			$('#stim-right').attr('src', set[cond_right]);
			var timeoutID = window.setTimeout(flashStimuli, '3000');
		});
		function flashStimuli() {
			var timeoutID = window.setTimeout(hideStimuli, '50');
			$('.stimulus').show();
		}
		function hideStimuli() {
			$('.stimulus').hide();
			show_probe();
		}
		function show_probe() {
			var side_dec = Math.floor(Math.random() * 2)
			if (side_dec == 0) {
				$('#stim-left').attr('src', './img/dot_probe.png');
				$('#stim-left').show();
				right_choice = 'left';
				condition[1] = position[0]; // left side
			} else if (side_dec == 1) {
				$('#stim-right').attr('src', './img/dot_probe.png');
				$('#stim-right').show();
				right_choice = 'right';				
				condition[1] = position[1]; // right side
			}
			// start timer
			count = 0;
			timer.play();
		}
		
		$(document).keydown(function(event) {
			var answer = '';
			if (event.which == 37) {
				answer = 'left';
			} else if (event.which == 39) {
				answer = 'right';
			}
			if (right_choice) {
				timer.pause();
				if (answer == right_choice) {
					// good
					if (condition[0] == 'experimental') {
						if (condition[1] == 'white') {
							data_00.push(count);
						} else if (condition[1] == 'black') {
							data_01.push(count);
						}
					} else if (condition[0] == 'control') {
						if (condition[1] == 'white') {
							data_10.push(count);
						} else if (condition[1] == 'black') {
							data_11.push(count);
						}
					}
					
					// clear all existing data from table
					$('.data-result').html('');
					sums = new Array(0,0,0,0);
					// go through each set and add the data to the table
					for (var i = 0; i < data_00.length; i++) {
						$('#00').append(data_00[i] + '<br/>');
						sums[0] += data_00[i];
					}
					for (var i = 0; i < data_01.length; i++) {
						$('#01').append(data_01[i] + '<br/>');
						sums[1] += data_01[i];
					}
					for (var i = 0; i < data_10.length; i++) {
						$('#10').append(data_10[i] + '<br/>');
						sums[2] += data_10[i];
					}
					for (var i = 0; i < data_11.length; i++) {
						$('#11').append(data_11[i] + '<br/>');
						sums[3] += data_11[i];
					}
					// add number of trials
					$('#trials-00').text(data_00.length);
					$('#trials-01').text(data_01.length);
					$('#trials-10').text(data_10.length);
					$('#trials-11').text(data_11.length);
					
					// Calculate and display means
					var mean00 = Math.round(sums[0] / data_00.length * 10) / 10;
					$('#mean-00').text(mean00);
					var mean01 = Math.round(sums[1] / data_01.length * 10) / 10
					$('#mean-01').text(mean01);
					var mean10 = Math.round(sums[2] / data_10.length * 10) / 10;
					$('#mean-10').text(mean10);
					var mean11 = Math.round(sums[3] / data_11.length * 10) / 10;
					$('#mean-11').text(mean11);
					
					// Calculate and display standard deviations
					// I'll do this by going through all data-points in each set,
					// 	subtracting from the mean, squaring and adding.
					var std = new Array(0,0,0,0)
					var from_mean = 0;
					var squared = 0;
					for (var i = 0; i < data_00.length; i++) {
						from_mean = (data_00[i] - mean00);
						squared = from_mean * from_mean;
						std[0] += squared;
					}
					for (var i = 0; i < data_01.length; i++) {
						from_mean = (data_01[i] - mean01);
						squared = from_mean * from_mean;
						std[1] += squared;
					}
					for (var i = 0; i < data_10.length; i++) {
						from_mean = (data_10[i] - mean10);
						squared = from_mean * from_mean;
						std[2] += squared;
					}
					for (var i = 0; i < data_11.length; i++) {
						from_mean = (data_11[i] - mean11);
						squared = from_mean * from_mean;
						std[3] += squared;
					}
					var std00 = Math.round(Math.sqrt(std[0] / data_00.length) * 10) / 10;
					$('#sd-00').text(std00);
					var std01 = Math.round(Math.sqrt(std[1] / data_01.length) * 10) / 10;
					$('#sd-01').text(std01);
					var std10 = Math.round(Math.sqrt(std[2] / data_10.length) * 10) / 10;
					$('#sd-10').text(std10);
					var std11 = Math.round(Math.sqrt(std[3] / data_11.length) * 10) / 10;
					$('#sd-11').text(std11);
					
				} else {
					// bad choice.
				}
				$('#stim-left').attr('src', '');
				$('#stim-right').attr('src', '');
				$('.stimulus').hide();
				right_choice = '';
			}
		});
	});
</script>
<?php
}
?>

<footer style="margin-top:50px;">
	<div class="well" style="text-align: center;">
		Boy, G. A., Grinnell College, 2012.
	</div>
</footer>