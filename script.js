function calculateResults() {
    let coursework = parseFloat(document.getElementById('coursework').value) || 0;
    let exam = parseFloat(document.getElementById('exam').value) || 0;
    let finalMark = coursework + exam;

    // Display final mark in its text box
    document.getElementById('final_mark').value = finalMark.toFixed(2);

    // Compute grade
    let grade = 'F';
    if (finalMark >= 80) {
        grade = 'A';
    } else if (finalMark >= 70) {
        grade = 'B';
    } else if (finalMark >= 60) {
        grade = 'C';
    } else if (finalMark >= 50) {
        grade = 'D';
    }

    // Display grade in its text box
    document.getElementById('grade').value = grade;
}