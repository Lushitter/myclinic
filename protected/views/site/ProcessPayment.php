<h1>Process Payment</h1>
<form method="post">
    <label>Patient ID:</label>
    <input type="text" name="Payment[patient_id]" value="<?php echo $patientId; ?>" readonly>
    <label>Amount:</label>
    <input type="text" name="Payment[amount]" required>
    <input type="submit" value="Pay">
</form>