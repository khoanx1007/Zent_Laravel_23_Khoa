<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Route Bài Viết</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="page-header">Danh Sách Bài Viết</h2>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <a href="{{route('backend.posts.create') }}" class="btn btn-primary float-right mb-3">Tạo Bài Viết</a>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tên Bài Viết</th>
                                                    <th>Hình ảnh</th>
                                                    <th>Mô tả</th>
                                                    <th>Danh mục</th>
                                                    <th>Thao Tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd gradeX">
                                                    <td>1</td>
                                                    <td>Bộ y tế rút ngắn thời gian cách ly F1</td>
                                                    <td><img src="https://media.doisongphapluat.com/thumb_x400x267/media/tran-cong-minh/2022/02/22/22-200041017still004.jpg" style="width: 100px; height: 70px; "></td>
                                                    <td class="center">a</td>
                                                    <td class="center">Tin tức</td>
                                                    <td class="center">
                                                        <a href="{{route('backend.posts.edit') }}" class="btn btn-info" class="btn btn-warning">Sửa</a>
                                                        <a href="" class="btn btn-info" class="btn btn-danger">Xoá</a> 
                                                    </td>
                                                </tr>
                                                <tr class="even gradeC">
                                                    <td>2</td>
                                                    <td>Huy động lực lượng để dập dịch ở Hồng Kông</td>
                                                    <td><img src="https://i.ytimg.com/vi/rZHmEUGQmeA/maxresdefault.jpg" style="width: 100px; height: 70px;"></td>
                                                    <td class="center">b</td>
                                                    <td class="center">Tin tức</td>
                                                    <td class="center">
                                                        <a href="{{route('backend.posts.edit') }}" class="btn btn-info" class="btn btn-warning">Sửa</a>
                                                        <a href="" class="btn btn-info" class="btn btn-danger">Xoá</a>                                                       
                                                    </td>
                                                </tr>
                                                <tr class="even gradeC">
                                                    <td>3</td>
                                                    <td>HVCN Bưu chính viễn thông hoãn thời gian tập trung tại trường</td>
                                                    <td><img src="https://cdn.baogiaothong.vn/upload/images/2020-1/article_img/2020-03-07/4-1583543840-width1004height565.jpg" style="width: 100px; height: 70px;"></td>
                                                    <td class="center">c</td>
                                                    <td class="center">Giáo dục</td>
                                                    <td class="center">
                                                        <a href="{{route('backend.posts.edit') }}" class="btn btn-info" class="btn btn-warning">Sửa</a>
                                                        <a href="" class="btn btn-info" class="btn btn-danger">Xoá</a>                                                        
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>  
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    </body>
</html>
