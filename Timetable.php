<?php
// Connect to your database (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attg";

$conn = mysql_connect($servername, $username, $password);
mysql_select_db($dbname, $conn);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_error());
}

// Function to generate and display timetable
function generateTimetable() {
    global $conn;
    
    
    $daysQuery = mysql_query("SELECT * FROM days", $conn);
$timeslotsQuery = mysql_query("SELECT * FROM timeslots", $conn);
$subjectsQuery = mysql_query("SELECT * FROM subject", $conn);

if (!$daysQuery || !$timeslotsQuery || !$subjectsQuery) {
    die("Query failed: " . mysql_error());
}

$days = mysql_fetch_all($daysQuery);
$timeslots = mysql_fetch_all($timeslotsQuery);
$subjects = mysql_fetch_all($subjectsQuery);

// Fetch timetable data
$timetableQuery = mysql_query("SELECT * FROM timetable", $conn);

if (!$timetableQuery) {
    die("Query failed: " . mysql_error());
}

$timetable = mysql_fetch_all($timetableQuery);

// Debugging output
//echo "Days: ";
//print_r($days);

//echo "Timeslots: ";
//print_r($timeslots);

//echo "Subjects: ";
//print_r($subjects);

//echo "Timetable: ";
//print_r($timetable);
    

    // Fetch days, timeslots, and subjects from the database
    //$daysQuery = mysql_query("SELECT * FROM days", $conn);
    //$timeslotsQuery = mysql_query("SELECT * FROM timeslots", $conn);
    //$subjectsQuery = mysql_query("SELECT * FROM subject", $conn);

    //if (!$daysQuery || !$timeslotsQuery || !$subjectsQuery) {
       // die("Query failed: " . mysql_error());
    //}

    //$days = mysql_fetch_all($daysQuery);
    //$timeslots = mysql_fetch_all($timeslotsQuery);
    //$subjects = mysql_fetch_all($subjectsQuery);

    // Fetch timetable data
   // $timetableQuery = mysql_query("SELECT * FROM timetable", $conn);

    //if (!$timetableQuery) {
       // die("Query failed: " . mysql_error());
    //}

    //$timetable = mysql_fetch_all($timetableQuery);-->

    // Display the timetable
    echo '<table border="1">';
    echo '<tr><th>Time/Day</th>';

    foreach ($days as $day) {
        echo '<th>' . $day['name'] . '</th>';
    }

    echo '</tr>';

    foreach ($timeslots as $timeslot) {
        echo '<tr>';
        echo '<td>' . $timeslot['start_time'] . ' - ' . $timeslot['end_time'] . '</td>';

        foreach ($days as $day) {
            $subject = getSubjectForTimeslotAndDay($timetable, $timeslot['id'], $day['id']);
            echo '<td>' . ($subject ? $subjects[$subject['subject_id']]['sname'] : '') . '</td>';
        }
        echo '</tr>';
    }

    echo '</table>';
}

// Function to get the subject for a specific timeslot and day
function getSubjectForTimeslotAndDay($timetable, $timeslotId, $dayId) {
    foreach ($timetable as $entry) {
        if ($entry['timeslot_id'] == $timeslotId && $entry['day_id'] == $dayId) {
            return $entry;
        }
    }

    return null;
}

// Call the function to generate and display the timetable
generateTimetable();

// Close the database connection
mysql_close($conn);

// Function to fetch all rows from a MySQL result set
function mysql_fetch_all($result) {
    $rows = array();
    while ($row = mysql_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
?>
