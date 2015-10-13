<script type="text/javascript" src="jquemery.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {
    $('div, #FORWARD').click(function() {
        $.get("/FORWARD.php");
    	return false;
    });

    $('div, #LEFT').click(function() {
        $.get("/LEFT.php");
    	return false;
    });

    $('div, #RIGHT').click(function() {
        $.get("/RIGHT.php");
    	return false;
    });

    $('div, #BACKWARD').click(function() {
        $('#BACKWARD').get("/BACKWARD.php");
    	return false;
    });
    $('button').click(function() {
    });
});