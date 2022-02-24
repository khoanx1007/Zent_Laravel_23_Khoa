<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sửa Danh Mục</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <!-- main -->
            <main>
                <div class="container-fluid px-4">
                    <h3 class="text-center my-3">Sửa Danh Mục</h3>
                    <hr>
                    <form action="{{route('backend.categories.update') }}" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <input type="hidden" name="_method" value="put"/>
                            <div class="form-group mb-3">
                                <label for="">Tên Danh Mục</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Mô tả</label>
                                <input type="text" class="form-control" name="description">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Ảnh nền</label>
                                <input type="file" class="form-control" name="thumbnail">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Nội Dung</label>
                                <input type="text" class="form-control" name="content">
                            </div>
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="assets/adm/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
</body>
</html>