$(document).ready(function () {
	$('#size-div').hide();
	$('#weight-div').hide();
	$('#dimension-div').hide();

	/**
	 * Show fields as per type type switch selected
	 */
	$('#type_switch').change(function() {
		if ($('#type_switch').val() === 'size') {
			$('#size-div').show();
			$('#weight-div').hide();
			$('#dimension-div').hide();
		} else if ($('#type_switch').val() === 'weight') {
			$('#weight-div').show();
			$('#size-div').hide();
			$('#dimension-div').hide();
		} else if ($('#type_switch').val() === 'dimension') {
			$('#dimension-div').show();
			$('#weight-div').hide();
			$('#size-div').hide();
		} else {
			$('#size-div').hide();
			$('#weight-div').hide();
			$('#dimension-div').hide();
		}
	});

	$('#btn-save').click(function() {
		var type_switch = $('#type_switch').val();
		
		//check if primary fields empty
		if ($('#sku').val().trim().length <= 0 || $('#name').val().trim().length <= 0 || $('#price').val().trim().length <= 0) {
			alert('fill all text fields');
			return false;
		}

		//check if switch type selected
		if (!type_switch) {
			alert('Please select type switcher.');
			return false;
		}

		//check if switch type input fields empty
		if (type_switch === 'size') {
			if ($('#size').val().trim().length <= 0) {
				alert('Please enter size.');
				return false;
			}
		} else if (type_switch === 'weight') {
			if ($('#weight').val().trim().length <= 0) {
				alert('Please enter weight.');
				return false;
			}
		} else if (type_switch === 'dimension') {
			if ($('#height').val().trim().length <= 0 || $('#width').val().trim().length <= 0 || $('#length').val().trim().length <= 0) {
				alert('Please enter Height/Width/Length.');
				return false;
			}
		}

		//submit form
		$('#form-add').submit();
	});

	/**
	 * Mass delete action
	 */
	$('#btn-apply').click(function() {
		//check if mass delete action selected in dropdown
		if (!$('#action').val()) {
			alert('Please select action first.');
			return false;
		}

		//check if any check box checked
		if ($('#form-list input[type=checkbox]:checked').length <= 0) {
			alert('Please select atleast one checkbox.');
			return false;
		}
		
		//submit form
		$('#form-list').submit();
	});
});