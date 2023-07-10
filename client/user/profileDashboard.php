<?php 
   include '../db/db.php';
   session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="style.css" />
<link rel="icon" href="../images/favicon.png" type="image/x-icon">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- <script defer src="./assets/script.js"></script> -->
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body>
<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
       <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
 </button>
 <!--Heavy Hire Vertical Sidebar-->
 <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-4 py-4 overflow-y-auto bg-gray-50 dark:bg-teal-950">
       <a href="https://flowbite.com" class="flex items-center pl-2.5 mb-5">
          <img src="../images/logo.jpg" class="w-[100px] m-auto" alt="Flowbite Logo" />
       </a>
       
       <!-- <div class="flex items-center justify-center mb-4">
         <div class="w-12 h-12 bg-gray-300 rounded-full"></div>
       </div> -->
   
       <ul class="space-y-2 font-medium">
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Booked Rides</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Chats</span>
                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                <span id="notifications-button"  class="flex-1 ml-3 whitespace-nowrap">Notifications</span>

                <!--Notifications Page-->
                   <div id="notifications-page" class="fixed inset-y-0 left-0 flex flex-col w-72 px-2 bg-black text-white transition-transform duration-500 transform -translate-x-full">
                     <h2 class="text-2xl font-bold mb-4">Notifications</h2>

                     <button id="close-button" class="absolute top-2 right-2 w-8 h-8 rounded-full border border-white bg-white hover:bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="w-4 h-4 mx-auto my-auto">
                          <path fill-rule="evenodd" d="M11.414 10l5.293-5.293a1 1 0 0 0-1.414-1.414L10 8.586 4.707 3.293a1 1 0 0 0-1.414 1.414L8.586 10l-5.293 5.293a1 1 0 0 0 1.414 1.414L10 11.414l5.293 5.293a1 1 0 0 0 1.414-1.414L11.414 10z" clip-rule="evenodd" />
                        </svg>
                      </button>

                     <ul>
                       <li class="mb-2">Notification 1</li>
                       <li class="mb-2">Notification 2</li>
                       <li class="mb-2">Notification 3</li>
                       <!-- Add more notifications as needed -->
                     </ul>
                   </div>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Settings</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                <span id="log_out" class="flex-1 ml-3 whitespace-nowrap">Log out</span>
             </a>
          </li>
       </ul>
    </div>
 </aside>
 
 <div class="p-4 sm:ml-64">
   <label for="" class="text-2xl font-bold">Account Info</label>
    <div class="p-4 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
       <div class="grid grid-cols-1 gap-4 mb-4 w-full">
         <label for="" class="text-xl font-bold">Name</label>
         <?php
            $acc_id = $_SESSION['acc_id'];
            $get_profile = "select * from accounts where acc_id=$acc_id";
            $run_profile = $con->query($get_profile);
            $fetch_profile = $run_profile->fetch_assoc();
            $name = $fetch_profile['name'];
            $email = $fetch_profile['email'];

         ?>
         <input class="input border rounded-[10px] w-full px-5 py-2 text-xl" type="text" value="<?php echo $name; ?>"> 
       </div>

       <div class="grid grid-cols-4 gap-4 mb-4">
         <label for="" class="text-xl font-bold">Phone Number</label>
          <input class="input border rounded-[10px] w-full px-5 py-2 text-xl text-gray-500" type="string" placeholder="+91XXXXXXXXXX" value="">
       </div>

       <div class="grid grid-cols-4 gap-4 mb-4">
         <label for="" class="text-xl font-bold">Email</label>
          <input class="input border rounded-[10px] w-full px-5 py-2 text-xl text-gray-500" type="email" value="<?php echo $email; ?>">
       </div>

       <div class="grid grid-cols-4 gap-4 mb-4">
         <label for="" class="text-xl font-bold">Address</label>
         <textarea class="input border brounded-[10px] w-full px-5 py-8 text-xl" type="text" value="Your address"></textarea>
       </div>

       <div class="grid grid-cols-10 gap-4 mb-4">
         <button class="bg-teal-950 text-white hover:bg-teal-800 py-2 px-4 rounded font-semibold">Save</button>
       </div>
 </div>
 
    </body>

<!--Notifications button functionality-->

<script>
  const notificationsButton = document.getElementById('notifications-button');
  const closeButton = document.getElementById('close-button')
  const notificationsPage = document.getElementById('notifications-page');

  notificationsButton.addEventListener('click', () => {
    notificationsPage.classList.toggle('-translate-x-full');
  });

  closeButton.addEventListener('click', () => {
    notificationsPage.classList.toggle('-translate-x-full');
  });
  document.getElementById('log_out').addEventListener('click', () =>{
      localStorage.removeItem('acc_id')
      localStorage.removeItem('type_id')
      localStorage.removeItem('email')
      localStorage.removeItem('name')
      localStorage.removeItem('loggedIn')
      window.location.replace('/heavyhire/client/')
   })
</script>

</html>