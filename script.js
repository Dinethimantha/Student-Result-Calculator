
const form = document.getElementById("student_result_form");

form.addEventListener("submit", function(event) {

    event.preventDefault();

    const name = document.getElementById("student_name").value.trim();

    const mathsInput = document.getElementById("maths");
    const scienceInput = document.getElementById("science");
    const englishInput = document.getElementById("english");

    const maths = Number(mathsInput.value);
    const science = Number(scienceInput.value);
    const english = Number(englishInput.value);

    // Validate student name
    if (name === "") {
        Swal.fire({
            icon: "warning",
            title: "Student Name Required!",
            text: "Please enter the student name."
        });

        return;
    }

    // Validate marks
    const markInputs = [mathsInput, scienceInput, englishInput];

    for (const input of markInputs) {

        if (
            input.value.trim() === "" ||
            Number(input.value) < 0 ||
            Number(input.value) > 100
        ) {
            Swal.fire({
                icon: "error",
                title: "Invalid Marks!",
                text: "Please enter marks between 0 and 100."
            });

            input.focus();
            return;
        }
    }

    // Confirmation popup
    Swal.fire({
        title: "Calculate Result?",
        text: "Do you want to calculate the student result?",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: "#4f46e5",
        cancelButtonColor: "#6b7280",
        confirmButtonText: "Yes, Calculate!",
        cancelButtonText: "Cancel"
    }).then((answer) => {

        if (answer.isConfirmed) {

            // Calculate total and average
            const total = maths + science + english;
            const average = total / 3;

            // Calculate grade
            let grade;

            if (average >= 75) {
                grade = "A";
            } else if (average >= 65) {
                grade = "B";
            } else if (average >= 50) {
                grade = "C";
            } else if (average >= 35) {
                grade = "S";
            } else {
                grade = "F";
            }

            // Calculate pass or fail
            let result;

            if (maths >= 35 && science >= 35 && english >= 35) {
                result = "Pass";
            } else {
                result = "Fail";
                grade = "F";
            }

            // Display result
            document.getElementById("displayName").textContent = name;
            document.getElementById("total").textContent = total + " / 300";
            document.getElementById("average").textContent = average.toFixed(2);
            document.getElementById("grade").textContent = grade;
            document.getElementById("result").textContent = result;

            document.getElementById("resultBox").style.display = "block";

            // Success popup
            Swal.fire({
                icon: result === "Pass" ? "success" : "error",
                title: result === "Pass" ? "Congratulations!" : "Result Calculated",
                text: "Grade: " + grade + " | Result: " + result,
                confirmButtonColor: "#4f46e5"
            });
        }
    });
});
