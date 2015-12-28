<html>
      <head>
          <meta charset="utf-8">
      </head>
      <body>
      <?php
      if($_POST['name'])
      {
      $conn=mysql_connect("localhost:3306","root","pude2015")or die("数据库连接失败"    );
      mysql_select_db("shiti")or die("选择数据库失败");
      mysql_query("set names utf8");
      $sql1="insert into daan(name,daan,time) values ('".$_POST['name']."','" . $_POST['daan$i'] . "','" . $_POST['time'] . "')";
      if ($result=mysql_query($sql1))
      {
          echo "<script>alert('提交成功');location.href='shiti.php';</script>";
      }
      }
      ?>
      <h2>检测</h2>
      <?php
          $conn=mysql_connect("localhost:3306","root","pude2015")or die("数据库连接失败");
          mysql_select_db("shiti")or die("选择数据库失败");
          mysql_query("set names utf8");
          echo "<form action='shiti.php' method='post'>";
          echo "姓名 ：<input type='text' name='name'>";
          echo "<h>时间</h><input type='time' name='time' ><br>";
          $sql="select ti from ti order by rand() limit 8";
          $result=mysql_query($sql) or die("查询失败！");
          $i=1;
          while($row=mysql_fetch_array($result))
          {
               echo "<h3>".$row['ti']."</h3><input type='text' name='daan$i' />";
               $i++;
         }
          echo "<br>";
          echo "<center><input type='submit' value='提交'></center>";
          echo "</form>";
      ?>
      </body>
 </html>
