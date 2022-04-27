<?php
error_reporting(-1);
ini_set("display_errors", on);

require_once(__DIR__."/inc/init.inc.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Salary Calculator</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="/javascript/functions.js"></script>
    </head>
    <body>
        <p>
            This tool helps you to calculate your future salary until your pension.
        </p>
        <form action="<?=$_SERVER["REQUEST_URI"]?>" method="post">
            <table id="stage">
                <tr>
                    <th>Start date:</th>
                    <td><input name="start_date" 
                               type="date" 
                               value="<?= date("Y-m-d", time());?>">
                    </td>
                </tr>
                <tr>
                    <th>End date:</th>
                    <td><input name="end_date" 
                               type="date" 
                               value="<?= date("Y-m-d", time());?>">
                    </td>
                </tr>
                <tr>
                    <th>Wage growth:</th>
                    <td>
                        <label>
                            <input onclick="submit()" 
                                   type="radio" 
                                   name="calculation" 
                                   value="percentually" 
                                    <?=$_SESSION["calc"]["percent"]?>>
                            percentually
                        </label>
                        <label>
                            <input onclick="submit()" 
                                   type="radio" 
                                   name="calculation" 
                                   value="stages" 
                                    <?=$_SESSION["calc"]["stage"]?>>
                            experience levels
                        </label>
                    </td>
                </tr>
                <?php
                $form_import=__DIR__."/html/stage.inc.php";
                
                if(!empty($_SESSION["calc"]["percent"]))
                    $form_import=__DIR__."/html/percent.inc.php";
                
                include($form_import);
                ?>
            </table>
            <p><input name="calculator" type="submit" value="Calculate!"></p>
        </form>
        <pre>
<?=var_dump($_SESSION["form_data"])?>
        </pre>
    </body>
</html>
