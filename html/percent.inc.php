<tr>
    <th>Start wage:</th>
    <td><input type="number"
               min="0"
               max="1000000"
               name="start_wage"
               value="<?=$_SESSION["form_data"]["start_wage"]?>"></td>
</tr>
<tr>
    <th>Rate of increase:</th>
    <td>
        <input name="percentual_increase" 
               type="number" 
               min="0" 
               max="100" 
               value="<?=$_SESSION["form_data"]["percentual_increase"]?>">
    </td>
</tr>