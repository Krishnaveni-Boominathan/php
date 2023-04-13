<form id="appointment-form">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required><br><br>
    <label for="time">Time:</label>
    <input type="time" id="time" name="time" required><br><br>
    <label for="reason">Reason:</label>
    <textarea id="reason" name="reason" required></textarea><br><br>
    <input type="submit" value="Schedule Appointment">

</form>
<p><a href="dashboard_patient.php">Return to home page</a></p>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
$(document).ready(function() {
    $('#appointment-form').on('submit', function(event) {
        event.preventDefault(); 

        var formData = $(this).serialize(); 

        $.ajax({
            type: 'POST',
            url: 'schedule_appointment.php',
            data: formData,
            success: function(response) {
                if (response == 'You are registered successfully') {
                    alert('Appointment scheduled successfully.');
                } else {
                    alert('Appointment scheduling failed. Please try again later.');
                }
            }
        });
    });
});
</script>
