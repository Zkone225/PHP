<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <?php
        require_once("TypeMonumentLister.php");
        $listeTypeMonument = typeMonument_findAll();
        //print_r($listeTypeMonument);
    ?>
</head>
<body style="text-align: center; margin: 200px;" >
    
    <div class='container'>
    <h1>Liste de Type de Monument</h1>
    <table border= "1px" class="w3-table">
        <thead style = "center; border-color: black; background: black;">
            <th style= "text-align: center; color: white;">Libelle</th>
            <th style= "text-align: center; color: white;">actions</th>            
        </thead>
        <tbody style = "text-align: center; border-color: black; background: gray;">
        <?php foreach($listeTypeMonument as $ligne) {?>
            <tr>
                <td><?php echo $ligne['Libelle_TYPE_Monument'];?></td>
                <td> 
                    <a href="">voir</a> <a href="">Modifier</a> <a href="">Suprimer</a>

                </td>            
            </tr>           
            <?php
            }
            ?>         
        </tbody>
        

    </table>
    </div>



</body>


</html>