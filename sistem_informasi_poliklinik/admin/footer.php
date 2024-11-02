<footer class="main-footer">
</footer>

<aside class="control-sidebar control-sidebar-dark">
<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
  <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
  <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="control-sidebar-home-tab">
    <h3 class="control-sidebar-heading">Recent Activity</h3>
    <ul class="control-sidebar-menu">
      <li>
        <a href="javascript:;">
          <i class="menu-icon fa fa-birthday-cake bg-red"></i>

          <div class="menu-info">
            <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

            <p>Will be 23 on April 24th</p>
          </div>
        </a>
      </li>
    </ul>

    <h3 class="control-sidebar-heading">Tasks Progress</h3>
    <ul class="control-sidebar-menu">
      <li>
        <a href="javascript:;">
          <h4 class="control-sidebar-subheading">
            Custom Template Design
            <span class="pull-right-container">
                <span class="label label-danger pull-right">70%</span>
              </span>
          </h4>

          <div class="progress progress-xxs">
            <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
          </div>
        </a>
      </li>
    </ul>

  </div>
  <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
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
    </form>
  </div>
</div>
</aside>
<div class="control-sidebar-bg"></div>
</div>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="bower_components/ckeditor/ckeditor.js"></script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    CKEDITOR.replace('editor1')
  })
</script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script>
$('.add-one').click(function(){
  var id     = 0;
  var target = $('.dynamic-element').first().clone().appendTo('.dynamic-stuff').show();
  attach_delete();
});

function attach_delete(){
  $('.delete').off();
  $('.delete').click(function(){
    console.log("click");
    $(this).closest('.table-hover').remove();
  });
}
</script>
</body>
</html>
