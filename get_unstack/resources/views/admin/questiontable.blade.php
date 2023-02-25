@include('admin.adminheader')
  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Question Table</h4>

              <div class="row">
                <div class="table-sorter-wrapper col-lg-12 table-responsive">
                  <table id="sortable-table-2" class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th class="sortStyle">Question<i class="typcn typcn-arrow-sorted-down"></i></th>
                        <th class="sortStyle">Tags<i class="typcn typcn-arrow-sorted-down"></i></th>
                        <th class="sortStyle">Category<i class="typcn typcn-arrow-sorted-down"></i></th>
                        <th class="sortStyle">Discription<i class="typcn typcn-arrow-sorted-down"></i></th>
                        <th class="sortStyle">User<i class="typcn typcn-arrow-sorted-down"></i></th>
                        <th class="sortStyle">Date<i class="typcn typcn-arrow-sorted-down"></i></th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>

                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    @include('admin.adminfooter')
