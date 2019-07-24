<form action="/booking" method="post">
<input type="hidden" name="film_id" value="{{$film_id}}">
<table>
    <tr>
        <td><input type="checkbox" name="hall[]" value="1"></td>
        <td><input type="checkbox" name="hall[]" value="2"></td>
        <td><input type="checkbox" name="hall[]" value="3"></td>
        <td><input type="checkbox" name="hall[]" value="4"></td>
        <td><input type="checkbox" name="hall[]" value="5"></td>
        <td><input type="checkbox" name="hall[]" value="6"></td>
        <td><input type="checkbox" name="hall[]" value="7"></td>
        <td><input type="checkbox" name="hall[]" value="8"></td>
    </tr>
    <tr>
        <td><input type="checkbox" name="hall[]" value="9"></td>
        <td><input type="checkbox" name="hall[]" value="10"></td>
        <td><input type="checkbox" name="hall[]" value="11"></td>
        <td><input type="checkbox" name="hall[]" value="12"></td>
        <td><input type="checkbox" name="hall[]" value="13"></td>
        <td><input type="checkbox" name="hall[]" value="14"></td>
        <td><input type="checkbox" name="hall[]" value="15"></td>
        <td><input type="checkbox" name="hall[]" value="16"></td>
    </tr>
</table>
<input type="submit" name="booking" value="Booking">
</form>
