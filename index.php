
<?php
session_start();
include "connection.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display data</title>
    <link rel="icon" href=
data:image/png;base64,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
        type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script> 
</head>
  <style>
    table {  
        border-collapse: collapse;  
    }  
        .inline{   
            display: inline-block;   
            float: right;   
            margin: 20px 0px;   
        }   
         
        input, button{   
            height: 34px;   
        }   
  
    .pagination {   
        display: inline-block;   
    }   
    .pagination a {   
        font-weight:bold;   
        font-size:18px;   
        color: black;   
        float: left;   
        padding: 8px 16px;   
        text-decoration: none;   
        border:1px solid black;   
    }   
    .pagination a.active {   
            background-color: pink;   
    }   
    .pagination a:hover:not(.active) {   
        background-color: skyblue;   
    }   
      
    .text{
        text-align: center;
        border: solid;
    }
  </style>
  <body>
  <?php  
      
       
      
          $per_page_record = 4;        
          if (isset($_GET["page"])) {    
              $page  = $_GET["page"];    
          }    
          else {    
            $page=1;    
          }    
      
          $start_from = ($page-1) * $per_page_record;     
      
          $query = "SELECT * FROM cutomerinfo LIMIT $start_from, $per_page_record";     
          $rs_result = mysqli_query ($con, $query);    
      ?>    
    
<a href="insert.php"  class="btn btn-primary">Add User</a>
<div class="container">   
      <br>   
      <div>   
         
        <table class="table table-striped table-condensed    
                                          table-bordered">   
  <thead>
    <h1 class="text">
    <h1>Data</h1>   
        <p>This page demonstrates the basic    
           Pagination using PHP and MySQL.   
        </p>  
    </h1>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Phone number</th>
      <th scope="col">Address</th>
      <th scope="col">operation</th>

      




    </tr>
  </thead>
  <tbody>
  <tr>
    <?php
    $select="select * from cutomerinfo";
    $result=mysqli_query($con,$select);
    while($row=mysqli_fetch_assoc($result)){
        ?>
   
   
      <td><?php echo $row['Id'];?></td>
      <td><?php echo $row['Name'];?></td>
      <td><?php echo $row['Email'];?></td>
      <td><?php echo $row['Phoneno'];?></td>
      <td><?php echo $row['Phoneno'];?></td>
      <td><?php echo $row['Address'];?></td>
      <td><a href="update.php?id=<?php echo $row['Id']; ?>"   class="btn btn-info">Update</a>
    <a href="delete.php?id=<?php echo $row['Id']; ?>" onclick="return checkDelete()"  class="btn btn-danger">Delete</a>

</td>




     
    </tr>
    <?php
    }
  ?>
  </tbody>

</table>

<div class="pagination">    
      <?php  
        $query = "SELECT COUNT(*) FROM cutomerinfo";     
        $rs_result = mysqli_query($con, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0];     
          
    echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='index.php?page=".($page-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='index.php?page="  
                                                .$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='index.php?page=".$i."'>   
                                                ".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a href='index.php?page=".($page+1)."'>  Next </a>";   
        }   
      ?>    
      </div>  
  
  
      <div class="inline">   
      <input id="page" type="number" min="1" max="<?php echo $total_pages?>"   
      placeholder="<?php echo $page."/".$total_pages; ?>" required>   
      <button onClick="go2Page();">Go</button>   
     </div>    
    </div>   
  </div>  
  <script>   
    function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        window.location.href = 'index.php?page='+page;   
    }   
  </script>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</body>
</html>
