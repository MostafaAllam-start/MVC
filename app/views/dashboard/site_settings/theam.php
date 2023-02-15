<?php
    require DASHBOARD_LAYOUT."head.php";
?>
  <div class="card">
    <form action="theamUpdateHandler" method="post">
      <div class="card-header">
        <h3 class="card-title">Theams</h3>
      </div>
      <div class="card-body" style="display: block;">
          <div style="display:flex; justify-content: space-between;">
            <img class="col-5 theams" id="food" src=<?= THEAMS.'food.jpg'?>>
            <img class="col-5 theams" id="nike" src=<?= THEAMS.'nike.jpg'?>>
          </div>
          <input type="hidden" name="theam" id="theam">
        </div>
        <!-- /.card-body -->
        <div class="card-footer" style="display: block;">
          <input class="btn btn-primary" type="submit" value="submit">
        </div>
    </form>
    <!-- /.card-footer-->
  </div>
  <script>
    theams = document.querySelectorAll('.theams');
    theam = document.getElementById("theam")
    for(let i = 0; i < theams.length; i++){
      theams[i].addEventListener("click", ()=>{
        for(let j = 0 ; j < theams.length; j++){
          theams[j].style = "border:none;"
        }
        theams[i].style = "border:solid red 3px";
        theam.value = theams[i].id;
      });

    }
  </script>
<?php
    require DASHBOARD_LAYOUT."footer.php";
?>