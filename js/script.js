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
