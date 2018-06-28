<?php 
    include_once 'template.php';
    showheader();
?>
<main>
    <!--CARDS FOR MENU -->
    <div class="clearfix">
        <div class="h-100 row align-items">
            <div class="card float-left m-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Search Student</h5>
                    <button type="button" class="btn btn-link" id="search" onclick="showdiv('searchForm')">Search</button>
                </div>
            </div>
            <div class="card float-left m-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Return Book</h5>
                    <button type="button" class="btn btn-link" id="return" onclick="showdiv('returnForm')">Return</button>
                </div>
            </div>

            <div class="card float-left m-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Borrow Book</h5>
                    <button type="button" class="btn btn-link" id="borrow" onclick="showdiv('borrowForm')">Borrow</button>
                </div>
            </div>
        </div>
        ```
        <!--FORMS FOR SEARCH BORROW OR RETURN: HIDE BY DEFAULT, TOOGLE BY JAVASCRIPT -->
        <div id="searchForm" class="col" style="margin-left:30%;display:none;">```
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <h5 class="card-title text-center"> SEARCH STUDENT </h5>
                    <form id="searchFormData" action="search.php">
                        <div class="form-group">
                            <label for="studentClass">Student's Class: </label>
                            <input type="text" class="form-control" id="searchStudentClass" name="studentClass" placeholder="Class">
                        </div>
                        <div class="form-group">
                            <label for="studentRollNo">Student's Roll Number: </label>
                            <input type="text" class="form-control" id="searchStudentRollNo" name="studentRollNo" placeholder="Roll No">
                        </div>
                        <button id="searchSubmit" type="button" class="btn btn-primary" name="search" onclick="searchStudent()"> Search </button>
                    </form>
                </div>
            </div>
        </div>
        
        <div id="returnForm" class="col" style="margin-left:30%;display:none;">
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <h5 class="card-title text-center"> RETURN BOOK </h5>
                    <form id="returnFormData" action="return.php">
                        <div class="form-group">
                            <label for="studentClass">Student's Class: </label>
                            <input type="text" class="form-control" id="returnStudentClass" name="studentClass" placeholder="Class">
                        </div>
                        <div class="form-group">
                            <label for="studentRollNo">Student's Roll Number: </label>
                            <input type="text" class="form-control" id="returnStudentRollNo" name="studentRollNo" placeholder="Roll No">
                        </div>
                        <div class="form-group">
                            <label for="studentBook">Book Name: </label>
                            <input type="text" class="form-control" id="returnStudentBook" name="bookName" placeholder="Book Name">
                        </div>
                        <button id ="returnSubmit" type="button" class="btn btn-primary" name="return" onclick="returnBook()"> Return </button>
                    </form>
                </div>
            </div>
        </div>


        <div id="borrowForm" class="col" style="margin-left:30%;display:none;">
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <h5 class="card-title text-center"> BORROW BOOK </h5>
                    <form id="borrowFormData" action="borrow.php">
                      <div class="form-group">
                            <label for="studentClass">Student's Class: </label>
                            <input type="text" class="form-control" id="borrowStudentClass" name="studentClass" placeholder="Class">
                        </div>
                        <div class="form-group">
                            <label for="studentRollNo">Student's Roll Number: </label>
                            <input type="text" class="form-control" id="borrowStudentRollNo" name="studentRollNo" placeholder="Roll No">
                        </div>
                        <div class="form-group">
                            <label for="studentRollNo">Book Name:</label>
                            <input type="text" class="form-control" id="borrowBorrow" name="bookName" placeholder="Book Name">
                        </div>
                        <button type="button" class="btn btn-primary" name="borrow" id="borrowSubmit" onclick="borrowBook()"> Borrow </button>
                    </form>
                </div>
            </div>
        </div>

</main>

<section>
            
    <div id="result" class="card text-center bg-light">

    </div>

</section>