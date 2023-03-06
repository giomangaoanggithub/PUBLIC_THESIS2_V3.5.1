<?php

include 'zerver_entrance.php';

session_start();

error_reporting(0);

$email = $_SESSION["curr_email_user"];
$room = $_SESSION["teacher_curr_room"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM (student_answers INNER JOIN created_questions ON student_answers.question_id = created_questions.question_id) INNER JOIN user_accounts ON student_answers.owner_student = user_accounts.email  WHERE created_questions.owner_teacher = '$email' AND created_questions.classroom_id = '$room' ORDER BY time_of_submission DESC");
    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->FetchAll(PDO::FETCH_ASSOC);

    echo json_encode($result);

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;

?>