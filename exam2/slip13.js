$(document).ready(function() {
$('#name').on('input', function() {
var name = $(this).val();
$.ajax({
url: 'slip13.php',
type: 'POST',
data: { name: name },
success: function(response) {
$('#response').html(response);
}
});
});
});
