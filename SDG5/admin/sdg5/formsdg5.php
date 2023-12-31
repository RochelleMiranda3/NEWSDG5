<?php include('../../includes/header.php');
include '../../includes/db.php';?>


<?php if (isset($_GET['message'])) { ?>
    <div class="message-container bg-success bg-gradient p-4">
        <a class="text-dark float-end text-uppercase text-decoration-none fs-3" href="#" id="closeBtn">&times;</a>
        <p class="text-center text-light p-2">
            <?php echo $_GET['message']; ?>
        </p>
    </div>
<?php } ?>
<div class="container mt-5 mb-5">
    <div class="row-mt-5">
        <div class="dropdown">
            <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Pick a research
            </button>
            <ul class="dropdown-menu bg-white border-0 " aria-labelledby="dropdownMenuButton1">
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res511"> Research on gender equality</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res521"> Proportions of
                        First-Generation
                        Female Students</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res531"> Policy for
                        access
                        measures for students</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res532"> Tracking
                        access
                        measures for employees</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res533"> Policy for women applications and entry</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res534"> Women's access schemes (Internal/External)</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res535"> Women's
                        application
                        in underrepresented subjects</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res541"> Proportion of senior female academics</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res551"> Proportion of female graduates</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res552"> Proportion of applicants
                        for graduation
                        to total number of graduates</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res553"> Number of graduates by broad
                        broad
                        subject areas</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res554"> Proportion of females graduates by broad subject areas</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res561"> Policy of non-discrimination against women</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res562"> Non-discrimination policies for transgender</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res563"> Maternity and paternity policies</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res564"> Leave priveleges of employees</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res565"> Solo parent</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res566"> Childcare facilities for students</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res567"> Childcare facilities for staff and faculty</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res568"> Women's mentoring schemes</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res569"> Policies protecting those reporting discrimination</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res5610"> Reports against discrimination</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res571"> GAD Focal Point System</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res572"> Committee on Decorum and Investigation CODI</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res573"> Reports against sexual harrasment</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res574"> VAW desk amd officer</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res575"> Reports on VAWC cases</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res5761"> Students</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res5762"> Employees</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res581"> GAD Plan and Budget</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res582"> GAD Accomplishment Report</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res591"> Capacity Development Sessions</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res592"> GAD Observances</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res593"> GAD IEC Materials</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res594"> Library Resources</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res5101"> Courses integrated with gender perspective</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res5111"> Extension PPAs integradted with gender perspective</button></li>

            </ul>
        </div>
        <div class=" bg-white border border-3 border-dark mt-5 w-100">
            <h2 class="text-center pt-3 mb-3">Add Research</h2>
            <div class="container" style=" height:auto;">
                <div class="d-flex w-100 h-auto">

                    <!--This div is for research 5.1.1-->
                    <div class="collapse w-100 h-auto" id="research511" style="display: block;">
                        <h2 class="text-center pb-5"> Research on gender equality</h2>
                        <form action="../../admin/sdg5/insert/insert511.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of research on gender equality" name="total_no_published_research">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the Research" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Author" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Year of Publication" name="year_pub">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="text" class="form-control" placeholder="Total Number of clinical citations" name="no_clinical">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.2.1-->
                    <div class=" w-100 h-auto" id="research521" style="display: none;">
                        <h2 class="text-center pb-4"> Proportions of First-Generation Female Students</h2>
                        <form action="../../admin/sdg5/insert/insert521.php" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students starting a degree" name="no_starting_deg">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_first_start_deg">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.3.1-->
                    <div class=" w-100 h-auto" id="research531" style="display: none;">
                        <h2 class="text-center pb-4">Tracking access measures for students</h2>
                        <form action="../../admin/sdg5/insert/insert531.php" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of college applicants" name="no_college_applicants">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of admitted college applicants" name="no_admitted">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of enrollees" name="no_enrollees">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.3.2-->
                    <div class=" w-100 h-auto" id="research532" style="display: none;">
                        <h2 class="text-center pb-4">Tracking access measures for employees</h2>
                        <form action="../../admin/sdg5/insert/insert532.php" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of job applicants" name="no_job_applicants">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of newly-hired employees by the campus" name="no_newly_hired">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.3.3-->
                    <div class=" w-100 h-auto" id="research533" style="display: none;">
                        <h2 class="text-center pb-4">Policy for women applications and entry</h2>
                        <form action="../../admin/sdg5/insert/insert533.php" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of women applications and entry policy" name="no_women_applicants">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of PPAs implemented in accordance to the policy" name="no_ppa">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.3.4-->
                    <div class=" w-100 h-auto" id="research534" style="display: none;">
                        <h2 class="text-center pb-4">Women's access schemes (Internal/External)</h2>
                        <form action="../../admin/sdg5/insert/insert534.php" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of other PPAs exclusively for women" name="no_ppa_women">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Number of Internal PPAs" name="no_internal_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Number of External PPAs" name="no_external_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="title_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA" name="description_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="total_cost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source" name="fund_source">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.3.5-->
                    <div class=" w-100 h-auto" id="research535" style="display: none;">
                        <h2 class="text-center pb-4">Women's application in underrepresented subjects</h2>
                        <form action="../../admin/sdg5/insert/insert535.php" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of PPAs t encourage women's application in underrepresented subjects" name="no_encourage_woman">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="title_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA" name="description_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="total_cost1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source" name="fund_source1">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.4.1-->
                    <div class=" w-100 h-auto" id="research541" style="display: none;">
                        <h2 class="text-center pb-4">Proportion of senior female academics</h2>
                        <form action="../../admin/sdg5/insert/insert541.php" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees" name="no_employees">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of academic/teaching staff" name="academic_teaching_staff">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of senior academic staff" name="senior_staff">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.5.1-->
                    <div class=" w-100 h-auto" id="research551" style="display: none;">
                        <h2 class="text-center pb-4">Proportion of female graduates</h2>
                        <form action="../../admin/sdg5/insert/insert551.php" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of graduates" name="total_graduates">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.5.2-->
                    <div class=" w-100 h-auto" id="research552" style="display: none;">
                        <h2 class="text-center pb-4">Proportion of applicants for graduation to total number of graduates</h2>
                        <form action="../../admin/sdg5/insert/insert552.php" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of applicants for graduation" name="applicants_for_graduation">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.5.3-->
                    <div class=" w-100 h-auto" id="research553" style="display: none;">
                        <h2 class="text-center pb-4">Number of graduates by broad subject areas</h2>
                        <form action="../../admin/sdg5/insert/insert553.php" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of graduates in STEM" name="total_no_STEM">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of graduates in Medicine" name="no_graduate_medicine">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of graduates in Arts and Humanities/Social Sciences" name="no_art_humanities">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.6.1-->
                    <div class=" w-100 h-auto" id="research561" style="display: none;">
                        <h2 class="text-center pb-4">Policy of non-discrimination against women</h2>
                        <form action="../../admin/sdg5/insert/insert561.php" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of non-discrimination against women policy" name="no_non_discrimination">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of PPAs implemented in aacordance to the policy" name="no_ppa_implemented">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="title_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA" name="description_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="total_cost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Fund source" name="fund_source">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.6.2-->
                    <div class=" w-100 h-auto" id="research562" style="display: none;">
                        <h2 class="text-center pb-4">Non-discrimination policies for transgender</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of non-discrimination for transgender policy" name="no_non_discrimation_trans">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of PPAs implemented in accordance to the policy" name="no_ppa_implemented">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="title_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA" name="description_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total Cost" name="total_cost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Fund Source" name="fund_source">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.6.3-->
                    <div class=" w-100 h-auto" id="research563" style="display: none;">
                        <h2 class="text-center pb-4">Maternity and paternity policies</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of maternity and paternity policy" name="no_maternity_paternity">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of PPAs implemented in accordance to the policy" name="no_ppa_implemented">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="title_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA" name="description_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="text" class="form-control" placeholder="Total Cost" name="total_cost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source" name="fund_source">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.6.4-->
                    <div class=" w-100 h-auto" id="research564" style="display: none;">
                        <h2 class="text-center pb-4">Leave priveleges of employees</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of paternity leave availed in the campus" name="no_paternity">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total equivalent amount of maternity leave availed" name="no_equi_paternity">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of maternity leave availed in the campus" name="no_maternity_leave">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total equivalent amount of maternity leave availed" name="no_equi_maternity">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of solo parent leave availde in the campus" name="no_solo_parents">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total equivalent amount of solo parent leave availed" name="no_equi_solo_parents">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of 10-day VAWC leave availed in the campus" name="total_num_VAWC">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total equivalent amount of 10-day VAWC leave availed" name="total_equi_VAWC">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of special leave benefits for women availed in the campus" name="no_special">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total equivalent amount of special leave benefits for women availed" name="equi_special">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.6.5-->
                    <div class=" w-100 h-auto" id="research565" style="display: none;">
                        <h2 class="text-center pb-4">Solo parent</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of solo parent employees" name="no_solo_employees">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of solo parent employees with solo parent" name="no_solo_solo">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of solo parent students" name="no_solo_students">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of solo parent students with solo parent" name="no_solostudents_solo">
                            </div>
                            <p class="text-center lead">List of collaborations with health institutions</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees who are children of solo parent" name="no_employees_children_soloparent">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees who are children of solo parent" name="total_num_student_soloparents">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.6.6-->
                    <div class=" w-100 h-auto" id="research566" style="display: none;">
                        <h2 class="text-center pb-4">Childcare facilities for students</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students who use the childcare facility (monthly)" name="no_use_childfacility">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.6.7-->
                    <div class=" w-100 h-auto" id="research567" style="display: none;">
                        <h2 class="text-center pb-4">Childcare facilities for staff and faculty</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of staff and faculty who use the childcare facility (monthly)" name="no_staff_faculty">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.6.8-->
                    <div class=" w-100 h-auto" id="research568" style="display: none;">
                        <h2 class="text-center pb-4">Women's mentoring schemes</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of mentoring schemes for female students" name="no_mentoring_femalestudents">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="title_ppa1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA" name="description_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="total_cost1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source" name="fund_source1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of mentoring schemes for female employees" name="no_mentoring_female_employees">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="title_ppa2">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA" name="short_description">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="total_cost1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source" name="fund_source2">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of female employees who participate in the mentoring schemes" name="total_female_employees">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.6.9-->
                    <div class=" w-100 h-auto" id="research569" style="display: none;">
                        <h2 class="text-center pb-4">Policies protecting those reporting discrimination</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of policy protecting reporting discrimination" name="no_policy_protecting">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of PPAs implemented in accordance to the policy" name="no_ppa_implemented">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="title_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA" name="description_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="text" class="form-control" placeholder="Total Cost" name="total_cost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund Source" name="fund_source">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.6.10-->
                    <div class=" w-100 h-auto" id="research5610" style="display: none;">
                        <h2 class="text-center pb-4">Reports against discrimination</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of filed reports against discrimination" name="no_reports_discrimination">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of resolved discrimination cases" name="no_resolved_discrimination">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.7.1-->
                    <div class=" w-100 h-auto" id="research571" style="display: none;">
                        <h2 class="text-center pb-4">GAD Focal Point System</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Level of Functionality based on the FAT" name="level_functionality">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Upload Memo of composition" name="upload_memo">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.7.2-->
                    <div class=" w-100 h-auto" id="research572" style="display: none;">
                        <h2 class="text-center pb-4">Committee on Decorum and Investigation CODI</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of activities conducted in the campus by CODI" name="no_conducted_CODI">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="title_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description" name="short_description">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="total_cost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="text" class="form-control" placeholder="Fund Source" name="fund_source">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.7.3-->
                    <div class=" w-100 h-auto" id="research573" style="display: none;">
                        <h2 class="text-center pb-4">Reports against sexual harrasment</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of filed sexual harrassment cases" name="no_sexual_harrassment">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of resolved sexual harrassment cases" name="no_resolved_sexual_harrassment">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.7.4-->
                    <div class=" w-100 h-auto" id="research574" style="display: none;">
                        <h2 class="text-center pb-4">VAW desk amd officer</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="VAW Desk Officer" name="VAW_officer">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Evidence" name="evidence">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.7.5-->
                    <div class=" w-100 h-auto" id="research575" style="display: none;">
                        <h2 class="text-center pb-4">Reports on VAWC cases</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of filed VAWC cases" name="no_filed_VAWC_cases">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of resolve VAWC cases" name="no_resolve_VAWC">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.7.6.1-->
                    <div class=" w-100 h-auto" id="research5761" style="display: none;">
                        <h2 class="text-center pb-4">Students</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students who experience abuse from family members" name="no_students_abuse">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students who experience abuse from former or current partner" name="no_student_abuse_partner">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students who experience abuse from other people" name="no_students_abuse_otherpeople">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students who reported the abuse to the authorities" name="no_students_reported">
                            </div>
                            <p class="text-center lead">List of collaborations with health institutions</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students who confide the abuse to trusted person" name="no_students_confide">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.7.6.2-->
                    <div class=" w-100 h-auto" id="research5762" style="display: none;">
                        <h2 class="text-center pb-4">Employees</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees who experience abuse from family members" name="no_employees_experience_abuse">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees who experience abuse from former or current partner" name="no_employees_partner">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees who experience abuse from other people" name="no_employees_abuse_otherpeople">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees who reported abuse to the authorities" name="no_employees_reported">
                            </div>
                            <p class="text-center lead">List of collaborations with health institutions</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees who confide the abuse to trusted person" name="no_employees_confide">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.8.1-->
                    <div class=" w-100 h-auto" id="research581" style="display: none;">
                        <h2 class="text-center pb-4">GAD Plan and Budget</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total campus GAA" name="total_campus_GAA">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="5% of total GAA" name="total_GAA">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total GAD fund allotted in the GPB" name="total_GAD_fund">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.8.2-->
                    <div class=" w-100 h-auto" id="research582" style="display: none;">
                        <h2 class="text-center pb-4">GAD Accomplishment Report</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total GAD fund utilized" name="total_GAD_fund_utilized">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.9.1-->
                    <div class=" w-100 h-auto" id="research591" style="display: none;">
                        <h2 class="text-center pb-4">Capacity Development Sessions</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of implemented CapDev sessions" name="no_implemented_CapDev">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of beneficiaries" name="no_beneficiaries">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="title_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short Description of the PPA" name="description_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="text" class="form-control" placeholder="Total Cost" name="total_cost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund Source" name="fund_source">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.9.2-->
                    <div class=" w-100 h-auto" id="research592" style="display: none;">
                        <h2 class="text-center pb-4">GAD Observances</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of conducted GAD observances" name="no_conducted_GAD">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="title_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short Description of the PPA" name="description_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total Cost" name="total_cost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="text" class="form-control" placeholder="Fund Source" name="fund_source">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.9.3-->
                    <div class=" w-100 h-auto" id="research593" style="display: none;">
                        <h2 class="text-center pb-4">GAD IEC Materials</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of GAD IEC Materials produced and disseminated" name="no_GAD_IEC">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="total_cost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of other IEC materials reviewed for the use of gender-fair languange and images" name="no_IEC_materials">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.9.4-->
                    <div class=" w-100 h-auto" id="research594" style="display: none;">
                        <h2 class="text-center pb-4">Library Resources</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of purchased GAD-related printed books" name="no_purchased_GAD">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of purchased GAD-related e-sources books" name="no_GAD_related_esource">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total amount utilized" name="total_amount_utilized">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.10.1-->
                    <div class=" w-100 h-auto" id="research5101" style="display: none;">
                        <h2 class="text-center pb-4">Courses integrated with gender perspective</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of courses integrated with gender perspective" name="no_courses_integrated">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.11.1-->
                    <div class=" w-100 h-auto" id="research5111" style="display: none;">
                        <h2 class="text-center pb-4">Extension PPAs integradted with gender perspective</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of extension PPAs integradted with gender perspective" name="no_extension_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="title_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short Description of the PPA" name="description_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total Cost" name="total_cost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source" name="fund_source">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    //button
    var btn_res511 = document.getElementById("res511");
    var btn_res521 = document.getElementById("res521");
    
    //div
    var div_res511 = document.getElementById("research511");
    var div_res521 = document.getElementById("research521");

    //button
    var btn_res531 = document.getElementById("res531");
    var btn_res532 = document.getElementById("res532");

    //div
    var div_res531 = document.getElementById("research531");
    var div_res532 = document.getElementById("research532");

    //button
    var btn_res533 = document.getElementById("res533");
    var btn_res534 = document.getElementById("res534");

    //div
    var div_res533 = document.getElementById("research533");
    var div_res534 = document.getElementById("research534");

    //button
    var btn_res535 = document.getElementById("res535");
    var btn_res541 = document.getElementById("res541");

    //div
    var div_res535 = document.getElementById("research535");
    var div_res541 = document.getElementById("research541");

    //button
    var btn_res551 = document.getElementById("res551");
    var btn_res552 = document.getElementById("res552");

    //div
    var div_res551 = document.getElementById("research551");
    var div_res552 = document.getElementById("research552");

    //button
    var btn_res553 = document.getElementById("res553");
    var btn_res554 = document.getElementById("res554");

    //div
    var div_res553 = document.getElementById("research553");
    var div_res554 = document.getElementById("research554");

    //button
    var btn_res561 = document.getElementById("res561");
    var btn_res562 = document.getElementById("res562");

    //div
    var div_res561 = document.getElementById("research561");
    var div_res562 = document.getElementById("research562");

    //button
    var btn_res563 = document.getElementById("res563");
    var btn_res564 = document.getElementById("res564");

    //div
    var div_res563 = document.getElementById("research563");
    var div_res564 = document.getElementById("research564");

    //button
    var btn_res565 = document.getElementById("res565");
    var btn_res566 = document.getElementById("res566");

    //div
    var div_res565 = document.getElementById("research565");
    var div_res566 = document.getElementById("research566");

    //button
    var btn_res567 = document.getElementById("res567");
    var btn_res568 = document.getElementById("res568");

    //div
    var div_res567 = document.getElementById("research567");
    var div_res568 = document.getElementById("research568");

    //button
    var btn_res569 = document.getElementById("res569");
    var btn_res5610 = document.getElementById("res5610");

    //div
    var div_res569 = document.getElementById("research569");
    var div_res5610 = document.getElementById("research5610");

    //button
    var btn_res571 = document.getElementById("res571");
    var btn_res572 = document.getElementById("res572");   

    //div
    var div_res571 = document.getElementById("research571");
    var div_res572 = document.getElementById("research572");

    //button
    var btn_res573 = document.getElementById("res573");
    var btn_res574 = document.getElementById("res574");

    //div
    var div_res573 = document.getElementById("research573");
    var div_res574 = document.getElementById("research574");

    //button
    var btn_res575 = document.getElementById("res575");
    var btn_res576 = document.getElementById("res576");

    //div
    var div_res575 = document.getElementById("research575");
    var div_res576 = document.getElementById("research576");

    //button
    var btn_res5761 = document.getElementById("res5761");
    var btn_res5762 = document.getElementById("res5762");

    //div
    var div_res5761 = document.getElementById("research5761");
    var div_res5762 = document.getElementById("research5762");

    //button
    var btn_res581 = document.getElementById("res581");
    var btn_res582 = document.getElementById("res582");

    //div
    var div_res581 = document.getElementById("research581");
    var div_res582 = document.getElementById("research582");

    //button
    var btn_res591 = document.getElementById("res591");
    var btn_res592 = document.getElementById("res592");

    //div
    var div_res591 = document.getElementById("research591");
    var div_res592 = document.getElementById("research592");

    //button
    var btn_res593 = document.getElementById("res593");
    var btn_res594 = document.getElementById("res594");

     //div
    var div_res593 = document.getElementById("research593");
    var div_res594 = document.getElementById("research594");

    //button
    var btn_res5101 = document.getElementById("res5101");
    var btn_res5111 = document.getElementById("res5111");

    //div
    var div_res5101 = document.getElementById("research5101");
    var div_res5111 = document.getElementById("research5111");
            
    btn_res511.addEventListener('click', () => {
        div_res511.style.display = "block";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res521.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "block";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res531.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "block";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res532.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "block";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res533.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "block";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

        btn_res534.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "block";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res535.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "block";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res541.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "block";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res551.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "block";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res552.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "block";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res553.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "block";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res554.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "block";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res561.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "block";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res562.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "block";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res563.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "block";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res564.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "block";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res565.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "block";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res566.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "block";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });
    
    btn_res567.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "block";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res568.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "block";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res5610.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "block";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res571.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "block";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res572.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "block";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res573.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "block";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res574.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "block";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res575.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "block";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res576.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "block";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res5761.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "block";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res5762.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "block";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res581.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "block";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res582.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "block";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res591.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "block";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res592.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "block";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res593.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "block";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
    });

    btn_res594.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "block";
        div_res5101.style.display = "none";
        div_res5111.style.display = "none";
        
    });

    btn_res5101.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "block";
        div_res5111.style.display = "none";
        
    });

    btn_res5101.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
        div_res532.style.display = "none";
        div_res533.style.display = "none";
        div_res534.style.display = "none";
        div_res535.style.display = "none";
        div_res541.style.display = "none";
        div_res551.style.display = "none";
        div_res552.style.display = "none";
        div_res553.style.display = "none";
        div_res554.style.display = "none";
        div_res561.style.display = "none";
        div_res562.style.display = "none";
        div_res563.style.display = "none";
        div_res564.style.display = "none";
        div_res565.style.display = "none";
        div_res566.style.display = "none";
        div_res567.style.display = "none";
        div_res568.style.display = "none";
        div_res5610.style.display = "none";
        div_res571.style.display = "none";
        div_res572.style.display = "none";
        div_res573.style.display = "none";
        div_res574.style.display = "none";
        div_res575.style.display = "none";
        div_res576.style.display = "none";
        div_res5761.style.display = "none";
        div_res5762.style.display = "none";
        div_res581.style.display = "none";
        div_res582.style.display = "none";
        div_res591.style.display = "none";
        div_res592.style.display = "none";
        div_res593.style.display = "none";
        div_res594.style.display = "none";
        div_res5101.style.display = "none";
        div_res5111.style.display = "block";
        
    });
    document.addEventListener("DOMContentLoaded", function() {
        var closeBtn = document.getElementById("closeBtn");

        if (closeBtn) {
            closeBtn.addEventListener("click", function(event) {
                event.preventDefault();
                var messageContainer = document.querySelector(".message-container");
                messageContainer.style.display = "none";
                window.location.href = "formsdg5.php";
            });
        }
    });
</script>
