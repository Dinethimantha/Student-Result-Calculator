
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Result Calculator</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"
          rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #95afd0ff, #91a2dbff);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            padding: 25px 0;
        }

        .form-box {
            background: white;
            padding: 35px;
            border-radius: 18px;
            width: 100%;
            max-width: 480px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        .form-box h2 {
            text-align: center;
            color: #3730a3;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .subtitle {
            text-align: center;
            color: #6b7280;
            margin-bottom: 25px;
        }

        .form-label {
            font-weight: 600;
            color: #374151;
        }

        .form-control {
            padding: 11px;
            border-radius: 8px;
        }

        .btn-calculate {
            background: #4f46e5;
            color: white;
            padding: 12px;
            border-radius: 8px;
            font-weight: bold;
            border: none;
            width: 100%;
            margin-top: 12px;
        }

        .btn-calculate:hover {
            background: #3730a3;
            color: white;
        }

        .result-box {
            margin-top: 25px;
            padding: 20px;
            background: #93c5d3ff;
            border-radius: 10px;
            border-left: 5px solid #4f46e5;
        }

        .result-box h5 {
            color: #3730a3;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .result-box p {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <div class="form-box">

        <h2>Student Result</h2>

        <p class="subtitle">
            Enter student details and marks
        </p>

        <!-- Student Form -->
        <form action="" method="POST" id="student_result_form">

            <!-- Student Name -->
            <div class="mb-3">

                <label for="student_name" class="form-label">
                    Student Name
                </label>

                <input type="text"
                       class="form-control"
                       id="student_name"
                       name="student_name"
                       placeholder="Enter student name"
                       required>

            </div>

            <!-- Maths Marks -->
            <div class="mb-3">

                <label for="maths" class="form-label">
                    Maths Marks
                </label>

                <input type="number"
                       class="form-control mark"
                       id="maths"
                       name="maths"
                       placeholder="Enter Maths marks"
                       min="0"
                       max="100"
                       required>

            </div>

            <!-- Science Marks -->
            <div class="mb-3">

                <label for="science" class="form-label">
                    Science Marks
                </label>

                <input type="number"
                       class="form-control mark"
                       id="science"
                       name="science"
                       placeholder="Enter Science marks"
                       min="0"
                       max="100"
                       required>

            </div>

            <!-- English Marks -->
            <div class="mb-3">

                <label for="english" class="form-label">
                    English Marks
                </label>

                <input type="number"
                       class="form-control mark"
                       id="english"
                       name="english"
                       placeholder="Enter English marks"
                       min="0"
                       max="100"
                       required>

            </div>

            <!-- Result Display Area -->
            <div class="result-box"
                 id="resultBox"
                 style="display: none;">

                <h5>Student Result</h5>

                <p>
                    <strong>Student Name:</strong>
                    <span id="displayName"></span>
                </p>

                <p>
                    <strong>Total Marks:</strong>
                    <span id="total"></span>
                </p>

                <p>
                    <strong>Average:</strong>
                    <span id="average"></span>
                </p>

                <p>
                    <strong>Grade:</strong>
                    <span id="grade"></span>
                </p>

                <p>
                    <strong>Result:</strong>
                    <span id="result"></span>
                </p>

            </div>

            <!-- Calculate Result Button -->
            <button type="submit"
                    name="calculate"
                    class="btn-calculate">

                Calculate Result

            </button>

        </form>

    </div>

    <!-- SweetAlert2 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- External JavaScript File -->
    <script src="script.js"></script>

</body>

</html>
