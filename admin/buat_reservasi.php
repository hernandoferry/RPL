<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>USB YPKP Inn Hotel</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Sisfo Reservasi USB YPKP Inn Hotel</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <?php include 'menu.php'; ?>           
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Buat Reservasi</h1>
                        <div class="alert alert-info alert-dismissable"> Silahkan lengkapi isian form dibawah ini dengan benar kemudian klik tombol simpan untuk menyimpan data reservasi tamu. 
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
           </div>
           
                    </div>
                    <!-- /.col-lg-12 -->
                    <form role="form" method="POST" action="aksi/pesan_kamar.php">
              <div class="form-group">
              <table>
              <tr>
                    <td height="50"><label>ID Pemesan </label>
                    <td><label>:</label></td>
                    <td colspan="2"><input class="form-control" name="id_pmesan" autofocus required aria-required="true"></td>
                    </tr>
               
               <tr>
                    <td height="50"><label>Nama Lengkap </label>
                    <td><label>:</label></td>
                    <td colspan="2"><input class="form-control" name="nm_pmesan" autofocus required aria-required="true"></td>
                    </tr>
               
                 <tr>
                    <td height="50"><label>Kewarganegaraan </label>
                    <td><label>:</label></td>
                    <td colspan="2"><input class="form-control" name="id_negara" autofocus required aria-required="true"></td>
                    </tr>

                </td>
                    </tr>
                    <tr>
                    <td height="50"><label>No HP/Tlp </label>
                    <td><label>:</label></td>
                    <td colspan="2"><input class="form-control" name="tlp_hp_pmesan" autofocus required aria-required="true"></td>
                    </tr>

                    <tr>
                       <td height="50"><label>Alamat Email</label>
                       <td><label>:</label></td>
                       <td colspan="2"> <input class="form-control" name="mail_pmesan" autofocus required aria-required="true"></td>
                    </tr>

                     <tr>
                       <td height="50"><label>Alamat Lengkap</label>
                       <td><label>:</label></td>
                       <td colspan="2"> <textarea class="form-control" rows="" name="alamat" autofocus required aria-required="true"></textarea></td>
                    </tr><br><br>


                    <tr>
                    <td height="50"> <label> Tanggal </label></td>
                    <td>:</td>
                    <td>
                    <input class="form-control date start input-lg" size="20" type="text" value="<?php echo (isset($_SESSION['start'])) ? $_SESSION['start'] : ''; ?>" Placeholder="Check In" name="start" id="from" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" data-link-format="yyyy-mm-dd">
                    </td>

                    <td>
                    <input class="form-control date end input-lg" size="20" type="text" value="<?php echo (isset($_SESSION['end'])) ? $_SESSION['end'] : ''; ?>"  placeholder="Check Out" name="end" id="end" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" data-link-format="yyyy-mm-dd">
                    </td>

          </tr>

                    <tr>
                       <td height="50"><label>Kamar</label>
                       <td><label>:</label></td>
                       <td>
                        <select class="form-control input-sm" aria-controls="dataTables-example" name="typ_kamar">
                         <option selected>Pilih Tipe Kamar</option>
                         <option value="10">Standard</option>
                        </select>
                    </td>

                    <td colspan="2">
                        <select class="form-control input-sm" aria-controls="dataTables-example" name="nmr_kamar">
                         <option selected>Pilih Nomor Kamar</option>
                        <option value="10">133</option>
                         

                        </select>
                    </td>
                    </tr>

                     <tr>
                       <td height="50"><label>Jumlah Tamu</label>
                       <td><label>:</label></td>
                       <td > <input class="form-control" name="jml_tamu" autofocus required aria-required="true"></td>
                       <td colspan="2">orang</td>
                    </tr>

                  
        </form>

                    <tr>
                      <td height="50"><button class="btn btn-primary" type="submit">Simpan</button></td>
                      <td colspan="3"><button class="btn btn-default" type="reset">Reset</button>
                    </table>




                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
