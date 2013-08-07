</div>

<script type="text/javascript" src="http://codeorigin.jquery.com/jquery-1.9.1.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/respond.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('input, textarea').placeholder();
	
	$.validator.addMethod("valueNotEquals", function(value, element, arg){
  		return arg != value;
	 }, "Please select state.");
	 
	$('#register_form').validate({
		rules:{
			first_name:{
				required: true,
				valueNotEquals: 'First Name'
			},
			last_name:{
				required: true,
				valueNotEquals: 'Last Name'
			},
			email:{
				required: true,
				email: true,
				valueNotEquals: 'Email'
			},
			phone:{
				required:true,
				digits:true,
				valueNotEquals: 'Phone Number'
			},
			state:{
				valueNotEquals: 0
			}
		}
	});
	
	$('#register_form').submit(function(e){
		if( !$('#register_form').valid())
		{
			e.preventDefault();
		}
	});
});

/*-----------------google analytics-----------------------*/
 var _gaq = _gaq || [];

  _gaq.push(['_setAccount', 'UA-40343394-1']);

  _gaq.push(['_trackPageview']);

 

  (function() {

    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

  })();
</script>

</body>
</html>