<!-- Department & Designation Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLabel"> </h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container d-flex justify-content-center mt-5">
                    <div class="col-md-6 border shadow">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item"><a href="#department_change" class="nav-link active"
                                    data-toggle="pill">Department
                                    Change</a></li>
                            <li class="nav-item"><a href="#designation_change" class="nav-link"
                                    data-toggle="pill">Designation
                                    Change</a></li>

                        </ul>

                        <div class="tab-content">

                            <div class="tab-pane" id="department_change">
                                <div class="box-tools">
                                    <ul class="pagination pagination-sm no-margin pull-right">
                                        <li><a href="#">&laquo;</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                                </div>
                                <form class="form-inline my-2 my-lg-0">

                                    <input class="form-control mr-sm-0" type="search" placeholder="Search" id="Search"
                                        aria-label="Search">
                                    <button class="btn btn-outline-success my-0 my-sm-0" type="submit">Search</button>
                                </form>


                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover" id="desgintable">
                                        <thead>
                                            <tr>

                                                <th style='text-align:center;font-family:times-new-roman;'>
                                                    Emp_id
                                                </th>


                                                <th style='text-align:center;font-family:times-new-roman;'>
                                                    Emp_name
                                                </th>


                                                <th style='text-align:center;font-family:times-new-roman;'>
                                                    Department
                                                </th>


                                                <th style='text-align:left;font-family:times-new-roman;'>
                                                    ACTION
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                        $remove_str = "";
                                                        $j=1;
                                                            foreach( $remove_result AS $remove_row){

                                                                $remove_str .="<tr>
                                                                <td style='text-align:center;font-family:times-new-roman;'>".$remove_row['emp_id']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$remove_row['name']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$remove_row['dept_name']."</td>
                                                                
                                                                <td><button class='btn btn-success' id='delete'><i class='fa fa-random fa-2x'></i></button></td>
                                                                </td>
                                                            </tr>";
                                                        }
                                                    echo $remove_str;
                                                ?>
                                        </tbody>

                                    </table>
                                </div>

                            </div>


                            <div class="tab-pane" id="designation_change">
                                <div class="box-tools">
                                    <ul class="pagination pagination-sm no-margin pull-right">
                                        <li><a href="#">&laquo;</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                                </div>
                                <form class="form-inline my-2 my-lg-0">

                                    <input class="form-control mr-sm-0" type="search" placeholder="Search" id="Search"
                                        aria-label="Search">
                                    <button class="btn btn-outline-success my-0 my-sm-0" type="submit">Search</button>
                                </form>


                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover" id="desgintable">
                                        <thead>
                                            <tr>

                                                <th style='text-align:center;font-family:times-new-roman;'>
                                                    Emp_id
                                                </th>


                                                <th style='text-align:center;font-family:times-new-roman;'>
                                                    Emp_name
                                                </th>


                                                <th style='text-align:center;font-family:times-new-roman;'>
                                                    Designation
                                                </th>


                                                <th style='text-align:left;font-family:times-new-roman;'>
                                                    ACTION
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                        $remove_str = "";
                                                        $j=1;
                                                            foreach( $remove_result AS $remove_row){

                                                                $remove_str .="<tr>
                                                                <td style='text-align:center;font-family:times-new-roman;'>".$remove_row['emp_id']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$remove_row['name']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$remove_row['design_name']."</td>
                                                                
                                                                <td><button class='btn btn-success' id='delete'><i class='fa fa-random fa-2x'></i></button></td>
                                                                </td>
                                                            </tr>";
                                                        }
                                                    echo $remove_str;
                                                ?>
                                        </tbody>

                                    </table>
                                </div>



                            </div>


                        </div>


                    </div>
                </div>
            </div>

        </div>

    </div>
</div>