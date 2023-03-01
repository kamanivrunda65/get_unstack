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
                        <th>No</th>
                        <th class="sortStyle">User<i class="typcn typcn-arrow-sorted-down"></i></th>
                        <th class="sortStyle">Question<i class="typcn typcn-arrow-sorted-down"></i></th>
                        <th class="sortStyle">Tags<i class="typcn typcn-arrow-sorted-down"></i></th>
                        <th class="sortStyle">Category<i class="typcn typcn-arrow-sorted-down"></i></th>
                        <th class="sortStyle">Discription<i class="typcn typcn-arrow-sorted-down"></i></th>
                        
                        <th class="sortStyle">Date<i class="typcn typcn-arrow-sorted-down"></i></th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody id="question-data">
                    
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
<script>
  function showquestion()
  {
    fetch("http://localhost:8000/api/questiondata").then(response=>response.json()).then((res)=>{
        // console.log(res);
        questiondata="";
        count=1;
        res.forEach(element => {
            questiondata +=`<tr>
                        <td>${count}</td>
                        <td>${element.user_id}</td>
                        <td>${element.question}</td>
                        <td>${element.tags}</td>
                        <td>${element.category}</td>
                        <td>${element.discription}</td>
                        <td>${element.created_at}</td>
                        <td><button class="btn btn-sm btn-danger" onclick="deletequestion(${element.id})">Delete</button> <button class="btn btn-sm btn-primary">Edit</button></td>
                        </tr>`;
                        count++;
        });
        document.getElementById('question-data').innerHTML= questiondata;
    });
  }
  showquestion()
  function deletequestion(id)
  {
    //console.log(id);
    fetch("http://localhost:8000/api/deletequestion/"+id).then(response=>response.json()).then((res)=>{
      showquestion()
    });
  }
</script>