<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Essay Speed Checker</title>
    <link rel="stylesheet" href="styles/style-page_teacher.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div id="main-content" class="main-content row">
        <div class="room-section-title col-12">
            <h1 id="curr_class_section">PLEASE PICK OR CREATE A ROOM*</h1>
        </div>
        <div id="check-area" class="col-10">

        </div>
        <div class="right-content col-2 row">
            <div class="col-12">
                <img src="images/logo-placement.jpg" alt="" class="logo img-fluid">
            </div>
            <div class="right-buttons col-12">
                <button id="create-questions">CREATE QUESTION</button>
                <button id="classroom-students">STUDENTS</button>
                <button id="create-room-btn">CREATE ROOM</button>
                <button id="change-room-btn">CHANGE ROOM</button>
                <button id="account_settings">ACCOUNT SETTINGS</button>
                <button id="logout-btn">LOGOUT</button>
                <button id="simulate">SIMULATE</button>
            </div>
        </div>
        <div class="col-12">
            <h2>STUDENT GRADES</h2>
            <table style="width: 100%;" id="student_grades">
                <thead>
                    <tr>
                        <th style="width: 5%">
                            ☻
                        </th>
                        <th style="width: 10%">
                            NAME OF STUDENT
                        </th>
                        <th style="width: 35%">
                            ANSWER
                        </th>
                        <th style="width: 3%;">
                            MARK
                        </th>
                        <th style="width: 5%">
                            ✔ BY
                        </th>
                        <th style="width: 30%;">
                            QUESTION
                        </th>
                    </tr>
                </thead>
                <tbody id="tbody_student_answers">
                    <tr>
                        <td>pic*</td>
                        <td>John Doe</td>
                        <td>yada yada</td>
                        <td>65.5</td>
                        <td>MANUAL</td>
                        <td>yada yada</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>
<script src="js/script_page_teacher.js"></script>

</html>