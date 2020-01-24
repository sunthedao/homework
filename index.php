<!--php -->
<?php require_once './connect.php' ?>
<?php $connection = DB() ?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="style.css">

    <!-- awesome Font -->
    <script src="https://kit.fontawesome.com/c1e251547b.js" crossorigin="anonymous"></script>


    <title>Test</title>
</head>

<body>

    <!-- Search form -->
    <div class="container">
        <!--  //! div align left-right เค้าจะไม่นิยมใช้งานในนี้ เค้าจะจัด style ใน CSS -->
        <div align="left" id="first" class="row">
            <div class="col">
                <form id="search" class="form-inline md-form form-sm active-cyan-2 mt-2">
                    <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search">
                    <i class="fas fa-search" aria-hidden="true"></i>
                </form>
            </div>
            <!-- icon -->

            <!-- //! div align left-right เค้าจะไม่นิยมใช้งานในนี้ เค้าจะจัด style ใน CSS -->
            <!-- //! พวก icon ให้จำไว้ว่าถ้าเป็นปุ่มน่ะ เราจะต้องใช้ tag button หรือ a ครอบด้วย  ถ้าเป็น icon ที่ใช้แสดงเฉยๆ ไม่ได้กดอะไร ก็ไม่ต้องครอบ -->
            <!-- //! แล้วก็การจัดปุ่ม ซ้าย ขวา กลาง มันจะมี class ชื่อว่า float-ตามด้วยตำแหน่งที่เราต้องการ ถ้าชิดขวาก็ float-right -->
            <div align="right" class="col">
                <button type="button" class="btn btn-sm btn-light color-green" value="1">
                    <i class="fas fa-2x fa-plus" id="icon" data-toggle="modal" data-target="#myModal"></i>
                </button>
            </div>
        </div>
    </div>
    <br>


    <!-- Show Table -->
    <div class="container">
        <table class="table table-striped" style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Mobile No.</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>ทดสอบ</td>
                <td>ทดลอง</td>
                <td>example@gmail.com</td>
                <td>08888</td>
                <td>สมุทรปราการ</td>
                <td>
                    <button type="button" class="btn btn-sm btn-light color-blue" value="1">
                        <i class="fas fa-edit" id="edit"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-light color-red" id="btnlight" value="1">
                        <i class="fas fa-trash-alt" id="trash"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>ทดสอบ</td>
                <td>ทดลอง</td>
                <td>example@gmail.com</td>
                <td>08888</td>
                <td>สมุทรปราการ</td>
                <td>
                    <button type="button" class="btn btn-sm btn-light color-blue" value="1">
                        <i class="fas fa-edit" id="edit"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-light color-red" id="btnlight" value="1">
                        <i class="fas fa-trash-alt" id="trash"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>ทดสอบ</td>
                <td>ทดลอง</td>
                <td>example@gmail.com</td>
                <td>08888</td>
                <td>สมุทรปราการ</td>
                <td>
                    <button type="button" class="btn btn-sm btn-light color-blue" value="1">
                        <i class="fas fa-edit" id="edit"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-light color-red" id="btnlight" value="1">
                        <i class="fas fa-trash-alt" id="trash"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>ทดสอบ</td>
                <td>ทดลอง</td>
                <td>example@gmail.com</td>
                <td>08888</td>
                <td>สมุทรปราการ</td>
                <td>
                    <button type="button" class="btn btn-sm btn-light color-blue" value="1">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-light color-red" id="btnlight" value="1">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>ทดสอบ</td>
                <td>ทดลอง</td>
                <td>example@gmail.com</td>
                <td>08888</td>
                <td>สมุทรปราการ</td>
                <td>
                    <button type="button" class="btn btn-sm btn-light color-blue" value="1">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-light color-red" id="btnlight" value="1">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>ทดสอบ</td>
                <td>ทดลอง</td>
                <td>example@gmail.com</td>
                <td>08888</td>
                <td>สมุทรปราการ</td>
                <td>
                    <button type="button" class="btn btn-sm btn-light color-blue" value="1">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-light color-red" id="btnlight" value="1">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>ทดสอบ</td>
                <td>ทดลอง</td>
                <td>example@gmail.com</td>
                <td>08888</td>
                <td>สมุทรปราการ</td>
                <td>
                    <button type="button" class="btn btn-sm btn-light color-blue" value="1">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-light color-red" id="btnlight" value="1">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>ทดสอบ</td>
                <td>ทดลอง</td>
                <td>example@gmail.com</td>
                <td>08888</td>
                <td>สมุทรปราการ</td>
                <td>
                    <button type="button" class="btn btn-sm btn-light color-blue" value="1">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-light color-red" id="btnlight" value="1">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>9</td>
                <td>ทดสอบ</td>
                <td>ทดลอง</td>
                <td>example@gmail.com</td>
                <td>08888</td>
                <td>สมุทรปราการ</td>
                <td>
                    <button type="button" class="btn btn-sm btn-light color-blue" value="1">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-light color-red" id="btnlight" value="1">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>10</td>
                <td>ทดสอบ</td>
                <td>ทดลอง</td>
                <td>example@gmail.com</td>
                <td>08888</td>
                <td>สมุทรปราการ</td>
                <td>
                    <button type="button" class="btn btn-sm btn-light color-blue" value="1">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-light color-red" id="btnlight" value="1">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </td>
            </tr>

        </table>
    </div>
    <br>

    <!-- pagiantion -->
    <div class="container">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- <?php
            $sql = "SELECT * from users";
            $result = mysqli_query($connection, $sql);

            // check rows
            if (mysqli_num_rows($result) > 0) {

                // ถ้า row มีมากกว่า 0 ทำในนี้
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["Firstname"] . "</td>
                    <td>" . $row["Lastname"] . "</td>
                    <td>" . $row["Email"] . "</td>
                    <td>" . $row["MobileNo"] . "</td>
                    <td>" . $row["Address"] . "</td>
                    </tr><br>";
                }
                echo "</table>";
            } else {
                echo "0 result check your coding";
            }


            ?> -->




    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Create Users</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="save.php" method="POST" name="save" class="MyForm">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">ID</label>
                            <input type="text" class="form-control" name="ID">
                            <!-- id="<?php echo $row["id"]; ?> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Firstname</label>
                            <input type="text" class="form-control" name="Firstname">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Lastname</label>
                            <input type="text" class="form-control" name="Lastname">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email</label>
                            <input type="email" class="form-control" name="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Mobile No.</label>
                            <input type="number" class="form-control" name="MobileNo">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Address</label>
                            <textarea class="form-control" rows="3" name="Address"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="insertdata" value="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>


</html>
<script>
    $(document).ready(function() {
        $(".color-blue").click(function() {
            $('.color-blue').val($(this).data('id'));
            $('#myModal').modal('show');
            $('.MyForm').trigger("reset");


            $.ajax({
                url: '/hm/api/newapi.php',
                method: "post",
                success: (res) => {
                    console.log(res);                   
                    // $("input[name='ID']").val(res.id);
                    // $("input[name='Firstname']").val(res.Firstname);
                    // $("input[name='Lastname']").val(res.Lastname);
                    // $("input[name='Email']").val(res.Email);
                    // $("input[name='MobileNo']").val(res.MobileNo);
                    // $("textarea[name='Address']").val(res.Address);
                }
            });
        });
    });
</script>

<?php $connection->close() ?>