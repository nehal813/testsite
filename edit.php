
<html>
<head>
    <body>

        <?php echo "chose an id to edit : "; ?>

        <h3>
            EDIT USER:<?php echo $_REQUEST['names'];?>
        </h3>

       <form method="POST" action="change.php">
           <table border="0" width="60%">
               <tr>
                   <td width="30%">
                       Name:
                       <input type="text" name="newname"
                           value="<?php echo  $_REQUEST['names'];?>" 
                   </td>
               </tr>
               <form method="POST" action="change.php">
                   <table border="0" width="60%">
                       <tr>
                           <td width="30%">
                               Email:
                               <input type="text" name="newemail"
                                   value="<?php echo $_REQUEST['emails'];?> "
                           </td>
                       </tr>

                       <form method="POST" action="change.php">
                           <table border="0" width="60%">
                               <tr>
                                   <td width="30%">
                                       Password:
                                       <input type="text" name="newpassword"
                                           value="<?php echo  $_REQUEST['passwords'];?> "
                                   </td>
                               </tr>
                           </table>
                           </br>
                               <input type="submit" value="save & update"/>
                               <input type="hidden" name="id" value="<?php echo $_REQUEST['ids'];?> "
                                    
                                 
                               </form>   <?php include('links.php');?>
</body>
</head>



</html>