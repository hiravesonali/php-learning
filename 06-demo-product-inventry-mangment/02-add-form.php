<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get data & save in the DB

  $EAN = test_input($_POST["EAN"]);
  $name = test_input($_POST["Name"]);
  $category = test_input($_POST["Category"]);
  $description = test_input($_POST["Description"]);

  header('Location: /06-demo-product-inventry-mangment/01-list.php');

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<!DOCTYPE HTML>  
<html>
<head>
 <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>


<body class="bg-gray-200">  

<nav class="flex items-center justify-between flex-wrap bg-indigo-500 p-6">
  <div class="flex items-center flex-shrink-0 text-white mr-6">
    <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
    <span class="font-semibold text-xl tracking-tight mr-10">Product-Managment</span>
  </div>
  <div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border rounded text-white border-white-400 hover:text-indigo-500 hover:bg-white">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">
      <a href="#responsive-header" class="block mt-4 text-base lg:inline-block lg:mt-0 text-indigo-100 hover:text-white mr-8">
        Home
      </a>
      <a href="#responsive-header" class="block mt-4 text-base lg:inline-block lg:mt-0 text-indigo-200 hover:text-white mr-8">
        Customer Form
      </a>
      <a href="#responsive-header" class="block mt-4 text-base lg:inline-block lg:mt-0 text-indigo-200 hover:text-white">
        About
      </a>
    </div>
    <div>
      <a href="#" class="inline-block text-base px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-indigo-500 hover:bg-white mt-4 lg:mt-0">All Data</a>
    </div>
  </div>
</nav>




<div class="w-full max-w-screen-xl mx-auto px-2 py-8">
    <h2 class="text-gray-700 font-bold pb-4 text-2xl">Add New Product</h2>

    <form class="w-full bg-white shadow-md rounded px-8 pt-6 pb- mb-4" method="POST">
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-EAN">
        EAN
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="EAN" name="EAN" type="text" placeholder="00000">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-Name">
        Name
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" name="Name" type="text" placeholder="John">

    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-2 pb-6">
      <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-Category">
        Category
      </label>
      <div class="relative">
            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="Category" name="Category">
            <option>Home Decore</option>
            <option>Gent's Sport</option>
            <option>Ladies Fashion</option>
            <option>Kids Wear</option>
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
      <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="Description" name="Description" rows="4" cols="50">
        </textarea>
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