<!DOCTYPE html>
<html lang="ko">

<head>
  <link rel="stylesheet" href="./css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="./js/bootstrap.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <?php
  $conn = mysqli_connect( 'localhost', 'root', '428337', 'test');
      $sql = "SELECT * FROM item LIMIT 10;";
      $result = mysqli_query( $conn, $sql );
    ?>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark border border-gray border-start-0 rounded">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">GameItemDB</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav justify-content-center">
          <a class="nav-link " href="main.html"> INTRO </a>
          <a class="nav-link active" aria-current="page" href="search.html">아이템 검색</a>
          <a class="nav-link" href="aution.html">상점</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
          Filter
        </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="option1" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              option1
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="option2" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              option2
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="option3" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              option3
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Search item keyword" aria-label="Search item keyword"
      aria-describedby="button-addon2">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2">찾기</button>
  </div>
  <?php
      while( $row = mysqli_fetch_array( $result ) ) {
        echo "이미지|";
        echo "<img src='data:image/png;base64,".base64_encode( $row[ 'image' ])."'width='50' height='50'/>";
        echo "    코드|";
        echo $row[ 'code' ];
        echo "    이름|";
        echo $row[ 'name' ];
        echo "    레벨|";
        echo $row[ 'level' ];
        echo "<br>\n";
      }
    ?>
</body>
</html>