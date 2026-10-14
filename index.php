<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Results Entry Form</title>
    <!-- Link to the separate CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Results Entry Form</h2>
    
    <!-- Form can point to a PHP script (e.g., process.php) to save data -->

    <form method="POST" action="insert.php">
        <div class="form-group">
            <label for="student_name">Student Name:</label>
            <input type="text" id="student_name" name="student_name" placeholder="" required>
        </div>
        
        <div class="form-group">
            <label for="course_code">Course Code:</label>
            <input type="text" id="course_code" name="course_code" placeholder="e.g., BIT2101" required>
        </div>
        
        <div class="form-group">
            <label for="class_name">Class / Programme:</label>
            <select id="class_name" name="class_name" required>
                <option value="">-- Select Class --</option>
                <option value="BIT Year 1">Bachelor of Information Technology (Year 1)</option>
                <option value="BIT Year 2">Bachelor of Information Technology (Year 2)</option>
                <option value="BIT Year 3">Bachelor of Information Technology (Year 3)</option>
                <option value="BCS Year 1">Bachelor of Computer Science (Year 1)</option>
                <option value="BCS Year 2">Bachelor of Computer Science (Year 2)</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="semester">Semester:</label>
            <select id="semester" name="semester" required>
                <option value="">-- Select Semester --</option>
                <option value="Semester I">Semester I</option>
                <option value="Semester II">Semester II</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="coursework">Coursework Mark:</label>
            <input type="number" step="0.01" id="coursework" name="coursework" min="0" max="100" required oninput="calculateResults()">
        </div>
        
        <div class="form-group">
            <label for="exam">Exam Mark:</label>
            <input type="number" step="0.01" id="exam" name="exam" min="0" max="100" required oninput="calculateResults()">
        </div>
        
        <div class="form-group">
            <label for="final_mark">Final Mark (Auto-calculated):</label>
            <input type="text" id="final_mark" name="final_mark" class="calculated" readonly required>
        </div>
        
        <div class="form-group">
            <label for="grade">Grade (Auto-calculated):</label>
            <input type="text" id="grade" name="grade" class="calculated" readonly required>
        </div>
        
        <button type="submit" name="submit">Save to Database</button>
    </form>
</div>

<!-- Link to the separate JavaScript file -->
<script src="script.js"></script>
</body>
</html>