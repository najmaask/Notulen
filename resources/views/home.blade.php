@extends('layout.master')

@section('content')

<title>Dashboard</title>

<div class="container">
                                @if (session('success'))
                                    <div class="alert alert-success" role="alert" style="width:1000px; margin-left: 8px; margin-top: 20px">
                                        {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>

                                    </div>
                                @endif
</div>

       <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="ti-pencil-alt"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">
                                              <?php 
                                              $host = "localhost";
                                              $user = "root";
                                              $pass = "";
                                              $dbnm = "db_notulen";

                                              $conn = new mysqli($host, $user, $pass, $dbnm);

                                              if ($conn->connect_error){
                                                die("connection Failed:" . $conn->connection_error);
                                              }

                                              $sql = "SELECT COUNT(*) FROM notulens";
                                              $result = $conn->query($sql);

                                              while ($row=$result->fetch_assoc()){
                                                echo $row['COUNT(*)'];
                                              }
                                              $conn->close();

                                               ?>
                                            </span></div>
                                            <div class="stat-heading">Notulen</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="ti-pencil-alt"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">
                                              <?php 
                                              $host = "localhost";
                                              $user = "root";
                                              $pass = "";
                                              $dbnm = "db_notulen";

                                              $conn = new mysqli($host, $user, $pass, $dbnm);

                                              if ($conn->connect_error){
                                                die("connection Failed:" . $conn->connection_error);
                                              }

                                              $sql = "SELECT COUNT(*) FROM laporans";
                                              $result = $conn->query($sql);

                                              while ($row=$result->fetch_assoc()){
                                                echo $row['COUNT(*)'];
                                              }
                                              $conn->close();

                                               ?>
                                            </span></div>
                                            <div class="stat-heading">Laporan</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">
                                              <?php 
                                              $host = "localhost";
                                              $user = "root";
                                              $pass = "";
                                              $dbnm = "db_notulen";

                                              $conn = new mysqli($host, $user, $pass, $dbnm);

                                              if ($conn->connect_error){
                                                die("connection Failed:" . $conn->connection_error);
                                              }

                                              $sql = "SELECT COUNT(*) FROM anggotas";
                                              $result = $conn->query($sql);

                                              while ($row=$result->fetch_assoc()){
                                                echo $row['COUNT(*)'];
                                              }
                                              $conn->close();

                                               ?>
                                            </span></div>
                                            <div class="stat-heading">Anggota</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">
                                              <?php 
                                              $host = "localhost";
                                              $user = "root";
                                              $pass = "";
                                              $dbnm = "db_notulen";

                                              $conn = new mysqli($host, $user, $pass, $dbnm);

                                              if ($conn->connect_error){
                                                die("connection Failed:" . $conn->connection_error);
                                              }

                                              $sql = "SELECT COUNT(*) FROM admins";
                                              $result = $conn->query($sql);

                                              while ($row=$result->fetch_assoc()){
                                                echo $row['COUNT(*)'];
                                              }
                                              $conn->close();

                                               ?>
                                            </span></div>
                                            <div class="stat-heading">Admin</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Widgets -->

                <!-- To Do and Live Chat -->
                <div class="row">
                <!-- Calender Chart Weather  -->
                
                    <div class="col-md-12 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h4 class="box-title">Chandler</h4> -->
                                <div class="calender-cont widget-calender">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div><!-- /.card -->
                    </div>
                      <!-- Modal - Calendar - Add New Event -->
                      <div class="modal fade none-border" id="event-modal">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title"><strong>Add New Event</strong></h4>
                                  </div>
                                  <div class="modal-body"></div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                      <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- /#event-modal -->
                      <!-- Modal - Calendar - Add Category -->
                      <div class="modal fade none-border" id="add-category">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title"><strong>Add a category </strong></h4>
                                  </div>
                                  <div class="modal-body">
                                      <form>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <label class="control-label">Category Name</label>
                                                  <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                              </div>
                                              <div class="col-md-6">
                                                  <label class="control-label">Choose Category Color</label>
                                                  <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                      <option value="success">Success</option>
                                                      <option value="danger">Danger</option>
                                                      <option value="info">Info</option>
                                                      <option value="pink">Pink</option>
                                                      <option value="primary">Primary</option>
                                                      <option value="warning">Warning</option>
                                                  </select>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- /#add-category -->
                    
                      <div class="col-lg-6">
                          <div class="card">
                              <div class="card-body">
                                  <h4 class="card-title box-title">To Do List</h4>
                                  <div class="card-content">
                                      <div class="todo-list">
                                          <div class="tdl-holder">
                                              <div class="tdl-content">
                                                  <ul>
                                                      <li>
                                                          <label>
                                                              <input type="checkbox"><i class="check-box"></i><span>Conveniently fabricate interactive technology for ....</span>
                                                              <a href='#' class="fa fa-times"></a>
                                                              <a href='#' class="fa fa-pencil"></a>
                                                              <a href='#' class="fa fa-check"></a>
                                                          </label>
                                                      </li>
                                                      <li>
                                                          <label>
                                                              <input type="checkbox"><i class="check-box"></i><span>Creating component page</span>
                                                              <a href='#' class="fa fa-times"></a>
                                                              <a href='#' class="fa fa-pencil"></a>
                                                              <a href='#' class="fa fa-check"></a>
                                                          </label>
                                                      </li>
                                                      <li>
                                                          <label>
                                                              <input type="checkbox" checked><i class="check-box"></i><span>Follow back those who follow you</span>
                                                              <a href='#' class="fa fa-times"></a>
                                                              <a href='#' class="fa fa-pencil"></a>
                                                              <a href='#' class="fa fa-check"></a>
                                                          </label>
                                                      </li>
                                                      <li>
                                                          <label>
                                                              <input type="checkbox" checked><i class="check-box"></i><span>Design One page theme</span>
                                                              <a href='#' class="fa fa-times"></a>
                                                              <a href='#' class="fa fa-pencil"></a>
                                                              <a href='#' class="fa fa-check"></a>
                                                          </label>
                                                      </li>

                                                      <li>
                                                          <label>
                                                              <input type="checkbox" checked><i class="check-box"></i><span>Creating component page</span>
                                                              <a href='#' class="fa fa-times"></a>
                                                              <a href='#' class="fa fa-pencil"></a>
                                                              <a href='#' class="fa fa-check"></a>
                                                          </label>
                                                      </li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div> <!-- /.todo-list -->
                                  </div>
                              </div> <!-- /.card-body -->
                          </div><!-- /.card -->
                      </div>

                </div>
                <!-- /Calender Chart Weather -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2019 PT. Fattah Tekno Digital
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>
@endsection
