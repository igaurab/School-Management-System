<?php 
    include_once 'template.php';
    showheader();
?>
<main>

<div id="searchForm" class="col" style="margin-left:30%;">
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <h5 class="card-title text-center"> SEARCH STUDENT </h5>
                    <form id="searchFormData" action="search.php" method="POST">
                        <div class="form-group">
                            <label for="studentClass">Student's Class: </label>
                            <input type="text" class="form-control" id="searchStudentClass" name="studentClass" placeholder="Class">
                        </div>
                        <div class="form-group">
                            <label for="studentRollNo">Student's Roll Number: </label>
                            <input type="text" class="form-control" id="searchStudentRollNo" name="studentRollNo" placeholder="Roll No">
                        </div>
                        <button id="searchSubmit" type="submit" class="btn btn-primary" name="search" onclick="searchStudent()"> Search </button>
                    </form>
                </div>
            </div>
    </div>
</main>


