<?php

?> 
<style>
    table,td,tr,th{
        border-collapse: collapse;
    }
    th{
        background: red;
    }
    a{
        
    }
</style>
<h2> List post </h2> 
<a href="index.php?demo=user&method=add" style="text-decoration: none;margin-right: 20px;"><button type="button">Add New</button></a>
<a href="index.php?demo=user&method=update" style="text-decoration: none;margin-right: 20px;"><button type="button">Update</button></a>

<br/> <br/>
<a href="index.php?demo=user">Reset</a>

<form action="index.php?demo=user" method="post">
    Username To Search : <input type="text" name="search_name"/>
    <input type="submit" name="btn_search" value="Search"/>
</form>



<table border ="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Email</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if (isset($listpost)) { ?>
            <?php foreach ($listpost as $index => $item) { ?>
                <tr>
                    <td><?php echo $index ?></td>
                    <?php $item['id']; ?>
                    <td><?php echo $item['username']; ?></td>
                    <td><?php echo $item['email']; ?></td>
                    <td><a href="index.php?demo=user&method=update&value=<?php echo $item['id']; ?>">Edit</a></td>
                    <td><a name="btn_delete" href="index.php?demo=user&del=<?php echo $item['id']; ?>" style="text-decoration: none;">Delete</a></td>
                </tr>
            <?php } ?>
        <?php } ?>
    </tbody>
</table>
    
