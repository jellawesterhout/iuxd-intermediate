<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/page.css">

    <!--<title><?= $page->title() ?></title>-->
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col">
          <h3><?= $page->title_1() ?></h3>
          <p><?= $page->wat()->kirbytext() ?></p>
        </div>
        <div class="col">
          <img src="assets/images/placeholder_1.png" style="width: 100%;"/>
        </div>
      </div>
    </div>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row">
          <div class="col-4">
            <img src="assets/images/placeholder_1.png" style="width: 100%;"/>
            <h5><?= $page->usp3() ?></h5>
          </div>
          <div class="col-4">
            <img src="assets/images/placeholder_1.png" style="width: 100%;"/>
            <h5><?= $page->usp3() ?></h5>
          </div>
          <div class="col-4">
            <img src="assets/images/placeholder_1.png" style="width: 100%;"/>
            <h5><?= $page->usp3() ?></h5>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col">
          <h5><?= $page->title_2() ?></h5>
          <ul>
            <li><?= $page->wanneer_1() ?></li>
            <li><?= $page->wanneer_2() ?></li>
            <li><?= $page->wanneer_3() ?></li>
          </ul>
        </div>
        <div class="col">
          <img src="assets/images/placeholder_1.png" style="width: 100%;"/>
        </div>
      </div>
    </div>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row">
          <div class="col">
            <h5><?= $page->title_verloop() ?></h5>
          </div>
          <div class="col">
            <!--Accordion wrapper-->
            <div class="accordion md-accordion accordion-4" id="accordionEx2" role="tablist" aria-multiselectable="true">

            <!-- Accordion card -->
            <div class="card">

              <!-- Card header -->
              <div class="card-header z-depth-1 teal lighten-4" role="tab" id="heading10">
                <a data-toggle="collapse" data-parent="#accordionEx2" href="#collapse10" aria-expanded="true"
                  aria-controls="collapse10">
                  <h4 class="mb-0 black-text text-center">
                    First title
                  </h4>
                </a>
              </div>

              <!-- Card body -->
              <div id="collapse10" class="collapse show" role="tabpanel" aria-labelledby="heading10"
                data-parent="#accordionEx2">
                <div class="card-body rgba-teal-strong white-text">
                  <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute,
                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                    3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                    shoreditch et.</p>

                  <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                    accusamus labore.</p>
                </div>
              </div>
            </div>
            <!-- Accordion card -->

            <!-- Accordion card -->
            <div class="card">

              <!-- Card header -->
              <div class="card-header z-depth-1 teal lighten-3" role="tab" id="heading11">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse11"
                  aria-expanded="false" aria-controls="collapse11">
                  <h4 class="mb-0 black-text text-center">
                    Second title
                  </h4>
                </a>
              </div>

              <!-- Card body -->
              <div id="collapse11" class="collapse" role="tabpanel" aria-labelledby="heading11"
                data-parent="#accordionEx2">
                <div class="card-body rgba-teal-strong white-text">
                  <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute,
                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                    3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                    shoreditch et.</p>

                  <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                    accusamus labore.</p>
                </div>
              </div>
            </div>
            <!-- Accordion card -->

            <!-- Accordion card -->
            <div class="card">

              <!-- Card header -->
              <div class="card-header z-depth-1 teal lighten-2" role="tab" id="heading12">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse12"
                  aria-expanded="false" aria-controls="collapse12">
                  <h4 class="mb-0 black-text text-center">
                    Third title
                  </h4>
                </a>
              </div>

              <!-- Card body -->
              <div id="collapse12" class="collapse" role="tabpanel" aria-labelledby="heading12"
                data-parent="#accordionEx2">
                <div class="card-body rgba-teal-strong white-text">
                  <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute,
                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                    3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                    shoreditch et.</p>

                  <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                    accusamus labore.</p>
                </div>
              </div>
            </div>
            <!-- Accordion card -->

            <!-- Accordion card -->
            <div class="card">

              <!-- Card header -->
              <div class="card-header z-depth-1 teal lighten-1" role="tab" id="heading13">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse13"
                  aria-expanded="true" aria-controls="collapse13">
                  <h4 class="mb-0 black-text text-center">
                    Fourth title
                  </h4>
                </a>
              </div>

              <!-- Card body -->
              <div id="collapse13" class="collapse" role="tabpanel" aria-labelledby="heading13"
                data-parent="#accordionEx2">
                <div class="card-body rgba-teal-strong white-text">
                  <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute,
                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                    3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                    shoreditch et.</p>

                  <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                    accusamus labore.</p>
                </div>
              </div>
            </div>
            <!-- Accordion card -->

            <!-- Accordion card -->
            <div class="card">

              <!-- Card header -->
              <div class="card-header z-depth-1 teal" role="tab" id="heading14">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse14"
                  aria-expanded="false" aria-controls="collapse14">
                  <h4 class="mb-0 black-text text-center">
                    Fifth title
                  </h4>
                </a>
              </div>

              <!-- Card body -->
              <div id="collapse14" class="collapse" role="tabpanel" aria-labelledby="heading14"
                data-parent="#accordionEx2">
                <div class="card-body rgba-teal-strong white-text">
                  <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute,
                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                    3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                    shoreditch et.</p>

                  <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                    accusamus labore.</p>
                </div>
              </div>
            </div>
            <!-- Accordion card -->
            </div>
            <!--/.Accordion wrapper-->
          </div>
        </div>
      </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>