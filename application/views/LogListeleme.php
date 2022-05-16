<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php $this->load->view("dependencies/style"); ?>
</head>
<body>
<table class="table table-bordered table-hover table-striped ">
            <thead>
                        <th class="text-center">Log Açıklama</th>
                        <th class="text-center">Date</th>
            </thead>
<tbody>
    <div class="row">
        <div class ="col-md-11">
        <?php  foreach ($admin as $liste) { ?>
            <tr>
                <td class="text-center">
                     <?php echo $liste->yonetici_islem; ?>
                </td>
                <td>
                    <?php echo $liste -> process_time?>
                </td>


            </tr>



            <?php } ?>
        </div>
    </div>
        </tbody>
        </table>
        </body>
        <?php $this->load->view("dependencies/scripts"); ?>
</html>