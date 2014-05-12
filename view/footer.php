</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="view/js/bootstrap.min.js"></script>
<script src="view/js/search_ajax.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="view/js/datepicker.js"></script>
<script>
$('#calendar').datepicker({
    inline: true,
    firstDay: 1,
    showOtherMonths: true,
    dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
});
</script>
<script>
    $( "#click" ).click(function() {
      $( "#hide" ).toggle();
    });
</script>

<script>
    $( "#datetimepicker" ).click(function() {
      $( "#calendrier" ).toggle();
    });

Date.prototype.getWeek = function() {
        var onejan = new Date(this.getFullYear(), 0, 1);
        return Math.ceil((((this - onejan) / 86400000) + onejan.getDay() + 1) / 7);
    }


$(document).on("change", "#calendar", function () {
     console.log($(this).val());
     console.log($(this).datepicker("getDate"));
     location.href = '?d=semaine&week=' + $(this).datepicker("getDate").getWeek();


})



var currentDate = $( "#calendar" ).datepicker( "getDate" );
</script>


</body>
</html>
