<tr>
    <th>stages of experience:</th>
    <td>
        <?php
        if(isset($_SESSION["form_data"]["stage"]))
        {
            foreach($_SESSION["form_data"]["stage"] as $stage)
            {
                ?>
            <input name="stage[]" 
                   type="number" 
                   min="0" 
                   max="1000000" 
                   value="<?=$stage?>">
            <?php
            }
        }
        ?>
        <span id="addspan" onclick="add_stage(1);" accesskey="a">Add stage</span>
    </td>
</tr>