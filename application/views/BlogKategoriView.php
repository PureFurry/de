

<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Kategori Düzenleme</title>

    <?php $this->load->view("dependencies/style"); ?>

</head>

<body>


    <div class="container">

        <h3 class="text-center">Blog Kategori Düzenleme</h3>

        <div class="row">
                <div class="col-md-12">

                    <form action="<?php echo base_url("BlogKategori/insert"); ?>" method="post">
                        <div class="row">
                            <div class="form-group col-md-11">
                                <input type="text" class="form-control" name="baslik_post">
                            </div>
                            <div class="col-md-1">
                                <button class="btn btn-primary">Kaydet</button>
                            </div>
                        </div>
                    </form>

                </div>
        </div>

        <div class="row">

            <div class="col-md-12">

                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <th class="text-center">Açıklama</th>
                        <th class="text-center">Update</th>
                        <th class="text-center">Sil</th>
                    </thead>
                    <tbody>
                         <?php  foreach ($blogkategori as $liste) { ?>
                            <tr>
                                <td class="text-left">
                                <form action="<?php echo base_url("BlogKategori/update/$liste->id"); ?>" method="post">
                                    <input type="text" class="form-control" name="baslik_edit_post_came" value="<?php echo $liste->kategori_baslik; ?> ">
                                
                                </td>
                                <td class="text-center" style="width: 100px;">
                                    <button class="btn btn-dark" >Güncelle</button>
                                </td>
                                </form>
                                <td class="text-center" style="width:100px;">
                                    <a href="<?php echo base_url("BlogKategori/delete/$liste->id"); ?>" class="btn btn-danger">Sil</a>
                                </td>
                            </tr> 
                        <?php } ?>
                    </tbody>
                </table>
                <a class="btn btn-success" href="<?php echo base_url("BlogKategori/go_logScreen ") ?>">Log</a>
            </div>

        </div>

    </div>




    <?php $this->load->view("dependencies/scripts"); ?>
</body>
</html>