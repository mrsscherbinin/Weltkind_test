    <div class="container">
      <div class="row masonry-container">
      <?php foreach ($data as $key) {
        echo '
        <div class="col-md-4 item">
          <div class="thumbnail">
            <a href="/index/album/'.$key['id'].'">
              <img class="img-responsive img-rounded" src="'.$key['url'].'" alt="...">
            </a>
              <div class="caption">
               <a href="/index/album/'.$key['id'].'"><h4>'.$key['name'].'</h4></a>
              </div>
          </div>
        </div>';
      };?>
      </div>
    </div>
    <!-- End of main -->

    <div class="container">
      <nav class="paginator">
        <ul class="pagination">
        <?php 
            if($sedata['curr_page'] <= 1){
              echo '<li class="disabled">
                      <span aria-hidden="true">&laquo;</span>
                    </li>';
            }else{
              echo '<li>
                      <a href="/index/index/'.$sedata['prev'].'" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>';
            }
            echo '
              ';

          for ($i=1; $i <= $sedata['count']; $i++) { 
            if ($i == $sedata['curr_page']){
              echo '<li class="active">';
            }else{
              echo '<li>';
            }
            echo'
              <a href="/index/index/'.$i.'">'.$i.'</a></li>
            ';}

            if ($sedata['curr_page'] == $sedata['count']) {
              echo '<li class="disabled">
                      <span aria-hidden="true">&raquo;</span>
                    </li>';
            }else{
          echo'<li>
                <a href="/index/index/'.$sedata['next'].'" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>';
            }?>
        </ul>
      </nav>
    </div>




