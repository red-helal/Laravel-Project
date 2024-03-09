@extends('admin.main.contentLayout')

@section('main_title')
Dashboard
@endsection

@section('head_title')
Slider
@endsection

@section('contentbox')

              <!-- TABLE: LATEST ORDERS -->
              <div class="card">
                <div class="card-header border-transparent">
                  <h3 class="card-title">Slider List</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table m-0">
                      <thead class="bg-warning">
                      <tr>
                        <th>Slider ID</th>
                        <th>Item</th>
                        <th>Status</th>
                        <th>Popularity</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR9842</a></td>
                        <td>Call of Duty IV</td>
                        <td><span class="badge badge-success">Shipped</span></td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                        </td>
                        <td>
                         <button class="btn btn-primary">View</button>
                         <button class="btn btn-success">Edit</button>
                         <button class="btn btn-danger">Delet</button>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR1848</a></td>
                        <td>Samsung Smart TV</td>
                        <td><span class="badge badge-warning">Pending</span></td>
                        <td>
                          <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                        </td>
                        <td>
                            <button class="btn btn-primary">View</button>
                            <button class="btn btn-success">Edit</button>
                            <button class="btn btn-danger">Delet</button>
                           </td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                        <td>iPhone 6 Plus</td>
                        <td><span class="badge badge-danger">Delivered</span></td>
                        <td>
                          <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                        </td>
                        <td>
                            <button class="btn btn-primary">View</button>
                            <button class="btn btn-success">Edit</button>
                            <button class="btn btn-danger">Delet</button>
                           </td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                        <td>Samsung Smart TV</td>
                        <td><span class="badge badge-info">Processing</span></td>
                        <td>
                          <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                        </td>
                        <td>
                            <button class="btn btn-primary">View</button>
                            <button class="btn btn-success">Edit</button>
                            <button class="btn btn-danger">Delet</button>
                           </td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR1848</a></td>
                        <td>Samsung Smart TV</td>
                        <td><span class="badge badge-warning">Pending</span></td>
                        <td>
                          <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                        </td>
                        <td>
                            <button class="btn btn-primary">View</button>
                            <button class="btn btn-success">Edit</button>
                            <button class="btn btn-danger">Delet</button>
                           </td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                        <td>iPhone 6 Plus</td>
                        <td><span class="badge badge-danger">Delivered</span></td>
                        <td>
                          <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                        </td>
                        <td>
                            <button class="btn btn-primary">View</button>
                            <button class="btn btn-success">Edit</button>
                            <button class="btn btn-danger">Delet</button>
                           </td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR9842</a></td>
                        <td>Call of Duty IV</td>
                        <td><span class="badge badge-success">Shipped</span></td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                        </td>
                        <td>
                            <button class="btn btn-primary">View</button>
                            <button class="btn btn-success">Edit</button>
                            <button class="btn btn-danger">Delet</button>
                           </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Add Slider</a>
                  <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Slider</a>
                </div>
                <!-- /.card-footer -->
              </div>

            </div>

          </div>
          <!-- /.row -->


@endsection




