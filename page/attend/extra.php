
$url="https://www.jqueryscript.net/demo/Exporting-Html-Tables-To-CSV-XLS-XLSX-Text-TableExport/";

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>jQuery TableExport Basic Demo</title>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">



<table class="table table-striped table-bordered"
                                   data-name="cool-table">
                                <thead>
                             <tr>
                                 <td style="width: 180px;">Student Management System</td>
                             </tr>
                                <tr>
                                    <th style="padding: 15px; background-color: #000000">Rank</th>
                                    <th>Country</th>
                                    <th>Population</th>
                                    <th>% of world population</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php for($i=0; $i<30; $i++){ ?>    
                                <tr>
                                    <td><?php echo "$i"; ?></td>
                                    <td>Hamza</td>
                                    <td>1,370,570,000</td>
                                    <td>18.9%</td>
                                    <td>June 24, 2015</td>
                                </tr>
                                
                            <?php } ?>
                                </tbody>
                            </table>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="<?php echo $url; ?>FileSaver.min.js"></script>
<script src="<?php echo $url; ?>Blob.min.js"></script>
<script src="<?php echo $url; ?>xls.core.min.js"></script>

<script src="<?php echo $url; ?>dist/js/tableexport.js"></script>
<script>
  $("table").tableExport({formats: ["xlsx","xls", "csv", "txt"],    });
</script>
