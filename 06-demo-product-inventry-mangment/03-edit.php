<?php 

require 'common/database.php';
require 'common/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //clean the input
    $EAN = test_input($_POST["EAN"]);
    $name = test_input($_POST["Name"]);
    $category = test_input($_POST["Category"]);
    $description = test_input($_POST["Description"]);

  
    //prepare sql update statement
    $sql = "UPDATE Products SET EAN='$EAN', Name='$name', Category='$category', Description='$description' WHERE id=".$_GET['id'];
    
    //execute update query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //redirect to list page
    header('Location: /06-demo-product-inventry-mangment/01-list.php');

}

//fetch current record from database
$result = mysqli_query($conn, "SELECT * FROM Products WHERE id=".$_GET['id']);
$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE HTML>  
<html>
<head>
 <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>


<body class="bg-gray-200">  

    <?php require_once 'common/navigation.php' ?>

    <div class="w-full max-w-screen-xl mx-auto px-2 py-8">
        <h2 class="text-gray-700 font-bold pb-4 text-2xl">Update Product - <?=$row['Name']?></h2>

        <form class="w-full bg-white shadow-md rounded px-8 pt-6 pb- mb-4" method="POST">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-EAN">
                    EAN
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="EAN" name="EAN" type="text" placeholder="00000" value="<?=$row['EAN']?>">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-Name">
                    Name
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" name="Name" type="text" placeholder="John" value="<?=$row['Name']?>">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-2 pb-6">
                <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-Category">
                    Category
                </label>
                <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="Category" name="Category">
                            <option <?=$row['Category']=='Home Decore' ? 'selected':''?>>Home Decore</option>
                            <option <?=$row['Category']=="Gent's Sport" ? 'selected':''?>>Gent's Sport</option>
                            <option <?=$row['Category']=='Ladies Fashion' ? 'selected':''?>>Ladies Fashion</option>
                            <option <?=$row['Category']=='Kids Wear' ? 'selected':''?>>Kids Wear</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-Description">
                    Description
                </label>
                <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="Description" name="Description" rows="4" cols="50"><?=$row['Description']?></textarea>
                </div>
            </div>
            <div class=" pb-4">
            <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Save Product
            </button>
        </div>

    </form>
    </div>

</body>