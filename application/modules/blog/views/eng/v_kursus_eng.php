<style>
.a1 a {
    color: darkolivegreen;
    font-size: 14px;
}

a:hover {
    color: rgb(27, 158, 38);
}
</style>
<div class="container a1" style="margin-top: 80px;">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('blog/Blog/Kursus') ?>">Semua kursus</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('blog/Blog/Kursus') ?>">Bahan
                    bacaan</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('blog/Blog/Kursus') ?>">Video</a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12">
            <h3 class="page-title poppins text-success">Courses</h3>
        </div>
    </div>

    <form action="/thematicarea/indexpostback" method="post"><input name="__RequestVerificationToken" type="hidden"
            value="340Jo1EdDQeG_tZdvWw6aPS-kRlO8ulPpivI7e6L-ShGZPHFuSOBy7_RG3PVCWE79nto6fY07qPkTTQikxFPzG8iMlqtjGfH1B_zVb_vaME1">
        <div class="row">
            <div class="col-md-3 col-sm-4 w-filter-">
                <div class="SearchBox-Title">
                    <h5 class="alike bg-success text-white p-1">Filter learning courses</h5>
                </div>
                <div class="SearchBox-Top">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Filter by keywords"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text btn1" id="basic-addon2"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
                <div class="SearchBox-SubTitle">
                    <strong>Order by</strong>
                </div>
                <div class="SearchBox-Bottom">
                    <ul>
                        <li><a href="/thematicarea?order=name" id="all_courses">Alphabetical</a></li>
                        <li><a href="/thematicarea?order=newest" id="all_courses">Newest Course</a></li>
                        <li><a href="/thematicarea?order=oldest" id="all_courses">Oldest Course</a></li>
                        <li><a href="/thematicarea?order=language" id="all_courses">Language</a></li>
                    </ul>
                </div>
                <div class="SearchBox-SubTitle">
                    <strong>Filter by categories</strong>
                </div>
                <div class="SearchBox-Bottom">
                    <ul>
                        <li><a href="/thematicarea" id="all_courses">All Courses</a></li>
                        <li><a href="/thematicarea?catalog=1" id="catalog_1">Enterprise Technology Services</a></li>
                        <li><a href="/thematicarea?catalog=2" id="catalog_2">Field Technology Solutions</a></li>
                        <li><a href="/thematicarea?catalog=3" id="catalog_3">IT Operational Management</a></li>
                        <li><a href="/thematicarea?catalog=5" id="catalog_5">Uniformed Personnel</a></li>
                    </ul>
                </div>
                <div class="SearchBox-SubTitle">
                    <strong>Filter by languages</strong>
                </div>
                <div class="SearchBox-Bottom">
                    <ul>
                        <li><a href="/thematicarea?lang=ARA">Arabic</a></li>
                        <li><a href="/thematicarea?lang=ZHT">Chinese</a></li>
                        <li><a href="/thematicarea?lang=ENG">English</a></li>
                        <li><a href="/thematicarea?lang=FRA">French</a></li>
                        <li><a href="/thematicarea?lang=RUS">Russian</a></li>
                        <li><a href="/thematicarea?lang=ESP">Spanish</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-9 col-sm-8 w-course-search-list">
                <span class="poppins">About 76 Results</span>

                <hr>
                <div class="w-course-list p-3 shadow p-3 mb-5 bg-white rounded">
                    <div class="course-list-item">
                        <div class="row">
                            <div class="col-sm-4 col-md-3">
                                <div class="thumb">
                                    <img class="img-responsive" src="<?= base_url('assets/') ?>img/icon/thumbnail.png">
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-9">
                                <div class="course-meta p-3">
                                    <h2>
                                        <a href="/thematicarea/detail?id=14" class="h2">ITIL 4 Managing Professional
                                            Transition
                                            (ITIL 4 MPT)</a>
                                    </h2>
                                    <p class="poppins">
                                    </p>
                                    <p class="poppins">This coure is available upon request. <br> The ITIL 4 Managing
                                        Professional
                                        Transition module is designed to allow ITIL v3 certified staff to easily
                                        transition across to ITIL 4. They can gain the designation of ITIL 4 Managing
                                        Professional via one course and one exam. <br>
                                        To take the transition module, all candidates must be at Expert level or have a
                                        minimum of 17 v3 credits. Candidates can continue to collect their v3
                                        Intermediate or Practitioner credits to enable them to be eligible to take the
                                        transition module .<br>
                                        At the end of the course, the staff will take the ITIL 4 Managing Professional
                                        Transition certification exam. <br> </p>

                                    <style>
                                    table,
                                    th,
                                    td {
                                        border: 1px;
                                        border-collapse: collapse;
                                    }

                                    th,
                                    td {
                                        padding: 5px;
                                        text-align: left;
                                    }
                                    </style>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><b>Duration:</b> 3 days </td>
                                                <td><b>Delivery Method:</b> Self-paced </td>
                                            </tr>
                                            <tr>
                                                <td><b>Location:</b> Online </td>
                                                <td><b>Target Audience:</b>Civilian Staff</td>
                                            </tr>
                                            <tr>
                                                <td><b>Delivery Date:</b> Online </td>
                                                <td><b>Prerequisites:</b> Expert level or have a minimum of 17 v3
                                                    credits. </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p class="poppins"></p>
                                    <div class="w-buttons">
                                        <a href="/learn/enroll/14" id="activity_1" class="btn btn-primary btn1"><i
                                                class="fa fa-sign-in"></i> Enroll</a>
                                        <a href="/thematicarea/detail?id=14" class="btn btn-default btn1">Course
                                            detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-course-list p-3 shadow p-3 mb-5 bg-white rounded">
                    <div class="course-list-item">
                        <div class="row">
                            <div class="col-sm-4 col-md-3">
                                <div class="thumb">
                                    <img class="img-responsive"
                                        src="<?= base_url('assets/') ?>img/icon/thumbnail (1).png">
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-9">
                                <div class="course-meta p-3">
                                    <h2>
                                        <a href="/thematicarea/detail?id=14" class="h2">ITIL 4 Managing Professional
                                            Transition
                                            (ITIL 4 MPT)</a>
                                    </h2>
                                    <p class="poppins">
                                    </p>
                                    <p class="poppins">This coure is available upon request. <br> The ITIL 4 Managing
                                        Professional
                                        Transition module is designed to allow ITIL v3 certified staff to easily
                                        transition across to ITIL 4. They can gain the designation of ITIL 4 Managing
                                        Professional via one course and one exam. <br>
                                        To take the transition module, all candidates must be at Expert level or have a
                                        minimum of 17 v3 credits. Candidates can continue to collect their v3
                                        Intermediate or Practitioner credits to enable them to be eligible to take the
                                        transition module .<br>
                                        At the end of the course, the staff will take the ITIL 4 Managing Professional
                                        Transition certification exam. <br> </p>

                                    <style>
                                    table,
                                    th,
                                    td {
                                        border: 1px;
                                        border-collapse: collapse;
                                    }

                                    th,
                                    td {
                                        padding: 5px;
                                        text-align: left;
                                    }
                                    </style>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><b>Duration:</b> 3 days </td>
                                                <td><b>Delivery Method:</b> Self-paced </td>
                                            </tr>
                                            <tr>
                                                <td><b>Location:</b> Online </td>
                                                <td><b>Target Audience:</b>Civilian Staff</td>
                                            </tr>
                                            <tr>
                                                <td><b>Delivery Date:</b> Online </td>
                                                <td><b>Prerequisites:</b> Expert level or have a minimum of 17 v3
                                                    credits. </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p class="poppins"></p>
                                    <div class="w-buttons">
                                        <a href="/learn/enroll/14" id="activity_1" class="btn btn-primary btn1"><i
                                                class="fa fa-sign-in"></i> Enroll</a>
                                        <a href="/thematicarea/detail?id=14" class="btn btn-default btn1">Course
                                            detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-course-list p-3 shadow p-3 mb-5 bg-white rounded">
                    <div class="course-list-item">
                        <div class="row">
                            <div class="col-sm-4 col-md-3">
                                <div class="thumb">
                                    <img class="img-responsive"
                                        src="<?= base_url('assets/') ?>img/icon/thumbnail (2).png">
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-9">
                                <div class="course-meta p-3">
                                    <h2>
                                        <a href="/thematicarea/detail?id=14" class="h2">ITIL 4 Managing Professional
                                            Transition
                                            (ITIL 4 MPT)</a>
                                    </h2>
                                    <p class="poppins">
                                    </p>
                                    <p class="poppins">This coure is available upon request. <br> The ITIL 4 Managing
                                        Professional
                                        Transition module is designed to allow ITIL v3 certified staff to easily
                                        transition across to ITIL 4. They can gain the designation of ITIL 4 Managing
                                        Professional via one course and one exam. <br>
                                        To take the transition module, all candidates must be at Expert level or have a
                                        minimum of 17 v3 credits. Candidates can continue to collect their v3
                                        Intermediate or Practitioner credits to enable them to be eligible to take the
                                        transition module .<br>
                                        At the end of the course, the staff will take the ITIL 4 Managing Professional
                                        Transition certification exam. <br> </p>

                                    <style>
                                    table,
                                    th,
                                    td {
                                        border: 1px;
                                        border-collapse: collapse;
                                    }

                                    th,
                                    td {
                                        padding: 5px;
                                        text-align: left;
                                    }
                                    </style>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><b>Duration:</b> 3 days </td>
                                                <td><b>Delivery Method:</b> Self-paced </td>
                                            </tr>
                                            <tr>
                                                <td><b>Location:</b> Online </td>
                                                <td><b>Target Audience:</b>Civilian Staff</td>
                                            </tr>
                                            <tr>
                                                <td><b>Delivery Date:</b> Online </td>
                                                <td><b>Prerequisites:</b> Expert level or have a minimum of 17 v3
                                                    credits. </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p class="poppins"></p>
                                    <div class="w-buttons">
                                        <a href="/learn/enroll/14" id="activity_1" class="btn btn-primary btn1"><i
                                                class="fa fa-sign-in"></i> Enroll</a>
                                        <a href="/thematicarea/detail?id=14" class="btn btn-default btn1">Course
                                            detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
</div>