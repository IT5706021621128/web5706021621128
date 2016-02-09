<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> การสร้างฟอร์มในการรับค่าเพื่อคำนวน </title>
  </head>
  <body>
    <form method="post" action="posssawee_cal.php">
      <table border="2" align="center" width="35%">
        <tr>
          <td colspan="2" align="center" bgcolor="#999999">
          <big> Profile </big>
        </td>
      </tr>
        <tr>
          <td> ชื่อ - นามสกุล </td>
          <td><input type="text" name="name" size="37" value=""/></td>
        </tr>
        <tr>
          <td> ชื่อเล่น </td>
          <td><input type="text" name="nick" size="37" value=""/></td>
        </tr>
        <tr>
          <td> อายุ </td>
          <td><input type="text" name="age" size="37" value=""/> </td>
        </tr>
        <tr>
          <td> วันเกิด </td>
          <td><input type="date" name="day" size="37" value=""/> </td>
        </tr>
        <tr>
          <td> Email </td>
          <td><input type="eamil" name="email" size="37" value=""/> </td>
        </tr>
        <tr>
          <td> เบอร์โทรศัพท์ </td>
          <td><input type="text" name="phone" size="37" value=""/> </td>
        </tr>
        <tr>
          <td> สถานศึกษา </td>
          <td><input type="text" name="school" size="37" value=""/> </td>
        </tr>
        <tr>
          <td> คณะ </td>
          <td><input type="text" name="faculty" size="37" value=""/> </td>
        </tr>
        <tr>
          <td> สาขา </td>
          <td><input type="text" name="Branch" size="37" value=""/> </td>
        </tr>
        <tr>
          <td> ชั้นปี </td>
          <td><input type="text" name="year" size="37" value=""/> </td>
        </tr>

        <tr>
            <td colspan="2" align="center">
              <input type="submit" value="   OK   "/>
              <input type="reset" value="   Reset   "/>
            </td>
        </tr>
        </table>
      </form>
  </body>
</html>
