<?php

$marks = [55, 66, 77, 88, 99]; // Marks input in 5 subjects

function calculateResult($marks) {
    $totalMarks = 0;
    $numSubjects = count($marks);
    $isFail = false;

    // Validate marks range
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Invalid for one or more subjects";
            return;
        }
        //Fail condition
        if ($mark < 33) {
            $isFail = true;
        }
        $totalMarks += $mark;
    }

        if ($isFail) {
        echo "The student has failed!!!";
        return;
    }
    // Calculate total and average marks
    $averageMarks = $totalMarks / $numSubjects;

    // Grade using switch-case
    $grade = '';
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = 'A+';
            break;
        case ($averageMarks >= 70 && $averageMarks <= 79):
            $grade = 'A';
            break;
        case ($averageMarks >= 60 && $averageMarks <= 69):
            $grade = 'A-';
            break;
        case ($averageMarks >= 50 && $averageMarks <= 59):
            $grade = 'B';
            break;
        case ($averageMarks >= 40 && $averageMarks <= 49):
            $grade = 'C';
            break;
        case ($averageMarks >= 33 && $averageMarks <= 39):
            $grade = 'D';
            break;
        default:
            $grade = 'F';
            break;
    }

    // Output
    echo "Total Marks: $totalMarks";
    echo "Average Marks: " . number_format($averageMarks, 2) ;
    echo "Grade: $grade";
}

// Calculate the result
calculateResult($marks);

?>
