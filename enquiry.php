<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$name = $_POST['fname'] . " " . $_POST['lname'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$company = $_POST['company'];
		$comment = $_POST['comment'];

		$to      = 'info@goradia.in';
		$subject = 'GSSL Website Enquiry';
		$message = "
						Name:  $name
						Email: $email
						Phone: $phone
						Company: $company
						Query: $comment
					";
		$headers = 'From: info@goradia.in';
		if(true)//mail($to, $subject, $message, $headers))
		{
			echo "yeet";
		}
		else
		{
			echo "oof";
		}
	}
	else
	{
?>
<?php include_once "inc_head.php"; ?>
<div class = "deet row centtext">
	<b>We would be delighted to receive any queries, suggestions, or feedback from you.</b> Simply fill in this form below and our representative will contact you at the earliest:
</div>
<div class = "row hrline" style = "margin-top: 30px; margin-bottom: 5px; border-bottom: 1px solid #2f58ea"></div>
<div class = "row centtext deet feedback">
</div>
<form class = "deet enq-form"> 
	<div class = "row">
		<div class = "col-sm-6 enq-sect-padding">
			<div class = "enq-title">First Name</div>
			<input type = "text" name = "fname" id = "enfname" class = "enq-input small-input enq-req" required>
			<span class = "input-error" id = ""></span>
		</div>
		<div class = "col-sm-6 enq-sect-padding">
			<div class = "enq-title">Last Name</div>
			<input type = "text" name = "lname" id = "enlname" class = "enq-input small-input enq-req" required>
			<span class = "input-error"></span>
		</div>
	</div>
	<div class = "row">
		<div class = "col-sm-6 enq-sect-padding">
			<div class = "enq-title">Email</div>
			<input type = "email" name = "email" id = "enemail" class = "enq-input small-input enq-req" required>
			<span class = "input-error"></span>
		</div>
		<div class = "col-sm-6 enq-sect-padding">
			<div class = "enq-title">Phone</div>
			<input type = "text" name = "phone" id = "enphone" class = "enq-input small-input enq-req" required>
			<span class = "input-error"></span>
		</div>
	</div>
	<div class = "row">
		<div class = "col-sm-7">
			<div class = "enq-title">Company Name</div>
			<input type = "text" name = "company" id = "encompany" class = "enq-input small-input enq-req" required>
			<span class = "input-error"></span>
		</div>
	</div>
	<div class = "row">
		<div class = "col-sm-12  enq-sect-padding">
			<div class = "enq-title">Comments(Optional)</div>
			<textarea rows = "3" cols = "50" id = "encomment" class = "enq-input"></textarea>
		</div>
	</div>
	<div class = "row enq-submit enq-sect-padding">
		<button type = "submit" id = "enq-submit-btn">Submit</button>
	</div>
</form>
<div class = "row hrline" style = "margin-top: 30px; border-bottom: 1px solid #2f58ea"></div>
<?php include_once "inc_script.php"; ?>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
<script>
	$(".enq-form").validate({
		errorClass: "input-error",
		submitHandler: function(){
  			ajaxSubmit();
		},    
		rules: {
			fname: {
				required: true,
				minlength: 2,
				lettersonly: true
			},
			lname: {
				required: true,
				minlength: 2,
				lettersonly: true
			},
			email: {
				required: true,
				email: true
			},
			phone: {
				required: true,
			},
			company: "required"
		},
		messages: {
			fname: {
				required: "Please enter a valid first name.",
				minlength: "Please enter at least 2 characters",
				lettersonly: "Please enter a valid first name." 
			},
			lname: {
				required: "Please enter a valid last name.",
				minlength: "Please enter at least 2 characters",
				lettersonly: "Please enter a valid last name." 
			},
			email: "Please enter a valid email.",
			phone: "Please enter a valid phone number.",
			company: "Please enter your company's name."
		}
	});
	function ajaxSubmit(){
		$.post
		(
			"enquiry.php",
			{
				fname: $("#enfname").val(),
				lname: $("#enlname").val(),
				email: $("#enemail").val(),
				phone: $("#enphone").val(),
				company: $("#encompany").val(),
				comment: $("#encomment").val()
			},
			function(feedback)
			{
				if(feedback == "yeet")
				{
					$(".enq-form").hide();
					$(".feedback").show();
					$(".feedback").text("Thank you for your interest in Goradia Special Steels Ltd. Your message has been forwarded and our representative will contact you soon.");
				}
				else
				{
					$(".enq-form").hide();
					$(".feedback").show();
					$(".feedback").text("There was an error in submitting your form. Please try again in some time.");
				}
			}
		);
	}
</script>
<?php 
}
?>
