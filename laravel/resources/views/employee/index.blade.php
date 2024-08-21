<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Calendar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18')}}/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18')}}/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18')}}/bower_components/Ionicons/css/ionicons.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18')}}/bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18')}}/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18')}}/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18')}}/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->



          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('AdminLTE-2.4.18')}}/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">{{auth()->user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset('AdminLTE-2.4.18')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <form class="d-flex px-5" action="/logout" method="POST">
                    @csrf
                    <button class="btn btn-primary" type="submit">Log out</button>
                  </form>                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('AdminLTE-2.4.18')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{auth()->user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Calendar
        <small>Control panel</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>

              <div class="modal fade" id="lunchRequestModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Yêu cầu ăn trưa chi tiết</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" id="modalBody">
                                <!-- Content will be loaded here -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Modal để điền số lượng món ăn, ghi chú và hình thức -->
                <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="orderModalLabel">Đặt món ăn</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="orderForm">
                                    <div class="form-group">
                                        <label for="quantity">Số lượng:</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity"
                                            min="1" required>
                                    </div>
                                    <!-- Hidden fields -->
                                    <input type="hidden" id="foodId" name="foodId">
                                    <input type="hidden" id="lunchRequestId" name="lunchRequestId">
                                    <input type="hidden" id="userId" name="userId">

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                <button type="button" class="btn btn-primary" id="saveOrderBtn">Lưu</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal chỉnh sửa đơn hàng -->
                <div class="modal fade" id="editOrderModal" tabindex="-1" role="dialog"
                    aria-labelledby="editOrderModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editOrderModalLabel">Sửa yêu cầu</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="editOrderForm">
                                    <input type="hidden" id="editOrderId" name="orderId">
                                    <div class="form-group">
                                        <label for="editQuantity">Số lượng:</label>
                                        <input type="number" class="form-control" id="editQuantity" name="quantity"
                                            min="1" required>
                                    </div>
                                    <input type="hidden" id="editLunchRequestId" name="lunchRequestId">
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                <button type="button" class="btn btn-primary" id="saveEditOrderBtn">Lưu thay
                                    đổi</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal xác nhận xóa đơn hàng -->
                <div class="modal fade" id="deleteOrderModal" tabindex="-1" role="dialog"
                    aria-labelledby="deleteOrderModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteOrderModalLabel">Xác nhận xóa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Bạn có chắc muốn xóa không?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                <button type="button" class="btn btn-danger" id="confirmDeleteOrderBtn">Xóa</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('AdminLTE-2.4.18')}}/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('AdminLTE-2.4.18')}}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('AdminLTE-2.4.18')}}/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Slimscroll -->
<script src="{{asset('AdminLTE-2.4.18')}}/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{asset('AdminLTE-2.4.18')}}/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE-2.4.18')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('AdminLTE-2.4.18')}}/dist/js/demo.js"></script>

<!-- fullCalendar -->
<script src="{{asset('AdminLTE-2.4.18')}}/bower_components/moment/moment.js"></script>
<script src="{{asset('AdminLTE-2.4.18')}}/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<!-- Page specific script -->
<script>
    function loadLunchRequestDetails(lunchRequestId) {
            $.ajax({
                url: '/get-lunch-requests',
                method: 'GET',
                data: {
                    id: lunchRequestId // Gửi ID của yêu cầu để lấy chi tiết
                },
                success: function(response) {
                    console.log('lll',response.lunch_request);
                    var modalBody = $('#modalBody');
                    modalBody.empty(); // Xóa nội dung cũ

                    // Kiểm tra nếu có yêu cầu
                        var now = moment(); // Thời gian hiện tại
                        var lunch_request = response.lunch_request; // Giả sử bạn chỉ xử lý một yêu cầu
                        console.log('a', response.lunch_request);
                        var eatery = response.eateries; // Lấy đúng eatery (phần tử đầu tiên)
                        var foods = response.foods;
                        var orders = response.orders;
                        // var lunchRequestDate = moment(lunch_request.request_date); // Ngày của yêu cầu

                        // Kiểm tra nếu yêu cầu còn mở

                        var content = `
                    <p><strong>Quán ăn:</strong> ${eatery.name}</p>
                    <p><strong>Địa chỉ:</strong> ${eatery.address}</p>
                    <p><strong>Thời gian:</strong> ${lunch_request.request_date}</p>
                    <p><strong>Món ăn:</strong></p>
                    <ul>
                `;

                        foods.forEach(function(food) {
                            content += `
                        <li>
                            ${food.name} - ${food.price} VND
                            <button class="btn btn-primary order-button" data-food-id="${food.id}" data-lunch-request-id="${lunch_request.id}">Đặt món</button>
                        </li>
                    `;
                        });
                        content += '</ul>';

                        // Hiển thị danh sách đơn hàng
                        content += '<h5>Đã đặt:</h5><ul>';
                        orders.forEach(function(order) {
                            content += `
                        <li>
                            ${order.name} -SL: ${order.quantity}
                            <button class="btn btn-warning edit-order" data-order-id="${order.id}" data-lunch-request-id="${lunch_request.id}">Edit</button>
                            <button class="btn btn-danger delete-order" data-order-id="${order.id}"data-lunch-request-id="${lunch_request.id}">Delete</button>
                        </li>
                    `;
                        });
                        content += '</ul>';
                        // console.log(content);
                        modalBody.append(content);
                        $('#lunchRequestModal').modal('show');
                   
                }
            });
        }

  $(document).ready(function() {
            // Initialize the calendar with events from API
            $('#calendar').fullCalendar({
                editable: true,
                selectable: true,
                selectHelper: true,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                buttonText: {
                    today: 'today',
                    month: 'month',
                    week: 'week',
                    day: 'day'
                },
                events: function(start, end, timezone, callback) {
                    $.ajax({
                        url: '/calendar/events', // Đường dẫn đến endpoint API của bạn
                        type: 'GET',
                        dataType: 'json',
                        success: function(events) {
                            callback(events); // Hiển thị sự kiện trên lịch
                        },
                        error: function(xhr, status, error) {
                            console.log('Error loading events:', error);
                        }
                    });
                },
                eventClick: function(event, jsEvent, view) { // Sự kiện khi nhấp vào một sự kiện
                    var lunchRequestId = event.id; // Lấy ID của yêu cầu ăn uống từ sự kiện

                    loadLunchRequestDetails(lunchRequestId);
                }
            });

            // Xử lý khi bấm nút "Đặt món"
            $(document).on('click', '.order-button', function() {
                var foodId = $(this).data('food-id');
                var lunchRequestId = $(this).data('lunch-request-id');

                $('#foodId').val(foodId);
                $('#lunchRequestId').val(lunchRequestId);
                $('#orderModal').modal('show');
            });
        });


$('#saveOrderBtn').on('click', function() {
            var orderData = {
                foodId: $('#foodId').val(),
                quantity: $('#quantity').val(),
                lunchRequestId: $('#lunchRequestId').val(),
                _token: $('meta[name="csrf-token"]').attr('content')
                // userId: $('#userId').val(),
            };
            console.log(orderData);
            $.ajax({
                url: '/save-lunch-order',
                method: 'POST',
                data: orderData,
                success: function(response) {

                    // alert('Lưu yêu cầu thành công!');
                    $('#orderModal').modal('hide');
                    $('#foodId').val('');
                    $('#quantity').val('');
                    $('#lunchRequestId').val('');

                    loadLunchRequestDetails(orderData.lunchRequestId);

                },
                error: function(xhr, status, error) {
                    alert('Lưu yêu cầu thất bại.');
                }
            });
        });

        $(document).on('click', '.edit-order', function() {
            var orderId = $(this).data('order-id');
            console.log('Order ID: ' + orderId);
            $.ajax({
                url: '/get-order/' + orderId,
                method: 'GET',
                success: function(response) {
                    console.log('API Response:', response);

                    if (response.success) {
                        var order = response.order;

                        console.log('Order:', order);

                        $('#editOrderId').val(order.id || '');
                        $('#editQuantity').val(order.quantity || '');
                        $('#editLunchRequestId').val(order.lunch_request_id || '');

                        $('#editOrderModal').modal('show');
                    } else {
                        alert('Lỗi load dữ liệu.');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', error);
                    alert('Lỗi load dữ liệu.');
                }
            });

        });
        $('#saveEditOrderBtn').on('click', function() {
            var orderData = {
                orderId: $('#editOrderId').val(),
                quantity: $('#editQuantity').val(),
                note: $('#editNote').val(),
                orderType: $('#editOrderType').val(),
                lunchRequestId: $('#editLunchRequestId').val(),
            };
            console.log('lulu', orderData);
            $.ajax({
                url: '/update-order/' + orderData.orderId,
                method: 'POST',
                data: {
                    ...orderData,
                    _method: 'PUT', // Chuyển đổi thành phương thức PUT
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {
                        // alert('Order updated successfully!');
                        $('#editOrderModal').modal('hide');

                        // Call the function to reload the lunch request details
                        loadLunchRequestDetails(orderData.lunchRequestId);
                    } else {
                        alert('Sửa không thành công.');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', error);
                    alert('Sửa không thành công.');
                }
            });
        });


        $(document).ready(function() {
            // Set up CSRF Token for all AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Click event for delete buttons
            $(document).on('click', '.delete-order', function() {
                var orderId = $(this).data('order-id');
                var lunchRequestId = $(this).data(
                'lunch-request-id'); // Ensure this is set on the delete button

                console.log('Order ID:', orderId);
                console.log('Lunch Request ID:', lunchRequestId);

                // Set data attributes for the confirm delete button and show the modal
                $('#confirmDeleteOrderBtn').data('order-id', orderId);
                $('#confirmDeleteOrderBtn').data('lunch-request-id', lunchRequestId);
                $('#deleteOrderModal').modal('show');
            });

            // Click event for confirm delete button
            $('#confirmDeleteOrderBtn').on('click', function() {
                var orderId = $(this).data('order-id');
                var lunchRequestId = $(this).data('lunch-request-id'); // Retrieve lunchRequestId

                console.log('Confirming delete for Order ID:', orderId);
                console.log('Associated Lunch Request ID:', lunchRequestId);

                // Perform delete operation
                $.ajax({
                    url: '/delete-order/' + orderId,
                    method: 'DELETE',
                    success: function(response) {
                        if (response.success) {
                            $('#deleteOrderModal').modal('hide');
                            loadLunchRequestDetails(
                            lunchRequestId); // Refresh the lunch request details
                        } else {
                            alert('Failed to delete the order.');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error:', error);
                        alert('Failed to delete the order.');
                    }
                });
            });
        });

</script>
</body>
</html>
